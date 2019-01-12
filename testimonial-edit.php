<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Testimonial Edit | Cambridge CELTA - in Uzbekistan</title>
	<script>
	var needBg = false;
	</script>
</head>

<body>


	<div class="colored-navbar">
		<?php include 'includes/navbar.php'?>
	</div>

	<section id="courses">

		<?php
		
			if(isset($_POST['editCourse']) || isset($_POST['onEditTestimonial'])){
				
				?>
				<?php 
				$dataTestimon = mysqli_query($connection, "SELECT * FROM `testimonials` WHERE `id` = " . (int) $_GET['id']);
				if(mysqli_num_rows($dataTestimon) <= 0){
                    ?>
                    <div class="container">
					<form action="/admin.php" method="post">
						<button type="submit" name="backAdmin" class="btn btn-light btn-sm"><i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
					</form>
                        <h2>ERROR 404, TESTIMONIAL HAS NOT BEEN FOUND</h2>
                    </div>
                    <?
				}else{
					$testimon = mysqli_fetch_assoc($dataTestimon);

                    ?>
                    <!-- work with form -->
                    <?php
            
                    // subjects
                    $name = $_POST['name'];
                    $status = $_POST['status'];
                    $date = $_POST['date'];
					$testimonial = $_POST['testimonial'];

					if(isset($_POST['onEditTestimonial'])){
						if( $name != '' && $status != '' && $date != '' && $testimonial != ''){
							mysqli_query($connection, "UPDATE `testimonials` SET `name`='$name',`status`='$status',`testimonial`='$testimonial',`date`='$date' WHERE `id` = " . $testimon['id']);
							$error = "Testimonial was successfult edited!";
							$errorFlashColor = "success";
						}else{
							$error = "Please fill out all of the fields";
							$errorFlashColor = "danger";
						}
				
					?>
					<div class="container">
						<div class="alert alert-<?php echo $errorFlashColor?>"><?php echo $error?></div>
					</div>
					<?
					}
                ?>
                    <div class="container adding">
					<form action="/admin.php" method="post">
						<button type="submit" name="backAdmin" class="btn btn-light btn-sm"><i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
					</form>
                        <h4 class="mb-5">EDIT TESTIMONIAL OF <span class="text-primary"><?php echo $testimon['name']?></span></h4>
                        <form action="testimonial-edit.php?id=<?php echo $testimon['id'];?>" method="post">
                        <div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="name">Person
								<span class="text-primary">name</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="fas fa-user"></i>
								</div>
								<input name="name" id="name" type="text" class="form-control" placeholder="Name" value="<?php echo $testimon['name']?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="status">Person
								<span class="text-primary">status</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="fas fa-user-circle"></i>
								</div>
								<input name="status" id="status" type="text" class="form-control" placeholder="Status" value="<?php echo $testimon['status']?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<div class="form-group">
								<label for="start">Testimonial
									<span class="text-primary">date</span>
								</label>
								<div class="input-group">
									<div class="input-group-text">
										<i class="far fa-calendar-alt"></i>
									</div>
									<?php $date = substr($testimon['date'], 0, 10);?>
									<input name="date" id="start" type="date" class="form-control date-picker" value="<?php echo $date?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label for="testimon">
								<span class="text-primary">Testimonial</span>
							</label>
							<div class="input-group">
								<textarea name="testimonial" class="form-control w-100" style="height: 250px" id="testimon"><?php echo $testimon['testimonial']?></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<form action="" method="post">
						<button name="onEditTestimonial" type="submit" class="btn btn-success mx-auto">Edit testimonial of <?php echo $testimon['name']?></button>
					</form>
				</div>
                    <?
				}
			        ?>
			</form>
		</div>
				<?

			} else {
				?>
				<div class="text-center">
					<h2><span class="text-danger">Error</span>, please login correctly</h2>
					<a href="/login.php" class="btn btn-danger mt-5">Login as admin</a>
				</div>

					<?php
						
			}

		?>

	</section>

		<?php require 'includes/script.php'?>
    <script>
		if(screen.width > 998){
			$('.dropdown-menu').css({'background': '#e59151', 'margin-top': '30px'});
		}
</script>

</body>