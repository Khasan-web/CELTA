<!DOCTYPE html>
<html lang="en">

<?php require 'includes/head.php'?>
<style>
    .video img{
            transition: 0.5s;
    }
    .video img:hover{
        transform: scale(1.1);
	}
	.question-title {
			padding: 15px;
			margin-top: 15px;
			cursor: pointer;
			border-left: 5px solid #f17e20;
		}

		.answer {
			padding: 20px;
			line-height: 26px;
			box-shadow: none;
			border-left: 5px solid #f17e20;
			border-radius: 0;
			background: transparent;
		}

		.answer p {
			margin: 10px 0;
			margin-top: 0;
			color: #000!important;
			font-weight: 400!important;
			padding-left: 0;
		}

		h3 {
			line-height: 35px;
			color: #f17e20;
		}

		.first-card {
			margin-bottom: 100px;
		}
		.first-card .first_cover {
			background: linear-gradient(to right, #ec7b4ada, #e97c00dc);
		}
		.first-card .second_cover {
			background: linear-gradient(to right, #ec7b4a62, #e97c0059);
		}
		.first-card .overflow {
			background: linear-gradient(to right, #ec7b4ada, #e97c00dc);
			left: -8%;
			top: -8%;
		}
</style>
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
						<p>Our teacher trainers are experts in their field and use a variety of effective educational methods and strategies throughout the course.</p>
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

		<div class="first-card">
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

		<div class="second-card">
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
								<h5 class="modal-title" id="videoModalLabel">The Ultimate Guide</h5>
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
					<h2>The Ultimate Guide</h2>
					<p>Please check this video and it will gives more clear point about CELTA course.</p>

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

	<hr>

	<section class="faqs">
		<div class="text-center wow fadeIn">
			<h2 class="text-dark mb-5">Frequently Asking Quetions</h2>
		</div>
		<div class="wow fadeIn">

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
					1. What are the requirements?
				</h4>
				<div class="collapse show" id="collapseExample1">
					<div class="answer my-0">
						<p>Candidates must be:</p>
						<ul>
							<li>at least 20 years old (when the course begins)</li>
							<li>have a standard of education that allows entry to higher education in their country</li>
							<li>competent in written and spoken English (C1 level on the Common European Framework or IELTS 7 or higher)</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
					2. Can I apply without an English language qualification like the IELTS or TOEFL?
				</h4>
				<div class="collapse" id="collapseExample2">
					<div class="answer my-0">
						<p>Yes, your English language competence will be scrutinised in your application and in the interview, should you be offered
							one.
						</p>
					</div>
				</div>
			</div>

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
					3. What is the application process for a CELTA?
				</h4>
				<div class="collapse" id="collapseExample3">
					<div class="answer my-0">
						<p>Candidates must be:</p>
						<ul>
							<li>at least 20 years old (when the course begins)</li>
							<li>have a standard of education that allows entry to higher education in their country</li>
							<li>competent in written and spoken English (C1 level on the Common European Framework or IELTS 7 or higher)</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
					4. What will I learn on the CELTA course?
				</h4>
				<div class="collapse" id="collapseExample4">
					<div class="answer my-0">
						<p>The full CELTA syllabus can be viewed on the
							<a href="http://www.cambridgeenglish.org/teaching-english/teaching-qualifications/celta/">Cambridge website</a>
						</p>
					</div>
				</div>
			</div>

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
					5. Do I have to have teaching experience before I start a CELTA course?
				</h4>
				<div class="collapse" id="collapseExample5">
					<div class="answer my-0">
						<p>No – CELTA courses are suitable for candidates with no previous teaching experience. They are also taken by people
							who have some experience of teaching English, and people who have experience of teaching other subjects.
						</p>
					</div>
				</div>
			</div>

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
					6. I don’t have a university degree. Can I take a CELTA course?
				</h4>
				<div class="collapse" id="collapseExample6">
					<div class="answer my-0">
						<p>Yes – the requirement for taking a CELTA course is that you have a standard of education equivalent to that required
							for entry into higher education.</p>
					</div>
				</div>
			</div>

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
					7. Does a CELTA certificate expire?
				</h4>
				<div class="collapse" id="collapseExample7">
					<div class="answer my-0">
						<p>No – CELTA certificates don’t expire.</p>
					</div>
				</div>
			</div>

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample">
					8. Do you get a grade at the end of the course?
				</h4>
				<div class="collapse" id="collapseExample8">
					<div class="answer my-0">
						<p>Yes – successful CELTA candidates are graded as Pass, Pass B or Pass A (Pass A is the highest grade).</p>
						<p>Pass is awarded to candidates whose overall performance in the teachingPass is awarded to candidates whose overall
							performance in the teaching practice and in the written assignments meets the specified criteria.</p>
						<p>Pass (Grade B) is
							awarded to candidates whose performance in the written assignments meets the specified criteria and who have demonstrated
							in their teaching practice a level of achievement significantly higher than that required to meet pass-level criteria
							in relation to demonstration of the criteria for teaching and professionalism.</p>
						<p>A Pass (Grade A) is awarded to candidates whose performance in the written assignments meets the specified criteria
							and who have demonstrated in their teaching practice a level of ability and achievement and a level of awareness significantly
							higher than that required to meet pass-level criteria in relation to planning for effective teaching and demonstration
							of the criteria for teaching and professionalism.</p>
						<p>Candidates who fail to meet the criteria in either of the assessed components will receive a Fail.</p>
					</div>
				</div>
			</div>

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample">
					9. What’s the difference between TEFL/TESOL and CELTA?
				</h4>
				<div class="collapse" id="collapseExample9">
					<div class="answer my-0">
						<p>CELTA (Certificate in English Language Teaching to Adults) is the name of the initial teaching qualification. TEFL
							(Teaching English as a Foreign Language) is the name of the profession, although the terminology is changing and many
							professionals now speak of ELT (English Language Teaching).</p>
						<p>There are many TEFL (ELT) courses offered in the UK but the CELTA along with the Trinity Cert-TESOL (Certificate in
							Teaching English to Speakers of Other Languages) are particularly well respected by language schools recruiting teachers
							with a TEFL (ELT) qualification.</p>
					</div>
				</div>
			</div>

			<div class="question">
				<h4 class="question-title" data-toggle="collapse" href="#collapseExample10" role="button" aria-expanded="false" aria-controls="collapseExample">
					10. What is Cambridge CELTA?
				</h4>
				<div class="collapse" id="collapseExample10">
					<div class="answer my-0">
						<p>The Certificate in Teaching English to Speakers of Other Languages (CELTA) course is designed to give you the skills
							to teach the English language, and is for people with no previous teaching experience.</p>
					</div>
				</div>
			</div>


		</div>
</div>

</section>

</div>




<?php include 'includes/footer.php'?>

<?php require 'includes/script.php'?>
<script>
	if(screen.width > 998){
		$('.dropdown-menu').css({'background': '#e59151', 'margin-top': '15px'});
	}
	function closeVideo(){
    	document.getElementById('videoCELTA').pause()
	}
	function playVideo(){
    	document.getElementById('videoCELTA').play()
    }
</script>
</body>

</html>