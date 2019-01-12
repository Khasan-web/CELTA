<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Testimonial Add | Cambridge CELTA - in Uzbekistan</title>
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
		
			if(isset($_POST['addTestimonialPage']) || isset($_POST['addTestimonial'])){

                    // subjects
                    $name = $_POST['name'];
                    $status = $_POST['status'];
                    $img = $_POST['name'];
                    $date = $_POST['date'];
                    $testimonial = $_POST['testimonial'];

					if(isset($_POST['addTestimonial'])){
						if( $name != '' ){
							// если была произведена отправка формы
							if(isset($_FILES['fileMember'])) {
							// проверяем, можно ли загружать изображение
							$check = can_upload($_FILES['fileMember']);
							
							if($check === true){
								// загружаем изображение на сервер
								make_upload($_FILES['fileMember'], $member['img']);
							}
							else{
								// выводим сообщение об ошибке
								echo "<strong>$check</strong>";  
							}
							}
						}
						if( $name != '' && $status != '' && $date != '' && $testimonial != ''){
							mysqli_query($connection, "INSERT INTO `testimonials`(`name`, `status`, `img`, `testimonial`, `date`) VALUES ('$name', '$status', '$img', '$testimonial', '$date')");
							$error = "Testimonial was successfuly edited!";
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
					<form action="/admin.php" method="post" enctype="multipart/form-data">
						<button type="submit" name="backAdmin" class="btn btn-light btn-sm"><i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
					</form>
                        <h4 class="mb-5">ADD A TESTIMONIAL</h4>
                        <form action="testimonial-add.php" method="post">
                        <div class="row">
					<div class="col-lg-3 col-md-6">
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
					<div class="col-lg-3 col-md-6">
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
					<div class="col-lg-3 col-md-6">
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
					<div class="col-lg-3 col-md-6">
						<label for="file">Person
							<span class="text-primary">new photo</span>
						</label>
							<input type="file" name="fileMember" class="form-control-file" id="file">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<label for="testimon">
								<span class="text-primary">Testimonial</span>
							</label>
							<div class="input-group">
								<textarea name="testimonial" placeholder="Testimonial" class="form-control w-100" style="height: 250px" id="testimon"><?php echo $testimon['testimonial']?></textarea>
							</div>
						</div>
					</div>
                    </div>
				<div class="text-center">
					<form action="" method="post">
						<button name="addTestimonial" type="submit" class="btn btn-success mx-auto">Add testimonial</button>
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