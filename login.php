<!DOCTYPE html>
<html lang="en">

<?php require 'includes/head.php'?>
<script>
	var needBg = false;
</script>
<body>


	<div class="colored-navbar">
		<?php include 'includes/navbar.php'?>
	</div>
	
	<?php
		$login = 'CELTA';
		$password = 'celtaCourseTashkent2011';
	?>

	<section id="courses">
	<form action="/admin.php" method="post" id="login">
		<div class="login-body text-center">
			<h3 class="my-4">
				<span class="text-primary">Admin panel</span> Login</h3>
			<input type="text" class="form-control" name="login" placeholder="Username">
			<input type="password" class="form-control mt-2" name="password" placeholder="Password">
			<button type="submit" name="submit" class="btn btn-primary mt-2">Login</button>
		</div>
	</form>
	</section>

<?php include 'includes/footer.php'?>


<?php require 'includes/script.php'?>
<script>
    if(screen.width > 998){
		$('.dropdown-menu').css({'background': '#e59151', 'margin-top': '30px'});
	}
</script>



</body>
</html>