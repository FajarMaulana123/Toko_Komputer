<html>
<head> 
	<title>.:: Halaman Login Administrator ::.</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>
<body>
	<div class="wrapper fadeInDown">
	  <div id="formContent">
	    <div class="fadeIn first">
	      <h1>Login</h1>
	    </div>
	    <form name="form1" method="post" action="cek_login.php">
	      <input type="text" id="user" class="fadeIn second" name="user" placeholder="username">
	      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
	      <input type="text" class="fadeIn fourth col-md-7" name="captcha" placeholder="captcha">
	      <img src="captcha.php" class="fadeIn five">
	      <input type="submit" name="submit" class="fadeIn six" value="Log In">
	    </form>
	  </div>
	</div>
</body>
</html>
