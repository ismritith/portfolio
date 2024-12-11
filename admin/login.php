<?php
include 'header.php';
?>

<body
	style="background-color: #f8f9fa; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
	<div class="container" style="max-width: 400px; width: 100%;">
		<div class="card card-login"
			style="border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
			<div class="card-header"
				style="background-color: #ffffff; text-align: center; font-size: 1.25rem; font-weight: bold;">
				Admin Login
			</div>
			<div class="card-body" style="padding: 20px; background-color: #ffffff;">
				<form action="index.php" method="post">
					<div class="form-group">
						<label for="mail" style="font-weight: bold; margin-bottom: 5px;">Username</label>
						<input type="email" id="mail" name="mail" class="form-control" placeholder="Enter your email"
							required style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
					</div>
					<div class="form-group">
						<label for="pass" style="font-weight: bold; margin-bottom: 5px;">Password</label>
						<input type="password" id="pass" name="pass" class="form-control"
							placeholder="Enter your password" required
							style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
					</div>
					<button class="btn btn-primary btn-block"
						style="background-color: #007bff; border: none; padding: 10px; font-size: 16px; border-radius: 4px; font-weight: bold;"
						type="submit" name="submit">
						Login
					</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>