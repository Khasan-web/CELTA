<?php
  include_once('functionsUpload.php');
?>
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
		
			if( isset($_POST['editMember']) || isset($_POST['onEditMember']) || isset($_POST['removeMember']) || isset($_POST['uploadNewImg'])){

				$dataMember = mysqli_query($connection, "SELECT * FROM `celtaMembers` WHERE `id` = " . (int) $_GET['id']);
				if(mysqli_num_rows($dataMember) <= 0){
                    ?>
					<div class="container">
						<h2>ERROR 404, MEMBER HAS NOT BEEN FOUND</h2>
					</div>
					<?
				}else{
					$member = mysqli_fetch_assoc($dataMember);

                    ?>
				<!-- work with form -->
				<?php
            
                    // subjects
                    $name = $_POST['name'];

					if(isset($_POST['onEditMember'])){
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
							mysqli_query($connection, "UPDATE `celtaMembers` SET `name`='$name' WHERE `id` = " . $member['id']);
							$error = "Member was successfuly edited!";
							$errorFlashColor = "success";
						}else{
							$error = "Please fill out all of the fields";
							$errorFlashColor = "danger";
						}
				
					?>
					<div class="container">
						<div class="alert alert-<?php echo $errorFlashColor?>">
							<?php echo $error?>
						</div>
					</div>
					<?
					}

					?>
						<div class="container">
							<form action="/admin.php" method="post">
								<button type="submit" name="backAdmin" class="btn btn-light btn-sm">
									<i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
							</form>
						</div>
					<?

					if(isset($_POST['removeMember'])){
						if( $name != '' ){
							mysqli_query($connection, "DELETE FROM `celtaMembers` WHERE `id` = " . $member['id']);
							$error = "Member was successfuly removed!";
							$errorFlashColor = "success";
						}

						?>
						<div class="container">
							<div class="alert alert-<?php echo $errorFlashColor?>">
								<?php echo $error?>
							</div>
						</div>
						<?
					}
                ?>
			<div class="container adding">
				<h4 class="mb-5">EDIT MEMBER
					<span class="text-primary">
						<?php echo $member['name']?>
					</span>
				</h4>
		<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-2 col-md-0"></div>
				<div class="col-lg-4 col-md-6">
					<div class="form-group">
						<label for="name">Person
							<span class="text-primary">name</span>
						</label>
						<div class="input-group">
							<div class="input-group-text">
								<i class="fas fa-user"></i>
							</div>
							<input name="name" id="name" type="text" class="form-control" placeholder="Name" value="<?php echo $member['name']?>">
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<label for="file">Person
						<span class="text-primary">new photo</span>
					</label>
						<input type="file" name="fileMember" class="form-control-file" id="file">
				</div>
			</div>
			<div class="text-center mt-4">
				<button name="onEditMember" type="submit" class="btn btn-success mx-auto">Edit
					<?php echo $member['name']?>
				</button>
				<button name="removeMember" type="submit" class="btn btn-danger mx-auto">remove
					<?php echo $member['name']?>
				</button>
			</div>
		</form>
		
		<?
				}
			        ?>
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