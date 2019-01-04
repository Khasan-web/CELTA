<!DOCTYPE html>
<html lang="en">

<?php require 'includes/head.php'?>
<style>
	.content-who-accept ul{
		line-height: 25px;
		vertical-align: middle;
		opacity: 0.85;
    }
    .strong, h4{
        font-weight: 700;
        opacity: 0.9;
        color: #EC7C36;
    }
    p{
        width: 100%;
        margin-top: 15px;
    }
    .item{
        margin-bottom: 20px;
    }
    li{
        margin-bottom: 15px;
    }
    .whatCan{
        text-align: center;
    }
    .whatCan .opportunity{
        padding: 25px;
    }
    .whatCan .opportunity i{
        font-size: 35px;
        color: #EC7C36;
    }
</style>
<script>
	var needBg = true;
</script>

<body>


	<?php include 'includes/navbar.php'?>

<div class="overflow-about wow fadeIn">
	<img class="img-fluid about-img" src="img/becomeTeacher/becomeTeacher-img.png" alt="">
</div>

<div class="content-header text-center wow fadeIn" data-wow-delay="1s">
	<h1>BECOME TEACHER!</h1>
	<p>Trainee teachers that learn with us gain the practical skills, knowledge and qualification to get the best teaching jobs
		anywhere in the world.</p>
</div>


<div class="body">

	<section id="whoWeAre" class="for-p">
		<div class="container">
			<div class="forWhom my-5 py-5">
				<h2>Who is the <span style="color: #f17e20;">CELTA</span> course for?</h2>
				<p>People who want to start their career as an English language teacher and have the opportunity to teach anywhere in the
					world. You may be a new graduate, you may want to change your existing career or you may want to travel.</p>
				<p>This course is also suitable for those with some teaching experience who do not yet hold the CELTA qualification.s</p>
			</div>

			<div class="whatCan my-5">
                <h2>With a CELTA qualification, teachers can:</h2>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4 col-12 opportunity">
                        <i class="fas fa-user-tie"></i>
                        <p>Teach confidently anywhere in the world</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 opportunity">
                        <i class="fas fa-check"></i>
                        <p>Understand the learner</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 opportunity">
                        <i class="fas fa-thumbs-up"></i>
                        <p>Understand and use a variety of teaching approaches</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 opportunity">
                        <i class="fas fa-file-alt"></i>
                        <p>Successfully plan and resource lessons</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mx-auto opportunity">
                        <i class="fas fa-book"></i>
                        <p>Have a greater awareness of language</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mx-auto opportunity">
                        <i class="fas fa-handshake"></i>
                        <p>Begin a career as a English language teacher</p>
                    </div>
                </div>
            </div>

			<div class="text-center">
				<a href="/dates-fees.php"><button class="btn btn-" style="background-color: #EC7C36; color: #fff;">Learn more about CELTA course!</button></a>
			</div>

		</div>
	</section>
</div>








<div class="about">
	<?php include 'includes/footer.php'?>
</div>


<?php require 'includes/script.php'?>
<script>
	if(screen.width > 998){
		$('.dropdown-menu').css({'background': '#e59151'});
	}
</script>
</body>