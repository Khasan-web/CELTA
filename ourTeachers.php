<!DOCTYPE html>
<html lang="en">

<?php require 'includes/head.php'?>
<script>
	var needBg = false;
</script>
<body>


	<?php include 'includes/navbar.php'?>


<section id="courses" class="teachers">
	<h2>Our teachers</h2>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-10 teacher text-center mx-auto">
				<div class="col-md-5 col-4 mx-auto profile-photo">
					<img class="circle" src="img/becomeTeacher/Joe Fisher.jpg" alt="">
				</div>
				<h4 class="name">Joe John Fisher</h4>
				<p class="rang">Main course tutor (MCT)</p>
				<hr>
				<div class="info text-left">
					<p class="infoTitle">Who is he?</p>
					<p><span class="text-orange">Joe John Fisher</span> - qualified and experienced CELTA trainer and have completed over 20 courses as Main Course Tutor or
						Assistant Course Tutor. He has vast experience of in-house teacher training and has observed over 500 hours classes
						in post-CELTA contexts and facilitated in the development of over 200 teachers at various stages of their careers.
					</p>
					<p class="infoTitle">Qualifications</p>
					<ul>
						<li><i class="fas fa-star-of-life"></i>Cambridge Certificate in English Language Teaching Young Learner extension (CELTYL) 2010, ILA Vietnam</li>
						<li><i class="fas fa-star-of-life"></i>Cambridge Diploma in English Language Teaching to Adults (DELTA) IH Buenos Aires, 2007</li>
						<li><i class="fas fa-star-of-life"></i>Cambridge Certificate in English Language Teaching to Adults (CELTA) Pass B, British Language Center, Madrid, 2004.</li>
						<li><i class="fas fa-star-of-life"></i>International House Young Learners Certificate, IH Madrid, 2006</li>
						<li><i class="fas fa-star-of-life"></i>Certificate in Business English Teaching, British Language Centre, Madrid 2005.</li>
						<li><i class="fas fa-star-of-life"></i>Certificate in Management, awarded by the Chartered Institute of Management (partial)</li>
						<li><i class="fas fa-star-of-life"></i>1999 NEBS Introductory Management</li>
						<li><i class="fas fa-star-of-life"></i>BSc (Hons) Earth Sciences 2ii, University of Plymouth, Plymouth 1998</li>
					</ul>
				</div>
			</div>
			<div class="col-md-10 teacher text-center mx-auto">
				<div class="col-md-5 col-4 mx-auto profile-photo">
					<img class="circle" src="img/becomeTeacher/christopher.jpg" alt="">
				</div>
				<h4 class="name">Christopher Hart Charles</h4>
				<p class="rang">Assistant course tutor (ACT)</p>
				<hr>
				<div class="info text-left">
					<p class="infoTitle">Who is he?</p>
					<p><span class="text-orange">Christopher Charles Hart</span> -  experienced trainer with huge experiance who studied linguistics and modern languages in UK and 
						began his teaching career with the British Council . He has held training contracts in London, Paris, Cairo, Beirut, Riyadh, Madrid, Muscat
						Firsst started delivering Cambridge CELTA and DELTA in London in 1986. He set up Saxoncourt Teacher Training in London in 1996 and
						published several ELT titles (eg. Listening Plus, Read & Use Your English for First Certificate) as well.</p>
						<br>
					<p>Currently freelancing on training projects. He aslo has small practice in existential psychotherapy. He has a degree in
						MA Education and MA Psychotherapy from Universities in London.</p>
				</div>
			</div>
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