<?php
session_start(); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
?>
<?php
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    require_once('server.php');
    
    $emailId = $_POST['email'];
    $result = mysqli_query($connection,"SELECT * FROM users WHERE email='" . $emailId . "'");

    $row= mysqli_fetch_array($result);

  if($row)
  {
    
     $token = md5($emailId).rand(10,9999);

     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );

    $expDate = date("Y-m-d H:i:s",$expFormat);
    $update = " UPDATE users SET reset_link_token='$token' ,exp_date='$expDate' WHERE email='$emailId'";
    $sonuc = mysqli_query($connection,$update);
    // $update = mysqli_query($connection,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");


    $link = "<a href='reset-password.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";

  

    $mail = new PHPMailer();

    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "mustafa.afeef2019@gmail.com";
    // GMAIL password
    $mail->Password = "Mustafa.2020";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='mustafa.afeef2019@gmail.com';
    $mail->FromName='Codecom';
    $mail->AddAddress($_POST['email'], 'Hello');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    if($mail->Send())
    {
      echo 'Check Your Email and Click on the link sent to your email' .$link.'';
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. <a href = 'index.php'> Go back</a>";
  }
}
?>