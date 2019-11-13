<?php $this->load->view('header.php') ?>

<main role="main" class="col-md-4 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h4 class="h4">Add Blog</h4>
  </div>
  <form action="<?php echo base_url()."Blog/create"; ?>" name="blogform" id="blogform" method='post'>
			<div class="form-group">
				<label >Title</label>
				<input type="text" name="title" id="title" value="<?php echo set_value('title') ?>" class="form-control">
				<p><?php echo form_error('title'); ?></p>

			</div>
			<div class="form-group">
				<label >Description</label>
				<textarea name="description" id="description" class="form-control" cols="30" rows="5" value="<?php echo set_value('description') ?>"></textarea>
				<p><?php echo form_error('description'); ?></p>

			</div>
			<div class="form-group">
				<label >Author</label>
				<input type="text" name="author" id="author" value="<?php echo set_value('author') ?>" class="form-control">
				<p><?php echo form_error('author'); ?></p>

			</div>
			<input type="submit" name="create" id="create" role ="button" class="btn btn-primary" value="Create"/>


		</form>


	<div>

	</div>
</main>
