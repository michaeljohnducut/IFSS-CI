<html lang="en">
<head>
	<title>Faculty Scheduling System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icons/icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<style>
.container-dots {
  height: 100%;
  width: 100%;
  font-family: Poppins-regular;
  font-size: 100%;
  background-color: #2D3640;
}

.loader {
  height: 20px;
  width: 250px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}
.loader--dot {
  animation-name: loader;
  animation-timing-function: ease-in-out;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  height: 30px;
  width: 30px;
  border-radius: 100%;
  background-color: black;
  position: absolute;
  
}
.loader--dot:first-child {
  background-color: #8cc759;
  animation-delay: 0.5s;
}
.loader--dot:nth-child(2) {
  background-color: #8c6daf;
  animation-delay: 0.4s;
}
.loader--dot:nth-child(3) {
  background-color: #ef5d74;
  animation-delay: 0.3s;
}
.loader--dot:nth-child(4) {
  background-color: #f9a74b;
  animation-delay: 0.2s;
}
.loader--dot:nth-child(5) {
  background-color: #60beeb;
  animation-delay: 0.1s;
}
.loader--dot:nth-child(6) {
  background-color: #fbef5a;
  animation-delay: 0s;
}
.loader--text {
  position: absolute;
  top: 200%;
  left: 0;
  right: 0;
  width: 10rem;
  margin: auto;
  color: #fff;
}
.loader--text:after {
  content: "Loading";
  font-weight: bold;
  animation-name: loading-text;
  animation-duration: 3s;
  animation-iteration-count: infinite;
}

@keyframes loader {
  15% {
    transform: translateX(0);
  }
  45% {
    transform: translateX(230px);
  }
  65% {
    transform: translateX(230px);
  }
  95% {
    transform: translateX(0);
  }
}
@keyframes loading-text {
  0% {
    content: "Loading";
  }
  25% {
    content: "Loading.";
  }
  50% {
    content: "Loading..";
  }
  75% {
    content: "Loading...";
  }
}

</style>
</head>
<body>
	<div class='container-dots' style='display: none;' id="dots">
  <div class='loader'>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--text'></div>
  </div>
</div>

	<div class="limiter">
		<div class="container-login" style="background-image: url(assets/images/bg-img.jpg);">
			<div class="wrap-login">
				<div class="login-form-title" style="background-image: url(assets/images/logo_login.jpg);">
				</div>

				<form class="login-form validate-form" id="login_form">
					<div class="wrap-input validate-input m-b-26" data-validate="Username is required">
						<span class="label-input">Faculty ID</span>
						<input class="input" type="number" id ="username" name="username" placeholder="Enter Faculty ID" autocomplete="on">
						<span class="focus-input" autocomplete ="off"></span>
					</div>

					<div class="wrap-input validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input">Password</span>
						<input class="input" id="password" type="password" name="password" placeholder="Enter password">
						<span class="focus-input"></span>
					</div>

					<!-- <div class="flex-sb-m w-full p-b-30">
						<div class="contact-form-checkbox">
							<input class="input-checkbox" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="text">
								Forgot Password?
							</a>
						</div>
					</div> -->
					<div class="container-login-form-btn" align="center">
						<div class="col-md-2">
							
						</div>
						<div class="col-md-5">
							<!-- <a class="login-form-btn" style="margin-left: -15px;" href="<?php //echo base_url('Maintenance/dashboard')?>">Log in</a> -->
						<button type="submit" name="login_btn"  class="login-form-btn" style="margin-left: -15px;">Log in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#login_form').on("submit", function(e){

					e.preventDefault();
					var username = $('#username').val();
					var password = $('#password').val();
					$.ajax({
					url: '<?php echo base_url("Access/validatecredentials"); ?>', 
					type: "POST",   
					async: true,          
					data: {username:username, password:password}, 
					dataType: 'json',
					cache: false,
					success: function(data)   
					{
						if (data['IsError'] == 0)
						{
							document.getElementById("dots").style.display = 'block';
							// swal({
  					// 			title: "Correct!",
  					// 			text: "Entering the system",
  					// 			icon: "success",
  					// 			button: false
							// 	});
						 	setTimeout(function(){
								window.location.replace(data['url'])
						    },2500);

					    }
					    if (data['IsError'] == 1)
					    {
					        swal({
  								title: "Incorrect!",
  								text: "The faculty ID or password is incorrect",
  								icon: "error",
								});
					        $('#username').val('');
					        $('#password').val('');
					    }
					       
					},
					error: function(data)
					{
					    
					}

				});
			});

		});
	</script>
      
</body>
</html>