<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Testimonials | Cambridge CELTA - in Uzbekistan</title>
	<meta name="keywords" content="testimonials celta">
	<meta name="description" content="Read testimonials of CELTA students">
</head>
<style>
	.sm{
		min-width: 80px!important;
	}
	.edit{
		min-width: 50px!important;
	}
	.mw-auto{
		min-width: 220px!important;
	}
	td{
		line-height: 1.6rem;
	}
	.nav-color{
		background-color: 
	}
</style>
<script>
	var needBg = false;
</script>

<body>


	<?php include 'includes/navbar.php'?>


<section id="testimonials" class="hStyle">

	<div class="container">
		<h2 class="mb-5">Testimonials!</h2>

		<?php
			$testimonials = mysqli_query($connection, "SELECT * FROM `testimonials`");
			while ($testimos = mysqli_fetch_assoc($testimonials)) {

				?>

				<div class="testimonial">
					<div class="row">
						<div class="col-md-3 col-12 profile-photo text-center">
							<div class="student">
								<img src="img/about/testimonials/<?= $testimos['img']?>" alt="">
								<p class="mt-2 nameTestimonial"><?= $testimos['name']?></p>
								<span class="status"><?= $testimos['status']?></span>
							</div>
						</div>
						<div class="col-md-9 col-11 mx-auto">
							<div class="testimonial-content">
								<i class="fas fa-comments"></i>
								<p><?= $testimos['testimonial']?></p>
							</div>
							<?php
								$date = date("d-M-Y", strtotime($testimos['date']));
							?>
							<span class="date"><?= $date?></span>
						</div>
					</div>
				</div>

				<hr>

			<?

			}
		?>



	</div>

</section>


<?php include 'includes/footer.php'?>


<?php require 'includes/script.php'?>
	<script>
		if(screen.width > 998){
			$('.dropdown-menu').css({'background': '#e59151', 'margin-top': '30px'});
		}
	</script>
</body>


</body>