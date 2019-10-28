<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="passwordstyle.css">
</head>
<body>
    <div class="bg">
	<form class="login-form" action="passwordreset.php" method="post">
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="new_pass_c">
		</div>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
		</div>
	</form>
    </div>
</body>
</html>