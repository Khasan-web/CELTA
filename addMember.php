<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'includes/head.php'?>
	<title>Add Member | Cambridge CELTA - in Uzbekistan</title>
    <script>
	var needBg = false;
    </script>
</head>


<body>


	<div class="colored-navbar">
		<?php include 'includes/navbar.php'?>
	</div>

	<section id="courses">
        <div class="container">

		<?php
	
        if(isset($_POST['addMember']) || isset($_POST['addNewMember'])) {
            
            ?>
            <?php

                if(isset($_POST['addNewMember'])) {
                    $value = $_POST['newMember'];
                    mysqli_query($connection, "INSERT INTO `celtaMembers`(`name`) VALUES ('$value')");
                    if($_POST['newMember'] != ''){
                        $error = "Member successfuly added!";
                        $errorFlashColor = "success";
                    }else{
                        $error = "Please fill out all of the fields";
                        $errorFlashColor = "danger";
                    }
                }

            ?>

            <div class="container">
                <div class="alert alert-<?php echo $errorFlashColor?>">
                    <?php echo $error;?>
                </div>
            </div>

            <form action="/admin.php" method="post">
                <button type="submit" name="backAdmin" class="btn btn-light btn-sm">
                    <i class="far fa-arrow-alt-circle-left"></i> Back to admin panel</button>
            </form>
            <h4 class="my-5">NEW MEMBER</h4>
            <div class="col-md-6 mx-auto">
                <form action="" method="post">
                    <div class="row">

                        <div class="col-lg-12 p-0">
                            <div class="form-group">
                                <label for="end">New
                                    <span class="text-primary">CELTA member</span>
                                </label>
                                <div class="input-group btn-group">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <input required name="newMember" placeholder="Full name" id="end" type="text" class="form-control">
                                    <button type="submit" name="addNewMember" id="addMemberBtn" class="btn btn-success">Add a new CELTA member</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <?
        } else {
            ?>
            <div class="text-center">
                <h2><span class="text-danger">Error</span>, please login correctly</h2>
                <a href="/login.php" class="btn btn-danger mt-5">Login as admin</a>
            </div>

                <?php
                    
        }

    ?>
        </div>
    </section>


    <?php require 'includes/script.php'?>
    <script>
            if(screen.width > 998){
                $('.dropdown-menu').css({'background': '#e59151', 'margin-top': '30px'});
            }
    </script>
</body>
</html>