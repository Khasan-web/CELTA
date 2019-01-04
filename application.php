<!DOCTYPE html>
<html lang="en">

<?php require 'includes/head.php'?>
<style>
	.line{
		margin: 0 auto;
		width: 50px;
		height: 5px;
		background-color: #f17e20;
		border-radius: 5rem;
		transition: 0.5s;
	}
	.step:hover .line{
		width: 75px;
	}
	.step{
		padding: 50px 0;
		text-align: center;
	}
	.step p{
		text-align: left;
	}
</style>
<script>
	var needBg = false;
</script>

<body>

	<?php include 'includes/navbar.php'?>


<section id="courses">
	<div class="container application">

		<h2 class="mb-4">How to apply</h2>

		<div class="col-lg-6 col-md-10 step mx-auto">
			<h4>1st Step</h4>
			<div class="line my-3"></div>
			<p>To apply, download and complete
				<a href="application/CELTA  Application Form_ pre interview.doc">the CELTA registration form</a> and
				<a href="application/Pre-interview task.docx">Pre-interview task</a>. As part of the application, you will be required to write a 300 word essay in your own handwriting
				on why you want to do this course and what you want to do afterwards.</p>
		</div>

		<div class="col-lg-6 col-md-10 step mx-auto">
			<h4>2nd Step</h4>
			<div class="line my-3"></div>
			<p>Return your application by email to: celta@edu-action.uz.</p>
		</div>

		<div class="col-lg-6 col-md-10 step mx-auto">
			<h4>3rd Step</h4>
			<div class="line my-3"></div>
			<p>If your application form and essay are both completed to the required standard, Edu-action will contact you to arrange an interview.
				For international candidates this can be a phone interview. Acceptance is conditional upon a satisfactory interview.</p>
		</div>

		<div class="col-lg-6 col-md-10 step mx-auto">
			<h4>4th Step</h4>
			<div class="line my-3"></div>
			<p>If your application is successful you will need to pay a non-refundable deposit of $200. The balance of your fees must
				be paid six weeks before the course begins to guarantee your place. If you are accepted after that time, the full fees
				are due immediately. </p>
		</div>

		<div class="col-lg-6 col-md-10 step mx-auto">
			<h4>Please note:</h4>
			<div class="line my-3"></div>
			<p>We are unable to hold places open for applicants who do not pay their full fees when they are due. All courses are subject
				to demand.
		</div>

		<div class="col-lg-6 col-md-10 step mx-auto">
			<h4>Any question?</h4>
			<div class="line my-4"></div>
			<p>If you have any question you can ask on
				<a href="/contact.php">contact page</a>, we will be glad to answer!</p>
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