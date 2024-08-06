<?php
    require '../includes/init.php';
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= urlOf('assets/css/style.css') ?>">

	</head>
	<body class="img js-fullheight" style="background-image: url(<?= urlOf('assets/images/bg.jpg') ?>);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Register</h3>
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" id="Username" name="Username" required>
		      		</div>
                      <div class="form-group">
		      			<input type="email" class="form-control" placeholder="Email" id="Email" name="Email" required>
		      		</div>
	            <div class="form-group">
	              <input  type="password" class="form-control" placeholder="Password" id="Password" name="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" onclick="insertData()" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= urlOf('assets/js/jquery.min.js') ?>"></script>
  <script src="<?= urlOf('assets/js/popper.js') ?>"></script>
  <script src="<?= urlOf('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?= urlOf('assets/js/main.js') ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script>
		function insertData() {
			var Username = $("#Username").val();
			var Email = $("#Email").val();
			var Password = $("#Password").val();

			$.ajax({
				url: "../admin/api/register.php",
				type: "POST",
				data: {
					Username: Username,
					Email: Email,
					Password: Password
				},
				success: function(response) {
					console.log(response.success);
                	alert("Registered Succesfully");
				}
			});
		}
	</script>
	</body>
</html>

