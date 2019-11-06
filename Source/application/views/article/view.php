<table class="table table-bordered table-striped table-hover">
	<tbody>
		<tr>
			<td style="width: 14%;"><strong>Category</strong></td>
			<td><?php echo $article_data['menu_name']; ?></td>
		</tr>
		<tr>
			<td><strong>Title</strong></td>
			<td><?php echo $article_data['article_title']; ?></td>
		</tr>
		<tr>
			<td><strong>Content</strong></td>
			<td><?php echo $article_data['article_content']; ?></td>
		</tr>
		<tr>
			<td><strong>Status</strong></td>
			<td><?php echo $article_data['article_status']; ?></td>
		</tr>
		<tr>
			<td><strong>Author</strong></td>
			<td><?php echo $article_data['user_name']; ?></td>
		</tr>
		<tr>
			<td><strong>Created On</strong></td>
			<td><?php echo date('Y-m-d H:i', strtotime($article_data['article_created_on'])); ?></td>
		</tr>
		<tr>
			<td><strong>Modified On</strong></td>
			<td><?php echo ($article_data['article_updated_on']) ? date('Y-m-d H:i', strtotime($article_data['article_updated_on'])) : ''; ?></td>
		</tr>
	</tbody>
</table>

<div class="col-md-10 col-md-offset-6">
	<a type="button" class="btn btn-default" href="<?php echo base_url().'article'; ?>">Back</a>
	<a type="button" class="btn btn-warning" href="<?php echo base_url().'article/update/'.$article_data['article_id']; ?>">Update</a>
        <?php 
        if($article_data['article_status'] == 'Waiting For Approval'){
            ?>
            <a type="button" class="btn btn-info" href="<?php echo base_url().'article/admin_approve/'.$article_data['article_id']; ?>">Approve</a>
            <?php
        }
        
        if($article_data['fw_status'] == 'Active'){
            ?>
            <button type="button" class="btn btn-primary btn_fw" data-action="fw_remove" data-userid="<?php echo $article_data['article_author']; ?>">Remove Featured Writer</button>
            <?php
        }else {
            ?>
            <button type="button" class="btn btn-primary btn_fw" data-action="fw_add" data-userid="<?php echo $article_data['article_author']; ?>">Feature Writer</button>
            <?php
        }
        ?>
        
</div>