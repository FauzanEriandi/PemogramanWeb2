<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
		}
		
		.login-form {
			width: 300px;
			margin: 40px auto;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ddd;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		
		.input-field {
			margin-bottom: 20px;
		}
		
		.input-field input[type="text"],.input-field input[type="password"] {
			width: 100%;
			height: 40px;
			padding: 10px;
			border: 1px solid #ccc;
		}
		
		.button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		.button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="login-form">
		<h2>Login</h2>
		<form id="login-form">
			<div class="input-field">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" required>
			</div>
			<div class="input-field">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
			</div>
			<button class="button" type="submit">Login</button>
		</form>
	</div>
	
	<script>
		const loginForm = document.getElementById('login-form');
		loginForm.addEventListener('submit', (e) => {
			e.preventDefault();
			const usernameInput = document.getElementById('username');
			const passwordInput = document.getElementById('password');
			const username = usernameInput.value;
			const password = passwordInput.value;

			if (username === 'fauzaneriandi02@gmail.com' && password === '02072002') {
				alert('Login successful!');
				// Redirect to dashboard or other page
				window.location.href = 'index.php';
			} else {
				alert('Invalid username or password');
			}
		});
	</script>
</body>
</html>