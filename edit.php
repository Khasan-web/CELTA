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


	<section id="courses">

		<?php
		
			if(isset($_POST['editCourse']) || isset($_POST['onEditCourse'])){
				
				?>
				<?php 
				$dataCourse = mysqli_query($connection, "SELECT * FROM `courses` WHERE `id` = " . (int) $_GET['id']);
				if(mysqli_num_rows($dataCourse) <= 0){
                    ?>
                    <div class="container">
					<form action="/admin.php" method="post">
						<button type="submit" name="backAdmin" class="btn btn-light btn-sm"><i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
					</form>
                        <h2>ERROR 404, COURSE HAS NOT BEEN FOUND</h2>
                    </div>
                    <?
				}else{
					$courseData = mysqli_fetch_assoc($dataCourse);

					$start_date = substr($courseData['start'], 0, 10);
					$end_date = substr($courseData['end'], 0, 10);
					$deadline_date = substr($courseData['deadline'], 0, 10);
					$discount_date = substr($courseData['discount_time'], 0, 10);

                    ?>
                    <!-- work with form -->
					
						<?php
							
							if(isset($_POST['onEditCourse'])){
								// subjects
								$name = $_POST['name'];
								$type = $_POST['type'];
								$price = $_POST['price'];
								$start = $_POST['start'];
								$end = $_POST['end'];
								$deadline = $_POST['deadline'];
								$eng_level = $_POST['level'];
								$dTime = $_POST['dTime'];
								$discount_price = $_POST['discount_price'];
								$interview_fee = $_POST['interview_fee'];

								if( $name != '' && $type != '' && $price != '' && $start != '' && $end != '' && $deadline != '' && $eng_level != '' && $dTime != '' && $discount_price != ''){
									$update = mysqli_query($connection, "UPDATE `courses` SET `name`='$name',`eng_level`='$eng_level',`type`='$type',`start`='$start',`end`='$end',`deadline`='$deadline',`discount_price`='$discount_price',`discount_time`='$dTime',`price`='$price',`interview_fee`='$interview_fee' WHERE `id`= " . $courseData['id']);
									$error = "Your course successfult edited!";
									$errorFlashColor = "success";
								}else{
									$error = "Please fill out all of the fields";
									$errorFlashColor = "danger";
								}
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
                        <h4 class="mb-5">EDIT COURSE <span class="text-primary"><?php echo $courseData['name']?></span></h4>
                        <form action="edit.php?id=<?php echo $courseData['id'];?>" method="post">
                        <div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="name">Course
								<span class="text-primary">name</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="fas fa-tag"></i>
								</div>
								<input name="name" id="name" type="text" class="form-control" placeholder="Name" value="<?php echo $courseData['name']?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="type">Course
								<span class="text-primary">type</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="fas fa-clock"></i>
								</div>
								<input name="type" id="type" type="text" class="form-control" placeholder="Type" value="<?php echo $courseData['type']?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="price">Course
								<span class="text-primary">price</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="fas fa-coins"></i>
								</div>
								<input name="price" id="price" type="number" class="form-control" placeholder="Price" value="<?php echo $courseData['price']?>">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="row m-0">
							<div class="col-lg-6 p-0">
								<div class="form-group">
									<label for="start">Course
										<span class="text-primary">start</span>
									</label>
									<div class="input-group">
										<div class="input-group-text">
											<i class="far fa-calendar-alt"></i>
										</div>
										<input name="start" id="start" type="date" class="form-control date-picker" value="<?php echo $start_date?>">
									</div>
								</div>
							</div>
							<div class="col-lg-6 p-0">
								<div class="form-group">
									<label for="end">Course
										<span class="text-primary">end</span>
									</label>
									<div class="input-group">
										<div class="input-group-text">
											<i class="fas fa-calendar-alt"></i>
										</div>
										<input name="end" id="end" type="date" class="form-control data-picker" value="<?php echo $end_date?>">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="end">Interview
								<span class="text-primary">fee</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="fas fa-coins"></i>
								</div>
								<input required placeholder="Interview fee" name="interview_fee" id="end" type="number" class="form-control" value="<?php echo $courseData['interview_fee']?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="start">Course
								<span class="text-primary">deadline</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="fas fa-calendar-times"></i>
								</div>
								<input name="deadline" id="deadline" type="date" class="form-control" value="<?php echo $deadline_date?>">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="dTime">Course
								<span class="text-primary">eng level</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="fas fa-book"></i>
								</div>
								<input name="level" id="type" type="text" class="form-control" placeholder="Level" value="<?php echo $courseData['eng_level']?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="dTime">Course
								<span class="text-primary">discount time</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="far fa-clock"></i>
								</div>
								<input name="dTime" id="dTime" type="date" class="form-control" value="<?php echo $discount_date?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="form-group">
							<label for="priceAfter">
								<span class="text-primary">Price after discount time</span>
							</label>
							<div class="input-group">
								<div class="input-group-text">
									<i class="fas fa-coins"></i>
								</div>
								<input name="discount_price" id="priceAfter" type="number" class="form-control" placeholder="Price after discount time" value="<?php echo $courseData['discount_price']?>">
							</div>
						</div>
					</div>
					<form action="" method="post">
						<button name="onEditCourse" type="submit" class="btn btn-success mx-auto w-25">Edit course <?php echo $courseData['name']?></button>
					</form>
				</div>
                    <?
				}else {
					?>
					<div class="text-center">
						<h2><span class="text-danger">Error</span>, please login correctly</h2>
						<a href="/login.php" class="btn btn-danger mt-5">Login as admin</a>
					</div>
					<?
				}
			        ?>
			</form>
		</div>
	</section>

		<?php require 'includes/script.php'?>
    <script>
		if(screen.width > 998){
			$('.dropdown-menu').css({'background': '#e59151', 'margin-top': '30px'});
		}
</script>

</body>