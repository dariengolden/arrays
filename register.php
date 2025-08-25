<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Register for Service</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="icon" href="images/favicon.png" />
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						primary: {
							50: '#eff6ff',
							500: '#3b82f6',
							600: '#2563eb',
							700: '#1d4ed8',
						}
					}
				}
			}
		}
	</script>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 flex items-center justify-center p-4">
	<div class="w-full max-w-md">
		<!-- Header -->
		<div class="text-center mb-8">
			<div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mb-4 shadow-lg">
				<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
				</svg>
			</div>
			<h1 class="text-3xl font-bold text-gray-900 mb-2">Create Account</h1>
			<p class="text-gray-600">Join our service and get started today</p>
		</div>

		<!-- Registration Form -->
		<div class="bg-white rounded-2xl shadow-2xl p-8 backdrop-blur-sm bg-white/90">
			<form method="post" action="" class="space-y-6">
				<!-- Username Field -->
				<div>
					<label for="username" class="block text-sm font-semibold text-gray-700 mb-2">Username</label>
					<div class="relative">
						<input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" id="username" name="username" placeholder="Enter your username" required>
						<svg class="absolute right-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
						</svg>
					</div>
				</div>

				<!-- Email Field -->
				<div>
					<label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
					<div class="relative">
						<input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" id="email" name="email" placeholder="Enter your email" required>
						<svg class="absolute right-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
						</svg>
					</div>
				</div>

				<!-- Password Field -->
				<div>
					<label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
					<div class="relative">
						<input type="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" id="password" name="password" placeholder="Create a password" required>
						<svg class="absolute right-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
						</svg>
					</div>
					<p class="text-xs text-gray-500 mt-1">Password must be at least 6 characters long</p>
				</div>

				<!-- Confirm Password Field -->
				<div>
					<label for="confirm_password" class="block text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
					<div class="relative">
						<input type="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
						<svg class="absolute right-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
						</svg>
					</div>
				</div>

				<!-- Submit Button -->
				<button type="submit" name="register" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
					Create Account
				</button>
			</form>

			<!-- PHP Response Messages -->
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$confirm_password = $_POST['confirm_password'];

				// Basic validation
				if ($password !== $confirm_password) {
					echo '<div class="mt-6 p-4 bg-red-50 border border-red-200 rounded-lg">
							<div class="flex items-center">
								<svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								</svg>
								<p class="text-red-700 font-medium">Passwords do not match!</p>
							</div>
						</div>';
				} elseif (strlen($password) < 6) {
					echo '<div class="mt-6 p-4 bg-red-50 border border-red-200 rounded-lg">
							<div class="flex items-center">
								<svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								</svg>
								<p class="text-red-700 font-medium">Password must be at least 6 characters long!</p>
							</div>
						</div>';
				} else {
					// Here you would typically save to database
					// For now, show success message and input values
					echo '<div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-lg">
							<div class="flex items-center mb-2">
								<svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								</svg>
								<p class="text-green-700 font-semibold">Registration successful!</p>
							</div>
							<div class="text-sm text-green-600 space-y-1">
								<p><strong>Username:</strong> ' . htmlspecialchars($username) . '</p>
								<p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
								<p><strong>Password:</strong> ' . htmlspecialchars($password) . '</p>
							</div>
						</div>';
				}
			}
			?>
		</div>

		<!-- Footer -->
		<div class="text-center mt-6">
			<p class="text-sm text-gray-500">Already have an account? <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Sign in here</a></p>
		</div>
	</div>

	<script src="js/scripts.js"></script>
</body>

</html>
