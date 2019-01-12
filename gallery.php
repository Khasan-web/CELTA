<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Gallery | Cambridge CELTA - in Uzbekistan</title>
	<meta name="keywords" content="gallery celta">
	<meta name="description" content="See CELTA gallery">
</head>
<script>
	var needBg = false;
</script>
<style>
    video::-webkit-media-controls-fullscreen-button {
    display: none;
}
</style>
<body>


	<?php include 'includes/navbar.php'?>

<section id="courses" class="gallery">

	<h2 class="mb-5">Gallery</h2>

	<!-- trywith foreach -->
	<!-- <p class="subheader">Lorem, ipsum dolor.</p> -->
	<div class="row">
		<?php 
    
        $delay = 0;

        $gallery = mysqli_query($connection, "SELECT * FROM `gallery`");
        while($photos = mysqli_fetch_assoc($gallery)){
            $delay = $delay + 1;
            ?>
		<div class="col-lg-3 col-md-4 col-6 photo-container wow fadeIn" data-wow-delay="0.<?php echo $delay?>s"
		 style="margin-bottom: 25px;">
			<a data-toggle="modal" data-target="#exampleModal">
				<img class="w-100 photo materialboxed" src="img/gallery/<?php echo $photos['photo'];?>"
				 alt="">
			</a>
		</div>
		<?
        }

    ?>
	</div>

</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<img src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" alt="" class="w-100 activePhoto">
			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'?>


<?php require 'includes/script.php'?>
	<script>
		if(screen.width > 998){
			$('.dropdown-menu').css({'background': '#e59151', 'margin-top': '30px'});
		}
	</script>
</body>