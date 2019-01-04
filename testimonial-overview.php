<?php
  include_once('functionsUpload.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'includes/head.php'?>
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
</style>
<script>
	var needBg = false;
</script>

<body>

	<div class="colored-navbar">
		<?php include 'includes/navbar.php'?>
</div>

<section id="courses">

	<?php
	
		if(isset($_POST['getTestimonial']) || isset($_POST['remove']) || isset($_FILES['file'])){
			?>
				<?php
                $testimonials = mysqli_query($connection, "SELECT * FROM `testimonials` WHERE `id` = " . $_GET['id']);
                if(mysqli_num_rows($testimonials) <= 0){
                    ?>
					<div class="container">
					<form action="/admin.php" method="post">
						<button type="submit" name="backAdmin" class="btn btn-light btn-sm"><i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
					</form>
						<h2>ERROR 404, TESTIMONIAL HAS NOT BEEN FOUND</h2>
					</div>
					<?
                }else{
                    $testimos = mysqli_fetch_assoc($testimonials);
                    if(isset($_POST['remove'])){
                        mysqli_query($connection, "DELETE FROM `testimonials` WHERE `id` = " . $testimos['id']);
                        ?>
						<div class="container">
							<div class="alert alert-success">The testimonial was successfuly deleted</div>
						</div>
						<?
                    }
					?>
					<div class="mb-3">
						<form action="/admin.php" method="post">
							<button type="submit" name="backAdmin" class="btn btn-light btn-sm"><i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
						</form>
					</div>
					<div class="card course">
						<div class="card-header align-items-center d-flex">
							<h2 class="text-left d-inline">
								<?php echo $testimos['name']?>
							</h2>
							<div class="btn-group ml-auto">
								<form action="/testimonial-overview.php?id=<?php echo $testimos['id']?>" method="post">
									<button type="submit" name="remove" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">remove</button>
								</form>
									<form action="/testimonial-edit.php?id=<?php echo $testimos['id']?>" method="post">
										<button type="submit" name="editCourse" class="btn btn-primary btn-sm ml-2">edit</button>
									</form>
							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped mt-4">
									<thead>
										<tr class="">
										<th>ID</th>
										<th>Name</th>
										<th>Status</th>
										<th>Image</th>
										<th>Testimonial</th>
										<th>Date</th>
										</tr>
									</thead>
									<tbody>
											<tr>
												<th scope="row">
													<?php echo $testimos['id']?>
												</th>
												<td>
													<?php echo $testimos['name']?>
												</td>
												<td>
													<?php echo $testimos['status']?>
												</td>
												<td>
													<img class="preview-profile" src="img/about/testimonials/<?php echo $testimos['img']?>?dummy=<?php echo rand(100, 10000000)?>" alt="">
												</td>
												<td>
													<?php echo $testimos['testimonial'];?>
												</td>
												<td>
													<?php echo date("d-M-Y", strtotime($testimos['date']))?>
												</td>
											</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-4">
						<label for="file">Person
							<span class="text-primary">new photo</span>
						</label>
						<form method="post" enctype="multipart/form-data">
							<input type="file" name="file" class="form-control-file" id="file">
							<button type="submit" class="btn btn-primary btn-sm mt-1">upload</button>
						</form>
						<?php
							// если была произведена отправка формы
							if(isset($_FILES['file'])) {
							// проверяем, можно ли загружать изображение
							$check = can_upload($_FILES['file']);
							
							if($check === true){
								// загружаем изображение на сервер
								make_upload($_FILES['file'], $testimos['img']);
								echo "<strong>Photo was successfuly uploaded!</strong>";
							}
							else{
								// выводим сообщение об ошибке
								echo "<strong>$check</strong>";  
							}
							}
						?>
					</div>
			<?
			
		} 
	} else {
			?>
			<div class="text-center">
				<h2><span class="text-danger">Error</span>, please login correctly</h2>
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