<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sending Email</title>
	<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>
<center>
	<div class="header">
		<h2> Sending Email </h2>
	 </div>
	 <?php
  if(isset($_SESSION["kim"])){
    require_once('server.php');
    $kim = $_SESSION['kim'];
    $sql = "select * from users WHERE id = '$kim'";
    $sonuc = mysqli_query($connection,$sql);

    while($b = mysqli_fetch_array($sonuc)){
      $username = $b['username'];

    }
    echo "
<form method='post' action='send.php' enctype='multipart/form-data' > 
<div class='input-group'>
<label>Send To </label>
<input type='email' name='adress'></div>
<div class='input-group'>
<label>subject</label>
<input type='text' name='subject'></div>
<div class='input-group'>
<label>Message</label>
<input type='text' name='message'></div>
<div class='input-group'>
<label>Chose File</label>
<input type='file'  name='file'></div>
<div class='input-group'>
<button type='submit' name='send' class='btn'> Send Message </button></div>
Do you want to back home ? <a href='Home.php'> Back to home</a>
</form>
</center>";
}else{
    echo " You must come from the index page";
    echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">\n";
  }
?>

<?php
if(isset($_POST['send'])){
	require_once('server.php');
$adress = $_POST['adress'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
//$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "mustafa.afeef2019@gmail.com";
$mail->Password   = "Mustafa.2020";
$mail->IsHTML(true);
$mail->AddAddress($_POST['adress']);
$mail->SetFrom("mustafa.afeef2019@gmail.com", "codecome");
$mail->AddReplyTo("no_reply@gmail.com", " No reply");
//$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject =" $subject";
$content = " $message";
//$mail-> AddAttachment($_FILES['file'][''],$_FILES['file']['nam']);
$mail->addAttachment($_FILES['file']['tmp_name']);

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "<p class='error'>Error while sending Email.<p>";
  var_dump($mail);
} else {
  echo "<p class= 'success'>Email sent successfully</p>";
}
}
?>

</body>
</html>