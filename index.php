<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta name="google-site-verification" content="J3n_zgqbF0o9KHNbJinn5kqmMDJuPR-uKIZ8E26oyJk" />
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="styling.css">
		
		<script src="index.js"></script>
		
		<title>Date Planer</title>
		
	</head>
	
	
	<body>
		<div id="nav">
			<ul>
				<li><a id="home" href="index.php">Home</a></li>
				<li><a id="Log" href="login.php">LogIn</a></li>
				<li style="float:right"><a href="signup.php">SignUp</a></li>	
			</ul>
		</div>
		<div class="jumbotron">
				<h1 id="title">Date Planer</h1>
			<div class="container-fluid">
			
				<form class="form-horizontal">
					<div class="form-group">
						<label for="City" class="col-xs2 control-label"></label>
						<div class="col-xs-10">
							<input type="text" id="place" placeholder="Current City" class="form-control">
						</div>
					</div>
									<div class="form-group">
						<label for="Place" class="col-xs2 control-label"></label>
						<div class="col-xs-10">
							<input type="text" id="to-go" placeholder="Where do you want to eat?" class="form-control">
						</div>
					</div>
				</form>	
			
				<div class="col-xs-ofset-2 col-xs-10"></div>
			
				<button class="btn btn-info btn-lg" onclick="">submit</button>
				
			</div>
		</div>
		<div class="container-fluid">
			<div id="map">
			</div>
		</div>
		

<div class="content">
	<?php if (isset($_SESSION['success'])) : ?>
	<div class="error success">
		<h3>
			<?php 
			 echo $_SESSION['success'];
			 unset($_SESSION['success']);
			?>
		</h3>
	</div>
   <?php endif ?>
	
	<?php if (isset($_SESSION['username'])) : ?>
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> </p> 
		<p> <a href="index.php?logout='1'" style="color: 
		red;">Logout</a> </p>
	<?php endif ?>
</div>

		<!-- Google maps script. -->
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOe_ltq1geFjcTK18rEefz0ZKK0OwPVAA&callback=initMap" type="text/javascript">
  </script>
  <script src="script.js"></script>
		 <!-- Bootstrap scripts. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
		
	</body>
	
</html>