<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

	<style media="screen">
	.navbar {
  min-height: 50px;
}
	.sidebar {
  position: fixed;
  top: 10;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sidebar-sticky {
    position: -webkit-sticky;
    position: sticky;
  }
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Content
 */

[role="main"] {
  padding-top: 133px; /* Space for fixed navbar */
}

@media (min-width: 768px) {
  [role="main"] {
    padding-top: 48px; /* Space for fixed navbar */
  }
}
	</style>




</head>
<body>
	<div >
		<!--Navbar  -->
		<nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
 		<div class="container-fluid">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo base_url()."Admindashboard" ?>">Blogsite</a>
			<a class="navbar-brand col-sm-3 col-md-2 mr-0 ml-auto" href="<?php echo base_url()."Admindashboard" ?>">Welcome <?php echo $this->session->userdata('username'); ?></a>

			<ul class="navbar-nav px-3">
		 			<li class="nav-item text-nowrap">
					<a class="nav-link ml-auto" href="<?php echo base_url().'Admindashboard/logout'; ?>">Sign out</a>
		 			</li>
	 		</ul>

 		</div>
</nav>
				<!--Navbar end -->
	<!--sidebar -->
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
		 <div class="sidebar-sticky" >
			 <ul class="nav flex-column">
				 <li class="nav-item">
					 <a class="nav-link active" href="<?php echo base_url()."Admindashboard"; ?>">
						 <span data-feather="home"></span>
						 Dashboard <span class="sr-only">(current)</span>
					 </a>
				 </li>
				 <li class="nav-item">
					 <a class="nav-link" href="<?php echo base_url()."Blog/index"; ?>">
						 <span data-feather="file"></span>
						 View Blog
					 </a>
				 </li>
				 <li class="nav-item">
					 <a class="nav-link" href="<?php echo base_url()."Blog/create" ?>">
						 <span data-feather="shopping-cart"></span>
						 Create Blog
					 </a>
				 </li>
		 </ul>

		 </div>
	 </nav>

		</div>

	</div>






	 	<!--sidebar end -->


	</div>




</body>
</html>
