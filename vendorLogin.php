<!DOCTYPE html>
<html>
<head>
	<title>Electricity billing system</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Electricity Billing System</a>
			</div>
			<ul class="navbar-nav nav">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li class="active">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Login<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<h4> Who are you?</h4>
						<li>
							<a href="userLogin.php">User</a>
						</li>
						<li>
							<a href="vendorLogin.php">Vendor</a>
						</li>
						<li>
							<a href="adminLogin.php">Admin</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Register<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<h4> Who are you?</h4>
						<li>
							<a href="userRegister.php">User</a>
						</li>
						<li>
							<a href="vendorRegister.php">Vendor</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="">Contact us</a>
				</li>
			</ul>
			<ul class="navbar-nav nav navbar-right">
				<?php  
					session_start();
					if (isset($_SESSION['user'])&&isset($_SESSION['type'])) {
						$msg = "<li><a class='dropdown-toggle' data-toggle='dropdown' href='#''>Welcome ".$_SESSION['type']." ".$_SESSION['username']." <span class='caret'></span></a><ul class='dropdown-menu'><li><a href='profile.php'>Profile</a></li><li><a href=''>Logout</a></li></ul></li>";
						echo "string";

					}
					else{
						echo "<li><a href='index.php'>Welcome</a></li>";
					}
				?>
			</ul>
		</div>
	</nav>
	<?php 
		$sessionVariable=(isset($_SESSION['username'])?$_SESSION['username']:'')
	?>
	<script type="text/javascript">
		window.onload=function(){
			var myVar='<?php echo $sessionVariable;?>';
		if (myVar==='') {

		}
		else {
			alert("You are alredy logged in !!!!\n If you wish to use another account please logout first");
			window.history.back();
		}
		}
	</script>
	<br><br><br>
	<div class="container-fluid" style="margin: auto;">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" style="border:10px double;">
					<div class="container">
						<h2>Welcome back Vendor!!!</h2>
						<h4>Enter your login credentials</h4>
						
						<br><br><br>
						<form action="vendorLoginValidate.php" method="POST">
							
								<!--<div class="row">-->
									
									<div class="col-xs-2">
										User Name
									</div>
									<div class="col-xs-2">
										<input type="text" name="username" placeholder ="Enter username">
									</div>
									<div class="col-xs-1"></div>
								<!--</div>-->
								<br><br><br>
									<div class="col-xs-2">
										Password
									</div>
									<div class="col-xs-3">
										<input type="password" name="password" placeholder="Enter password" minlength="6">
									</div>
									
									<br><br><br>
									<div class="col-xs-2">
										<input type="submit" class="btn btn-primary" name="Log In" value="Log in ">
									</div>
										
								<br><br>
							
						</form>
					</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>