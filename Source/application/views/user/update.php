<div class="col-md-9 col-md-offset-1">
	<?php echo form_open('', ['class' => 'form-horizontal']); ?>
	
		<div class="form-group">
			<label class="control-label col-md-3" for="category">Category <span class="required">*</span></label>
			<div class="col-md-9">
				<select id="category" name="category" class="form-control" tabindex="1">
				<?php echo $categories; ?>
			</select>
			<?php echo form_error('category', '<small class="help-block"><p class="text-danger">', '</p></small>'); ?>
			</div>
		</div>
		
		<!--<div class="form-group">
			<label class="control-label col-md-3" for="subcategory">Sub Category</label>
			<div class="col-md-9">
				<select class="form-control" id="subcategory" name="subcategory">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
		</div>-->
		
		<div class="form-group">
			<label class="control-label col-md-3" for="title">Title <span class="required">*</span></label>
			<div class="col-md-9">
				<!--<input type="text" class="form-control" id="title" name="title">-->
				<?php echo form_input('title', $article_data['article_title'], ['id'=>'title', 'name'=>'title', 'class'=>'form-control', 'tabindex'=>'2']); ?>
				<?php echo form_error('title', '<small class="help-block"><p class="text-danger">', '</p></small>'); ?>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-md-3" for="content">Content <span class="required">*</span></label>
			<div class="col-md-9">
				<?php echo form_textarea('content', $article_data['article_content'], ['id'=>'content', 'name'=>'content', 'class'=>'form-control editor', 'tabindex'=>'3']); ?>
				<?php echo form_error('content', '<small class="help-block"><p class="text-danger">', '</p></small>'); ?>
			</div>
		</div>
		
		<div class="form-group">        
			<div class="col-md-10 col-md-offset-6">
				<a type="button" class="btn btn-default" href="<?php echo base_url().'article'; ?>">Cancel</a>
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</div>
	<?php echo form_close(); ?>
</div>
