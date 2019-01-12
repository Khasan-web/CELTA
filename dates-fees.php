<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Course Dates and Fees | Cambridge CELTA - in Uzbekistan</title>
	<meta name="keywords" content="data fees info about course celta">
	<meta name="description" content="Check all inforamtion about course">
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


	<section id="courses">
		<h2>Course Dates and Fees</h2>
		<div class="table-responsive">
			<table class="table table-striped mt-4">
				<thead>
					<tr>
						<th>Name</th>
						<th>Eng level</th>
						<th>Type</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Registration Deadline</th>
						<th>Price</th>
						<th>Discounted Price</th>
						<th>Discount Expiration Date</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$courses = mysqli_query($connection, "SELECT * FROM `courses`");

                        while( $df = mysqli_fetch_assoc($courses) ){
                            ?>
					<tr>
						<td class="sm">
							<?php echo $df['name']?>
						</td>
						<td>
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
						<td>
							$
							<?php echo $df['price']?>
						</td>
						<td class="sm">
							$
							<?php echo $df['discount_price']?>
						</td>
						<td>
							<?php echo date("d-M-Y", strtotime($df['discount_time']))?>
						</td>
					</tr>
					<?
                        };
                    ?>


				</tbody>
			</table>
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