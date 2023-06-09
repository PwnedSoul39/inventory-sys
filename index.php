<?php
require_once './resource/php/init.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/d101948c74.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./resource/css/main.css">
		<link rel="icon" type="image/x-icon" href="./resource/img/favicon.ico">
		<title>Login</title>
	</head>
	<body data-bs-theme="dark" style="overflow-y:hidden;">
		<section class="vh-100">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5">
						<div class="login card text-body-emphasis bg-body-tertiary">
							<div class="card-body p-5 text-center">
								<?php logUsrMsg(); ?>
								<h3 class="log-title">Login</h3>
								<form method="post">
									<div class="form-floating my-3">
										<input class="log-box form-control" type="text" placeholder="Username" name="user_log" id="log_input1">
										<label for="log_input1">Username</label>
									</div>
									<div class="form-floating my-3">
										<input class="log-box form-control" type="password" placeholder="Password" name="pass_log" id="log_input2">
										<label for="log_input2">Password</label>
									</div>
									<div class="mb-3">
										<input class="btn btn-danger rounded-pill w-50" type="submit" value="Login" name="log_btn">
									</div>
									<div class="mb-3">
										<small>Don't have an account?</small> <br>
										<a class="small" href="register.php">Register here</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="fixed-bottom">
			<svg class="psp" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
				<defs>
					<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
				</defs>
				<g class="xmb">
					<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(220,54,19,1.7)">
					<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(220,54,19,1.5)">
					<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(220,54,19,1.3)">
					<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff">
				</g>
			</svg>
		</div>
		
	<!-- Bootstrap Dependencies -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

	<!-- Own Script -->
	<script src="./resource/js/theme-toggle.js"></script>
	</body>
</html>