<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Add New Course | Cambridge CELTA - in Uzbekistan</title>
	<script>
	var needBg = false;
	</script>
</head>

<body>

	<?php include 'includes/navbar.php'?>


<section id="courses">

	<?php

		if(isset($_POST['onAddNewCourse'])){
			// subjects
		$name = $_POST['name'];
		$engLvl = $_POST['level'];
		$type = $_POST['type'];
		$price = $_POST['price'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$deadline = $_POST['deadline'];
		$dTime = $_POST['dTime'];
		$discount_price = $_POST['discount_price'];
		$interview_fee = $_POST['interview_fee'];

		mysqli_query($connection, "INSERT INTO `courses`(`name`, `eng_level`, `type`, `start`, `end`, `deadline`, `discount_price`, `discount_time`, `price`, `interview_fee`) 
		VALUE ('$name', '$engLvl', '$type', '$start', '$end', '$deadline', $discount_price, '$dTime', '$price', '$interview_fee')");
		$error = "Your course successfuly added!";
		$errorFlashColor = "success";
		?>
		<div class="container">
		<div class="alert alert-<?php echo $errorFlashColor?>">
			<?php echo $error;?>
		</div>
		</div>
		<?
		}
	
	if(isset($_POST['addCourse']) || isset($_POST['onAddNewCourse'])){
		?>

	<!-- work with form -->
	<?php

?>
	<div class="container adding">
		<form action="/admin.php" method="post">
			<button type="submit" name="backAdmin" class="btn btn-light btn-sm">
				<i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
		</form>
		<h4 class="my-5">NEW COURSE</h4>
		<form action="add.php" method="post">
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
							<input required name="name" id="name" type="text" class="form-control" placeholder="Name">
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
							<input required name="type" id="type" type="text" class="form-control" placeholder="Type">
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
							<input required name="price" id="price" type="number" class="form-control" placeholder="Price">
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
									<input required name="start" id="start" type="date" class="form-control date-picker">
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
									<input required name="end" id="end" type="date" class="form-control">
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
							<input required placeholder="Interview fee" name="interview_fee" id="end" type="number" class="form-control">
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
							<input required name="deadline" id="deadline" type="date" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="form-group">
						<label for="type">Course
							<span class="text-primary">eng level</span>
						</label>
						<div class="input-group">
							<div class="input-group-text">
								<i class="fas fa-book"></i>
							</div>
							<input required name="level" id="type" type="text" class="form-control" placeholder="Level">
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
							<input required name="dTime" id="dTime" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="form-group">
						<label for="priceAfter">Course
							<span class="text-primary">discount price</span>
						</label>
						<div class="input-group">
							<div class="input-group-text">
								<i class="fas fa-coins"></i>
							</div>
							<input required name="discount_price" id="priceAfter" type="number" class="form-control" placeholder="Discounted Price">
						</div>
					</div>
				</div>
				<form action="" method="post">
					<button name="onAddNewCourse" type="submit" class="btn btn-success mx-auto w-25">Add course</button>
				</form>
			</div>

		</form>
	</div>
	<?
	} else {
		?>
	<div class="text-center">
		<h2>
			<span class="text-danger">Error</span>, please login correctly</h2>
		<a href="/login.php" class="btn btn-danger mt-5">Login as admin</a>
	</div>
	<?
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