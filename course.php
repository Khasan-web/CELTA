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
	
		if(isset($_POST['getCourse']) || isset($_POST['remove'])){
			?>
				<?php
                $course = mysqli_query($connection, "SELECT * FROM `courses` WHERE `id` = " . (int) $_GET['id']);
                if(mysqli_num_rows($course) <= 0){
                    ?>
					<div class="container">
					<form action="/admin.php" method="post">
						<button type="submit" name="backAdmin" class="btn btn-light btn-sm"><i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
					</form>
						<h2>ERROR 404, COURSE HAS NOT BEEN FOUND</h2>
					</div>
					<?
                }else{
                    $sCourse = mysqli_fetch_assoc($course);
                    if(isset($_POST['remove'])){
                        mysqli_query($connection, "DELETE FROM `courses` WHERE `id` = " . $sCourse['id']);
                        ?>
						<div class="container">
							<div class="alert alert-success">The course was successfuly deleted</div>
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
								<?php echo $sCourse['name']?>
							</h2>
							<div class="btn-group ml-auto">
								<form method="post">
									<button type="submit" name="remove" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">remove</button>
								</form>
									<form action="/edit.php?id=<?php echo $sCourse['id']?>" method="post">
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
											<th>Eng level</th>
											<th>Type</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th> Registration Deadline</th>
											<th>Price</th>
											<th>Discount Expiration Date</th>
											<th>Discounted Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">
												<?php echo $sCourse['id']?>
											</th>
											<td class="sm">
												<?php echo $sCourse['eng_level']?>
											</td>
											<td>
												<?php echo $sCourse['type']?>
											</td>
											<td>
												<?php echo date("d-M-Y", strtotime($sCourse['start']))?>
											</td>
											<td>
												<?php echo date("d-M-Y", strtotime($sCourse['end']))?>
											</td>
											<td>
												<?php echo date("d-M-Y", strtotime($sCourse['deadline']))?>
											</td>
											<td>
												$
												<?php echo $sCourse['price']?>
											</td>
											<td>
												$
												<?php echo $sCourse['discount_price']?>
											</td>
											<td>
												<?php echo date("d-M-Y", strtotime($sCourse['discount_time']))?>
											</td>
										</tr>
										<?
											};
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
			<?
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