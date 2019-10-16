CREATE TABLE IF NOT EXISTS blog_user(
	user_id INT(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	user_name VARCHAR(250) NOT NULL,
	user_detail TEXT NULL DEFAULT NULL,
	user_role ENUM('Author', 'Reader') NOT NULL DEFAULT 'Reader'
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS blog_menu (
  `menu_id` INT(6) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(150) NOT NULL,
  `menu_description` tinytext,
  `menu_status` enum('Active','Suspend') NOT NULL DEFAULT 'Active',
  `menu_link_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS blog_article(
	article_id INT(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	article_category INT(6) NOT NULL COMMENT 'Refers to blog_menu(menu_id)',
	article_title VARCHAR(1200) NOT NULL,
	article_content TEXT NOT NULL,
	article_status ENUM('Published', 'Suspended', 'Deleted', 'Waiting For Approval') NOT NULL DEFAULT 'Waiting For Approval',
	article_author INT(12) NOT NULL COMMENT 'Refers to blog_user(user_id)',
	article_created_on DATETIME NOT NULL,
	article_updated_on DATETIME NULL DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Foreign Key Constrains

ALTER TABLE blog_article
  ADD CONSTRAINT FK_article_category FOREIGN KEY (article_category) REFERENCES blog_menu (menu_id) ON DELETE CASCADE ON UPDATE CASCADE;
 
ALTER TABLE blog_article
  ADD CONSTRAINT FK_article_author FOREIGN KEY (article_author) REFERENCES blog_user (user_id) ON DELETE CASCADE ON UPDATE CASCADE;