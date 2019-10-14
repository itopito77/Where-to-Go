<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="stylesignup.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div id="nav">
			<ul>
				<li><a id="home" href="index.php">Home</a></li>
				<li><a href="login.php">LogIn</a></li>
				<li><a href="signup.php">SignUp</a></li>	
			</ul>
		</div>
  <div class="header">
	<h2>Register</h2>
  </div>
	
  <form method="post" action="signup.php">	    
	<?php include('errors.php'); ?>  
	<div class="input-group">	
	  <label>Username</label>	
	  <input type="text" name="username" value="<?php echo $username; ?>">	
	  </div>
	<div class="input-group">	
	  <label>Email</label>
	  <input type="email" name="email" value="<?php echo $email;
	  ?>">		
    </div>  
    <div class="input-group">		
  	  <label>Password</label>
	  <input type="password" name="password_1">
	 </div>
	<div class="input-group">
  	  <label>Confirm Password</label>
  	  <input type="password" name="password_2">
	 </div>
  	<div class="input-group">
	  <button type="submit" class="btn" name="reg_user">Signup</button>	
	 </div>
	  <p>
	    Already a memeber? <a href="login.php">Sign in</a>
	  </p>
  </form>
			 <!-- Bootstrap scripts. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>