<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Register for Service</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css" />
	<link rel="icon" href="images/favicon.png" />
</head>

<body class="bg-light">
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-5">
				<div class="card shadow-lg border-0 rounded-lg">
					<div class="card-header bg-primary text-white text-center py-4">
						<h2 class="mb-0">Create Account</h2>
						<p class="mb-0">Join our service today</p>
					</div>
					<div class="card-body p-4">
						<form method="post" action="">
							<div class="mb-3">
								<label for="username" class="form-label fw-bold">Username</label>
								<input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Enter your username" required>
							</div>

							<div class="mb-3">
								<label for="email" class="form-label fw-bold">Email Address</label>
								<input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email" required>
							</div>

							<div class="mb-3">
								<label for="password" class="form-label fw-bold">Password</label>
								<input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Create a password" required>
								<div class="form-text">Password must be at least 6 characters long</div>
							</div>

							<div class="mb-4">
								<label for="confirm_password" class="form-label fw-bold">Confirm Password</label>
								<input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
							</div>

							<div class="d-grid">
								<button type="submit" name="register" class="btn btn-primary btn-lg">Create Account</button>
							</div>
						</form>

						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
							$username = $_POST['username'];
							$email = $_POST['email'];
							$password = $_POST['password'];
							$confirm_password = $_POST['confirm_password'];

							// Basic validation
							if ($password !== $confirm_password) {
								echo '<div class="alert alert-danger mt-3" role="alert">Passwords do not match!</div>';
							} elseif (strlen($password) < 6) {
								echo '<div class="alert alert-danger mt-3" role="alert">Password must be at least 6 characters long!</div>';
							} else {
								// Here you would typically save to database
								// For now, show success message and input values
								echo '<div class="alert alert-success mt-3" role="alert">';
								echo '<strong>Registration successful!</strong><br>';
								echo 'Username: ' . htmlspecialchars($username) . '<br>';
								echo 'Email: ' . htmlspecialchars($email) . '<br>';
								echo 'Password: ' . htmlspecialchars($password) . '<br>';
								echo '</div>';
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>
