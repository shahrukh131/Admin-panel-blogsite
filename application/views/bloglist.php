<?php $this->load->view('header.php') ?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h4 class="h4">Blog view</h4>
  </div>

  <?php $success = $this->session->userdata('success'); ?>

		<?php if (!empty($success))
		{ ?>

		<div class="alert alert-success" role="alert"><?php echo $success; ?></div>
		<?php

		}
		?>
  <div class="container mb-3 mt-3" style="margin-top:50px;">
    <table class="table table-bordered table-hover" style="width:100%" id="mydatatable">
      <thead>
            <tr class="table-primary">
              <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
								<th>Action(Edit)</th>
								<th>Action(Delete)</th>


            </tr>
        </thead>
        <tbody>
          <?php

					$i =1;

					foreach($data as $row)
					{
						echo "<tr>";
						echo "<td>".$row->blog_id."</td>";

						echo "<td>".$row->title."</td>";
						echo "<td>".$row->description."</td>";
						echo "<td>".$row->author."</td>";
						echo"<td><a href='edit?id=".$row->blog_id."' class='btn btn-primary active' role='button'>Edit</a></td>";
						echo"<td><a href='delete?id=".$row->blog_id."' class='btn btn-danger active' role='button'>Delete</a></td>";





						echo "</tr>";




						$i++;
					}




					?>


        </tbody>


    </table>
</div>

	<script  src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script  src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

	<script  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script  src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script >
	$(document).ready(function() {
		$('#mydatatable').DataTable({
			lengthMenu:[[3,5,10,25,50,-1],[3,5,10,25,50,'All']],
      "ordering": false
		});
	} );
	</script>



</main>
