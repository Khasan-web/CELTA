<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Delete Course | Cambridge CELTA - in Uzbekistan</title>
</head>

<body>


	<div class="colored-navbar">
		<?php include 'includes/navbar.php'?>
	</div>


	<section id="courses">

        <?php 
            $flashMessage = '';
            if(isset($_POST['removeOlds'])){
                $date = date("Y-m-d H:i:s");
                    mysqli_query($connection, "DELETE FROM `courses` WHERE `end` < '$date'");
                $flashMessage = "All old courses were delted";
            }else{
                
            }
            ?>
                <h4><?php echo $flashMessage;?></h4>
            <?
        ?>

    <?php require 'includes/script.php'?>
    <script>
    $('.colored-navbar nav').css({'background': 'linear-gradient(to right, #e93c4ddc, rgba(255, 166, 0, 0.886))', 'padding': '0'});
    $('.colored-navbar .dropdown-menu').css({'background': '#e59151'});
    
    $('#courses #remove').click(function(){
        $('#courses #putId').addClass('d-inline');
    });
    $('#courses #cancel').click(function(){
        $('#courses #putId').removeClass('d-inline');
    });
</script>

</body>