<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration</title>
		
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/registration.css"	rel="stylesheet">
	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script src="js/easing.js" type="text/javascript"></script>
		
		<!-- Navigationsbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header page-scroll">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Registration</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav">
				<li class="page-scroll"><a href="#">Login</a></li>
				<li class="page-scroll"><a href="#registration">Registration</a></li>         
			  </ul>          
			</div>
			<!--/.nav-collapse -->
		  </div>
		</nav>
		
		<section id="login" class="login-section">
			<h1>LOGIN</h1>
			<div class="login-box">
                <form class="col-md-12" action="Web_Content/Login/Login.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="User" name="lUser">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password" name="lPassword">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                    </div>
                </form>
			</div>

		</section>
		<section id="registration" class="registration-section">
			<h1>REGISTRATION</h1>
			<div class="registraion-box">
			<form class="col-md-12" action="Web_Content/Login/ExportToDatabase.php" method="post">
                <div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Username" name="user"/>
				</div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Email" name="eMail"/>
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" placeholder="Password" name="password"/>
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" placeholder="Confirm Password" name="passwordConfirm"/>
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-lg btn-block" type="submit">Sign in</button>
                </div>
			</form>
			</div>
		</section>


	</body>
</html>
