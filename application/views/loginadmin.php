<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>LOGIN ADMIN</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
	</head>
	<body>
		<div class="container" >
			<div class="row">
				<div class="col-sm-4  offset-md-4" style="padding-top: 50px;">
					
					<form action='' name='loginform' id='loginform' method='post' >
						<h1 style="text-align: center;">Login For Admin</h1>
						<div class="form-group">
							
							<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username') ?>">
							<p><?php echo form_error('username'); ?></p>
							
						</div>
						<div class="form-group">
							
							<input type="password" class="form-control" name="password" placeholder="Password">
							<p><?php echo form_error('password'); ?></p>
							
						</div>
						<div class="form-group" style="text-align:center;padding-right: 30px;">
							<p ><a href="">Forget Password</a></p>
							<input type="submit" name="login" role ="button" class="btn btn-primary" value="Save Data"/>
							
						</div>
						
						
						
					</form>
					
				</div>
				
			</div>
			
		</div>
		
	</body>
</html>