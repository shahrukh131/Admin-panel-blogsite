<?php $this->load->view('header'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Edit Blog</h1>
	</div>

	<div>
		<?php
  $i=1;
  foreach($data as $row)
  {
  ?>
  <form method="post">
    <table class="table">
  <tr>
    <td >Title </td>
    <td><input type="text" name="title" value="<?php echo $row->title; ?>" class="form-control"/></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea  name="description"   class="form-control" cols="30" rows="5"><?php echo $row->description; ?></textarea></td>
  </tr>


  <tr>
    <td>Author </td>
    <td><input type="text" name="author" value="<?php echo $row->author; ?>" class="form-control"/></td>
  </tr>
  <tr>

    <td colspan="2" align="center">
  <input type="submit" name="update" id="update" role ="button" class="btn btn-primary" value="update"/>
  </tr>
</table>
  </form>
  <?php } ?>



	</div>








</main>
