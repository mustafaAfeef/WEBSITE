<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User login Page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="header">
		<h2> Login </h2>
	</div>
<?php require_once('server.php'); ?>

<?php
if (isset($_POST['login'])){

  require_once('server.php');
	$geleneposta=trim($_POST['email']);
	$gelensifre=md5(trim($_POST['password']));
	$sql="select * from users WHERE email='$geleneposta' and password='$gelensifre' ";
	$sonuc= mysqli_query($connection,$sql);
  $satirsay=mysqli_num_rows($sonuc);
 
	if ($satirsay>0){

		while($b = mysqli_fetch_array($sonuc)) {
			$_SESSION["kim"]=$b['id'];
		}	
		echo "<p class ='success' > Başarılı bir şekilde giriş yaptınız. Bekleyin Yönlendiriliyorsunuz. </p>";
 		echo "<meta http-equiv=\"refresh\" content=\"2;url=Home.php\">\n"; 
		}else{
				echo "<p class ='error' >Eposta adresiniz kayıtlı değil veya yanlış giriş yaptınız<br> Lütfen Yeniden Deneyiniz. </p>";
			}	
				
		}
	mysqli_close($connection);	
		?>

<center>
<form method='post' action='index.php' > 
<div class='input-group'>
<label>Email</label>
<input type='text' name='email'>
</div>
<div class='input-group'>
<label>Password</label>
<input type='Password' name='password'>
</div>
<div class='input-group'>
	<button type='submit' name='login' class='btn'> Login</button>	
</div>
<p>
Don't have account ? <a href='register.php'> Sign up</a>
</p><br>
Forgot my password<a href='resetindex.php'> Reset password </a>

</form>
 </center>
</body>
</html>