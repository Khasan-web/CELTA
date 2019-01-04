<?php

	$msg = '';
	$msg_type = '';

	if(isset($_POST['submit'])){
		require 'phpmailer/PHPMailerAutoload.php';
		// just added /

		$to = "info@celta.uz";
		$name = $_POST['fName'] . ' ' . $_POST['sName'];
		$email = $_POST['email'];
		$phoneNumber = $_POST['phone'];
        $message = $_POST['message'];

		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host 	  = 'mail.celta.uz';
		$mail->Port       = 587;     
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth   = true;  
		$mail->Username   = 'info@celta.uz';
		$mail->Password   = 'JHBHw@KTTA&l';
		$mail->FromName = $name;
		$mail->addAddress($to);
		$mail->MsgHTML(
			"Full name: " . $name . "\n" . 
			"Phone number: " . $phoneNumber . "\n" . 
			"Email: " . $email . "\n" . "\n" .
			"Message: " . "\n" . $message
		);
		$mail->Subject = 'Mail from Contact form';

		if(!$mail->send()){
			$msg = 'Mail failed, try later' . $mail->ErrorInfo;
		} else{
			$msg = 'Mail was succefully sent';
		}
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tesol | Send message</title>
	<?php include 'includes/head.php'?>
	<style>
		.message{
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}
		i{
			font-size: 50px;
		}
		.status{
			display: inline-block;
			width: 50px;
			height: 50px;
			border-radius: 50%;
		}
	</style>
</head>
<body>
	<div class="message">
	<?php 
		if($msg == 'Mail was succefully sent'){
			$msg_type = 'success';
		}else{
			$msg_type = 'danger';
		}
	?>
		<i class="fas fa-envelope text-<?php echo $msg_type?>"></i>
		<h2 class="mb-4"><?php echo $msg?></h2>
		<a href="/"><button class="btn btn-<?php echo $msg_type?>">Back to home page</button></a>
	</div>
</body>
</html>