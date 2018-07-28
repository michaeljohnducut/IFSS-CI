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
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login" style="background-image: url(assets/images/bg-img.jpg);">
			<div class="wrap-login">
				<div class="login-form-title" style="background-image: url(assets/images/logo_login.jpg);">
				</div>

				<form class="login-form validate-form" id="login_form">
					<div class="wrap-input validate-input m-b-26" data-validate="Username is required">
						<span class="label-input">Faculty ID</span>
						<input class="input" type="number" id ="username" name="username" placeholder="Enter Faculty ID">
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
							swal({
  								title: "Correct!",
  								text: "Entering the system",
  								icon: "success",
  								button: false
								});
						 	setTimeout(function(){
								window.location.replace(data['url'])
						    },500);

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