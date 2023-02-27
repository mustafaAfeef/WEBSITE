<!DOCTYPE html  >
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User register Page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	 <div class="header">
		<h2> Register </h2>
	 </div>

<?php 
if (isset($_POST['register'])){
	$password_1=$_POST['password_1'];
	$password_2=$_POST['password_2'];
	$username=$_POST['username'];
	$email = $_POST['email'];
	 
 if ($password_1==$password_2 and strlen($password_1)>=3){
 	require_once('server.php');
    $sql="select * from users WHERE email='$email'";
    $sonuc1= mysqli_query($connection,$sql);
	$satirsay=mysqli_num_rows($sonuc1);
 
	if ($satirsay>0)
	{
	echo " <p class ='error'> Bu eposta adresi ($email) daha önce kaydedilmiş. Şifremi Unuttumu kullanabilirsiniz. </p>";
	echo "<meta http-equiv=\"refresh\" content=\"4;url=index.php\">\n";
	
	} else {
	$username=trim(htmlspecialchars($username));	
	$email=trim(htmlspecialchars($email));
	$password_1=md5(trim(htmlspecialchars($password_1)));
	
	$sqlekle="INSERT INTO users( username, email , password,user_type) 
	VALUES ('$username','$email','$password_1','2')";
	$sonuc=mysqli_query($connection,$sqlekle);

	if ($sonuc==0)
		{
		echo " <p class = 'error' > Kayıt işlemi yapılamadı :( Lütfen Yeniden Deneyiniz.</p>";
		} else{
	echo "<center> <p class='success'> Üyelik işleminiz başarılı bir şekilde yapılmıştır. Lütfen giriş yapınız. </p> ";
	echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">\n";
	 }
	};
	mysqli_close($connection);

 }else {
	 echo " <p class = 'error' >Şifreler uyuşmadı veya 4 karakterden küçük. Lütfen Yeniden Girin </p>" ;	 
	 }
}?>

<center>
 <form  action= 'register.php'  method='POST'>
	<div class='input-group'>
	<label> User Name </label>
	<input type='text' name='username' required >
	</div>
	<div class='input-group'>
	<label>Email</label>
	<input type='email' name='email' required>
	</div>
	<div class='input-group'>
	<label>Password</label>
	<input type='Password' name='password_1' required>
	</div>
	<div class='input-group'>
	<label>Confirm Password</label>
	<input type='Password' name='password_2' required>
	</div>
	<div class='input-group'>
		<button type='submit' name= 'register' class='btn'> Register</button>
		
	</div>
   Already have account ? <a href='index.php'> Sign in</a>
 
</form>

</body>
</html>