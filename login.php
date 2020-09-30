<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="icon"  href="https://img.icons8.com/dusk/2x/garbage-truck.png">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                <title>Waste Management System</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>
		<div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
	  
  </div>
			
<div class="form">
			
			<form class="login-form" action="logindb.php" method="post">
				<i class="fas fa-user-circle"></i>
				<input class="user-input" type="text" name="" placeholder="Username" required>
				<input class="user-input" type="email" name="" placeholder="Email Address" required>
				<input class="user-input" type="password" name="" placeholder="Password" required>
				<div class="options-01">
					<label class="remember-me"><input type="checkbox" name="">Remember me</label>
					<a href="#">Forgot your password?</a>
				</div>
				<input class="btn" type="submit" name="" value="LOGIN" href="index.php">
				<div class="options-02">
					<p>Not Registered? &nbsp;<a href="#">Create an Account</a></p>
				</div>
			</form>
			
			<form class="signup-form" action="regdb.php" method="post">
				<i class="fas fa-user-plus"></i>
				<input class="user-input" type="text" name="" placeholder="Username" required>
				<input class="user-input" type="email" name="" placeholder="Email Address" required>
				<input class="user-input" type="password" name="" placeholder="Password" required>
				<input class="user-input" type="password" name="" placeholder="Confirm Password" required>
				<input class="btn" type="submit" name="" value="SIGN UP">
				<div class="options-02">
					<p>Already Registered? <a href="#">Sign In</a></p>
				</div>
			</form>
			
		</div>			
</div>

		
		

		<script type="text/javascript">
		$('.options-02 a').click(function(){
			
			$('form').animate({
				height: "toggle", opacity: "toggle"
			}, "slow");
		});
		</script>

	</body>
</html>
