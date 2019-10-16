<div class="col-md-9 col-md-offset-1">
	<?php echo form_open('', ['class' => 'form-horizontal']); ?>
	
		
		<div class="form-group">
			<label class="control-label col-md-3" for="name">Name <span class="required">*</span></label>
			<div class="col-md-9">
				<?php echo form_input('name', set_value('title'), ['id'=>'name', 'name'=>'name', 'class'=>'form-control', 'tabindex'=>'1']); ?>
				<?php echo form_error('name', '<small class="help-block"><p class="text-danger">', '</p></small>'); ?>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-md-3" for="description">Description </label>
			<div class="col-md-9">
				<?php echo form_textarea('description', set_value('description'), ['id'=>'description', 'name'=>'description', 'class'=>'form-control editor', 'tabindex'=>'2']); ?>
				<?php echo form_error('description', '<small class="help-block"><p class="text-danger">', '</p></small>'); ?>
			</div>
		</div>
		
		<div class="form-group">        
			<div class="col-md-10 col-md-offset-6">
				<a type="button" class="btn btn-default" href="<?php echo base_url().'category'; ?>">Cancel</a>
				<button type="submit" class="btn btn-success">Create</button>
			</div>
		</div>
	<?php echo form_close(); ?>
</div>
