<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Contact Us | Cambridge CELTA - in Uzbekistan</title>
	<meta name="keywords" content="contact celta">
	<meta name="description" content="contact CELTA to ask questions">
</head>
<style>
	.list-contact i{
		padding: 0 5px;
	}

</style>
<script>
	var needBg = false;
</script>

<body>

	<?php include 'includes/navbar.php'?>

<div id="courses" class="mt-5 pt-5 contact">
	<h2 class="my-5">Contact us</h2>
	<div class="container">
		<div class="map my-3 mb-5">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.4478514591888!2d69.27015321534451!3d41.29911990942544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b1f8eeee311%3A0x1fc003aa9dade0e8!2sEdu+Action!5e0!3m2!1sru!2s!4v1541326068646"
			width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="location">
			<h2 class="my-5">Get in touch</h2>




			<div class="row">
				<div class="col-lg-4 col-md-12 text-left list-contact">

					<h3>ADDRESS</h3>
					<p class="mt-2">16, Afrosiyab street, Tashkent,
						<br> Uzbekistan, 100015</p>


					<h3 class="mt-5">CONTACTS</h3>
					<p class="mt-2">info@celta.uz</p>
					<p class="mt-2">+998 99 889 86 70 <span class="mx-2">|</span> +998 78 148 86 86</p>


					<h3 class="mt-5">SOCIAL NETS</h3>
					<a href="https://www.facebook.com/Internationaltefltraininginstitute">
						<i style="color: #3b5998;" class="fab fa-facebook-f mt-2"></i>
					</a>
					<a href="https://twitter.com/ITTIinsider">
						<i style="color: #0084b4 ;" class="fab fa-twitter"></i>
					</a>
					<a href="skype:itti-help?call">
						<i style="color: #12a5f4;" class="fab fa-skype"></i>
					</a>
					<a href="https://www.instagram.com/itti_social/">
						<i style="color: #cd486b;" class="fab fa-instagram"></i>
					</a>

				</div>
				<div class="col-lg-8 col-md-12 mt-5">
					<form action="sendEmail.php" method="post">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-12">
								<div class="form-group">
									<label for="name">
										
										<span class="text-dark">First name</span>
									</label>
									<div class="input-group">
										<div class="input-group-text">
											<i class="fas fa-user"></i>
										</div>
										<input required name="fName" id="fName" type="text" class="form-control" placeholder="First name">
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-12">
								<div class="form-group">
									<label for="type">
										
										<span class="text-dark">Last name</span>
									</label>
									<div class="input-group">
										<div class="input-group-text">
											<i class="far fa-user"></i>
										</div>
										<input required name="sName" type="text" class="form-control" placeholder="Last name">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-12 col-12">
								<div class="form-group">
									<label for="start">
										
										<span class="text-dark">Phone number</span>
									</label>
									<div class="input-group">
										<div class="input-group-text">
											<i class="fas fa-phone"></i>
										</div>
										<input required name="phone" type="phone" class="form-control" placeholder="Phone number">
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-12">
								<div class="form-group">
									<label for="end">
										
										<span class="text-dark">Email</span>
									</label>
									<div class="input-group">
										<div class="input-group-text">
											<i class="fas fa-at"></i>
										</div>
										<input required name="email" type="email" class="form-control" placeholder="Email">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="info">
										
										<span class="text-dark">Message</span>
									</label>
									<div class="input-group">
										<div class="input-group-text">
											<i class="fas fa-file-alt"></i>
										</div>
										<textarea required name="message" rows="4" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 mx-auto">
							<button name="submit" type="submit" class="btn btn-success d-block w-100">Send message!</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="about">
		<?php include 'includes/footer.php'?>
	</div>
	<?php require 'includes/script.php'?>

<script>
    if(screen.width > 998){
		$('.dropdown-menu').css({'background': '#e59151', 'margin-top': '30px'});
	}
</script>

</body>