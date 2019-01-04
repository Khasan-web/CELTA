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
	<!-- php code -->

	<?php
			clearstatcache();
            $login = 'CELTA';
            $password = 'celtaCourseTashkent2011';
            $inputUsername = $_POST['login'];
			$inputPassword = $_POST['password'];

                if($login == $inputUsername && $password == $inputPassword || isset($_POST['backAdmin'])){
						?>
	<h2>Admin panel</h2>
	<div class="functions text-left mt-4">
		<div class="container">
			<div class="row btn-group mx-auto d-flex justify-content-center">
				<form action="/delete.php" method="post">
					<button type="submit" name="removeOlds" class="btn btn-danger mt-3" onclick="return confirm('Do you want to remove all old courses?')">
						<i class="fas fa-trash-alt mr-2"></i>Remove all courses that ended</button>
				</form>
				<a href="/add.php">

				</a>
				<form action="/add.php" method="post">
					<button type="submit" name="addCourse" class="btn btn-success ml-2 mt-3">
						<i class="fas fa-plus mr-2"></i>Add a new course</button>
				</form>
				<form action="/testimonial-add.php" method="post">
					<button type="submit" name="addTestimonialPage" class="btn btn-warning ml-2 mt-3">
						<i class="fas fa-comments mr-2"></i>Add a new testimonial</button>
				</form>
				<form action="/addMember.php" method="post">
					<button type="submit" name="addMember" class="btn btn-primary ml-2 mt-3">
						<i class="fas fa-user mr-2"></i>Add a new celta member
				</form>
			</div>
		</div>
	</div>

	<h3 class="category-admin">CELTA course</h3>

	<div class="table-responsive">
		<table class="table table-striped mt-4">
			<thead>
				<tr class="">
					<th>ID</th>
					<th>Name</th>
					<th>Eng level</th>
					<th>Type</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Registration Deadline</th>
					<th>Price</th>
					<th>Discounted Price</th>
					<th>Discount Expiration Date</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				<?php 
											$courses = mysqli_query($connection, "SELECT * FROM `courses`");
										?>

				<?php 
											while( $df = mysqli_fetch_assoc($courses) ){
										?>
				<tr>
					<th scope="row">
						<?php echo $df['id']?>
					</th>
					<td class="sm">
						<?php echo $df['name']?>
					</td>
					<td class="sm">
						<?php echo $df['eng_level']?>
					</td>
					<td>
						<?php echo $df['type']?>
					</td>
					<td>
						<?php echo date("d-M-Y", strtotime($df['start']))?>
					</td>
					<td>
						<?php echo date("d-M-Y", strtotime($df['end']))?>
					</td>
					<td>
						<?php echo date("d-M-Y", strtotime($df['deadline']))?>
					</td>
					<td class="sm" class="mw-auto">
						$
						<?php echo $df['price']?>
					</td>
					<td>
						$
						<?php echo $df['discount_price']?>
					</td>
					<td>
						<?php echo date("d-M-Y", strtotime($df['discount_time']))?>
					</td>
					<td class="edit">
						<form action="/course.php?id=<?= $df['id']?>" method="post">
							<button type="submit" name="getCourse" class="btn btn-info btn-sm">Edit</button>
						</form>
					</td>
				</tr>
				<?
										};
										?>
			</tbody>
		</table>
	</div>

	<hr>

	<h3 class="category-admin">Testimonials</h3>
	<?php $testimonials = mysqli_query($connection, "SELECT * FROM `testimonials`");?>
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
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				<?
					while($testimos = mysqli_fetch_assoc($testimonials)) {
				?>
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
					<td class="">
						<img class="preview-profile" src="img/about/testimonials/<?php echo $testimos['img']?>?dummy=<?php echo rand(100, 10000000)?>"
						 alt="">
					</td>
					<td>
						<?php echo substr($testimos['testimonial'], 0, 150) . '....';?>
					</td>
					<td>
						<?php echo date("d-M-Y", strtotime($testimos['date']))?>
					</td>
					<td class="edit">
						<form action="/testimonial-overview.php?id=<?= $testimos['id']?>" method="post">
							<button type="submit" name="getTestimonial" class="btn btn-info btn-sm">Edit</button>
						</form>
					</td>
				</tr>
				<?
										}
									?>
			</tbody>
		</table>
	</div>

	<hr>


	<h3 class="category-admin pt-5" id="addMember">CELTA members</h3>
	<div class="row">
		<div class="col-lg-4 col-md-6">
			<div class="table-responsive">
				<table class="table table-striped mt-4">
					<thead>
						<thead>
							<tr class="">
								<th>Name</th>
								<th>Image</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>
							<?php		
								$members = mysqli_query($connection, "SELECT * FROM `celtaMembers`");
								while($member = mysqli_fetch_assoc($members)){
							?>
							<tr>
								<td>
									<?php echo $member['name'];?>
								</td>
								<td class="">
									<img class="preview-profile" src="img/about/testimonials/<?php echo $member['img']?>?dummy=<?php echo rand(100, 10000000)?>"
									 alt="">
								</td>
								<td class="edit">
									<form action="/celta-member-edit.php?id=<?= $member['id']?>" method="post">
										<button type="submit" name="editMember" class="btn btn-info btn-sm">Edit</button>
									</form>
								</td>
							</tr>
							<?
							}
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
		<h2>
			<span class="text-danger">Error</span>, please login correctly</h2>
		<a href="/login.php" class="btn btn-danger mt-5">Login as admin</a>
	</div>
	<?
					}
        ?>


</section>


<section id="edit_course">

</section>


<!-- course edit -->



<?php include 'includes/footer.php'?>


<?php require 'includes/script.php'?>
<script>
    if(screen.width > 998){
		$('.dropdown-menu').css({'background': '#e59151', 'margin-top': '30px'});
	}
</script>



</body>
</html>