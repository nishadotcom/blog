<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function mysql_date($date=FALSE)
{
	return ($date) ? date('Y-m-d', strtotime($date)) : date('Y-m-d');
}

function mysql_date_and_time($date=FALSE)
{
	return ($date) ? date('Y-m-d H:i:s', strtotime($date)) : date('Y-m-d H:i:s');
}

function custom_date($format, $date=FALSE)
{
    return ($date) ? date($format, strtotime($date)) : date($format);
}

function string_hash($string)
{
	$ci =& get_instance();

	$password 	= $string.$ci->config->item('sc_password_salt');

	return ($string) ? md5($password) : '';
}

function send_mail($subject, $to, $message, $param = FALSE)
{
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.CAXSC_MAIL_BOX . "\r\n";
	if($param && isset($param['cc']))
	{
		$headers .= 'Cc: '.$param['cc'] . "\r\n";
	}
	
    // write log
    error_log("----------\r\n", 3, LOG_FILE_MAIL);   
    error_log("Date: ".date('d-m-Y')."\r\n", 3, LOG_FILE_MAIL);
    error_log("To:" . print_r($to, true) . "\r\n", 3, LOG_FILE_MAIL);
    error_log("Subject: $subject\r\n", 3, LOG_FILE_MAIL);
    error_log("Headers: $headers\r\n", 3, LOG_FILE_MAIL);
    ini_set("sendmail_from", CAXSC_MAIL_BOX);

    $result = mail($to, $subject, $message, $headers);
    return $result;
}

function generate_message($html, $data=[])
{
    $patterns = [];
    $replacements = [];
    foreach ($data as $key=>$value){
        $word           = "{".$key."}";
        $patterns[]     = '/'.$word.'/';
        $replacements[] = $value;
    }
    $message = preg_replace($patterns, $replacements, $html);
    return $message;
}

function get_zero_padded_number($value, $padding=6) 
{
    return str_pad($value, $padding, "0", STR_PAD_LEFT);
}

function check_access($controller=false, $method=false)
{
	$ci 			= & get_instance();
	
	if($ci->auth->has_permission())
	{
		return TRUE;
	}
	else
	{ 
		$ci->session->set_flashdata('warning', 'You are not authorized to access');
		redirect('dashboard');
	}
}


/*function get_all_geo_dropdown($selected = FALSE)
{
	$ci =& get_instance();
	$geo = $ci->app_model->get_all_geo();
	$option = '<option value="">Select Geo</option>';
	if($geo)
	{
		foreach($geo as $key=>$value)
		{
			$selected_geo = ($value->id == $selected) ? 'selected' : '';
			$option .= '<option value="'.$value->id.'" '.$selected_geo.'>'.$value->geo_name.'</option>';
		}
	}
	return $option;
}*/

function get_remote_machine_name()
{
	$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$machine_name  = ($host) ?  strtoupper(str_replace('.vnet.valeo.com', '', $host)) : '';
	return $machine_name;
}

/**
* Description 	: This method handles to add log of Offline Update Rule
**/
function log_offline_update_rule($log_text = FALSE)
{
    error_log("$log_text \r\n", 3, LOG_FILE_OFFLINE_UPDATE_RULE);
}

function decode_raw_url($param = '')
{
	$query = rawurldecode(urldecode($param));
	parse_str($query, $query_string);
	
	return $query_string;
}

// Dummy Functions 
function display_array($array = [])
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}