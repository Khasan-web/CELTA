<!DOCTYPE html>
<html lang="en">

<?php require 'includes/head.php'?>
<script>
	var needBg = false;
</script>
<style>
	.student img {
		border-radius: 50%;
		width: 65%;
	}
	.student .name {
		font-weight: 700;
		opacity: 0.7;
		font-size: 16px;
		margin-bottom: 5px;
	}
</style>
<body>
	<?php include 'includes/navbar.php'?>


<section id="celta-members" class="hStyle">
	<div class="container">
		<h2 class="mb-5">CELTA Members!</h2>
			<div class="row">
				<?php
				
					$members = mysqli_query($connection, "SELECT * FROM `celtaMembers`");
					foreach ($members as $member) {
						?>
							<div class="col-lg-3 col-md-4 col-6 mb-3">
								<div class="card student text-center">
								<img class="card-img-top mx-auto mt-4" src="img/about/testimonials/<?= $member['img']?>" alt="Member photo">
								<div class="card-body">
									<hr class="mt-0">
									<h5 class="card-title name"><?= $member['name']?></h5>
								</div>
								</div>
							</div>
						<?
					}

				?>
			</div>
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