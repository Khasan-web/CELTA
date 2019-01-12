<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Cambridge CELTA - in Uzbekistan</title>
	<meta name="keywords" content="CELTA celta course">
	<meta name="description" content="CELTA website celta">
</head>
<script>
	var needBg = true;
</script>

<body>

	<?php include 'includes/navbar.php'?>

	<section id="header" class="wow slideInDown">

		<div id="carousel-home" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-home" data-slide-to="1"></li>
				<li data-target="#carousel-home" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/home/slides/main-slider.png" alt="First slide">
					<div class="carousel-caption">
						<h1>WELCOME!</h1>
						<div class="col-md-7 mx-auto mt-4 d-none d-md-block">
							<p>Whether you want to teach for a summer, a year, or a lifetime, the skills learnt during a CELTA course with Edu-Action
								will boost your CV and career – and open up a world of possibilities to teach and travel.</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/home/slides/slide-2.png" alt="Second slide">
					<div class="carousel-caption">
						<h1>Intensive course!</h1>
						<div class="col-lg-4 col-md-7 mx-auto d-none d-md-block">
							<p>CELTA course includes many intensive activities that will help you become an excellent teacher.</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/home/slides/slide-3.png" alt="Third slide">
					<div class="carousel-caption">
						<h1>Amazing teachers!</h1>
						<div class="col-lg-4 col-md-7 mx-auto d-none d-md-block">
							<p>Our teacher trainers are experts in their field and use a variety of effective educational methods and strategies
								throughout the course.</p>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


	</section>


	<div class="container">
		<section id="cards">

			<div class="first-card card">
				<div class="row">
					<div class="col-lg-6 col-md-12 first_cover wow slideInRight" data-wow-delay="0">
						<div class="overflow wow slideInRight" data-wow-delay="1s"></div>
						<h2>What is CELTA?</h2>
						<p>The CELTA (Certificate of English Language Teaching to Adults) is accredited by the University of Cambridge exam board,
							which makes it prestigious and schools looking to employ you know exactly what you have been taught.</p>
						<p>CELTA is an initial teacher training qualification for teaching English as a second or foreign language (ESL and EFL).</p>
						<p>The CELTA qualification is recognised by the British Council and will enable you to teach in English language schools
							across the globe.
						</p>
					</div>
					<div class="col-lg-6 col-md-12 second_cover wow slideInRight" data-wow-delay="0.5s">
						<img src="img/home/card-img-1.png" alt="">
					</div>
				</div>
			</div>

			<div class="second-card card">
				<div class="row">
					<div class="col-lg-6 col-md-12 second_cover wow slideInLeft video" data-wow-delay="0.5s">
						<a class="text-center" onclick="playVideo()" href="#" data-toggle="modal" data-target="#videoModal">
							<img src="img/home/card-img-2.png" alt="">
						</a>
					</div>
					<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="videoModalLabel">Watch the video about CELTA by Cambridge English Assessment.</h5>
									<button type="button" onclick="closeVideo()" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="mx-auto">
										<video class="w-100" id="videoCELTA" controls poster="img/video-poster.png" allowfullscreen="false">
											<source src="https://firebasestorage.googleapis.com/v0/b/cloudcelta.appspot.com/o/videoplayback.mp4?alt=media&token=c1089f92-bef5-4ac3-97f5-c9f758bf173c"
											 type="video/mp4">
											<source src="movie.ogg" type="video/ogg"> Your browser does not support the video tag.
										</video>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" onclick="closeVideo()" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 first_cover wow slideInLeft" data-wow-delay="0s">
						<div class="overflow wow slideInLeft" data-wow-delay="1s"></div>
						<h2>Cambridge English Assessment</h2>
						<p>Watch this video and it will gives more clear point about CELTA by Cambridge English Assessment.</p>
					</div>
				</div>
			</div>

			<div class="first-card card">
				<div class="row">
					<div class="modal fade" id="celtaOverview" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="videoModalLabel">CELTA in Uzbekistan</h5>
									<button type="button" onclick="closeVideo2()" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="mx-auto">
										<video class="w-100" id="videoCELTATashkent" controls poster="img/video-poster.png" allowfullscreen="false">
											<source src="https://firebasestorage.googleapis.com/v0/b/cloudcelta.appspot.com/o/Eduaction%20celta%20rolik%203%20minut(iPhone).mp4?alt=media&token=a3261022-fd20-419f-a257-f6931775b490"
											 type="video/mp4">
											<source src="movie.ogg" type="video/ogg"> Your browser does not support the video tag.
										</video>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" onclick="closeVideo2()" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 first_cover wow slideInLeft" data-wow-delay="0s">
						<div class="overflow wow slideInLeft" data-wow-delay="1s"></div>
						<h2>CELTA in Uzbekistan</h2>
						<p>- First CELTA teachers' training course in Uzbekistan.</p>
						<p>- Explore international teaching qualification accredited by Cambridge University.</p>
						<p>- Become CELTA qualified English teacher and start your career anywhere in the world!</p>
					</div>
					<div class="col-lg-6 col-md-12 second_cover wow slideInLeft video" data-wow-delay="0.5s">
						<a class="text-center" onclick="playVideo2()" href="#" data-toggle="modal" data-target="#celtaOverview">
							<img src="img/home/card-img-2.png" alt="">
						</a>
					</div>
				</div>
			</div>

		</section>

		<hr>

		<section id="assesment" class="px-3">

			<h2 class="text-center">Assessment</h2>
			<div class="col-md-4 col-5 mx-auto my-3">
				<img class="w-100" src="img/courses/assesment.png" alt="">
			</div>
			<p>CELTA is an assessed course accredited by Cambridge English Language Assessment (CELA). In order to pass the course you
				will be assessed on the lessons you deliver and on four written assignments. You will be informed at each stage of the
				course of your progress; if you are not meeting specified criteria for any reason you will be given clear information
				about this and advice on how to adapt and improve. During the last part of the course an assessor from Cambridge English
				will visit the centre to ensure that the course and criteria have been standardised and run appropriately. Your final
				result is ratified by Cambridge English after the course has finished. </p>
			<hr>


			<h2 class="mb-4">
				<span style="color: #EC7C36; font-weight: 700;">CELTA</span> course contents</h2>

			<p class="my-4">The Certificate in English Language Teaching to Adults (CELTA) is the most highly-regarded and widely-recognised initial
				qualification for English language teachers globally. The CELTA is accredited by Cambridge English Language Assessment,
				part of the University of Cambridge.</p>
			<p class="my-4">CELTA is a four-week, assessed course which focuses on practical skills, introducing you to hands-on teaching experience
				straight away. </p>


		</section>

	</div>




	<?php include 'includes/footer.php'?>

	<?php require 'includes/script.php'?>
<script>
	if (screen.width > 998){
		$('.dropdown-menu').css({'background': '#e59151', 'margin-top': '15px'});
	}
	function closeVideo(){
    	document.getElementById('videoCELTA').pause()
	}
	function playVideo(){
    	document.getElementById('videoCELTA').play()
    }
	function closeVideo2(){
    	document.getElementById('videoCELTATashkent').pause()
	}
	function playVideo2(){
    	document.getElementById('videoCELTATashkent').play()
    }
</script>
</body>

</html>