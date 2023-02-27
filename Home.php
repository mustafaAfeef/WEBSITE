<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
<nav class='navbar navbar-expand-sm navbar-dark bg-dark  '>
  <div class='container-fluid'>
    <a class='navbar-brand nav-link active bg-primary' >Code.com</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#mynavbar'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='mynavbar'>
      <ul class='navbar-nav me-auto'>
        <!-- <li class='nav-item'>
          <a class='nav-link text-white' href='Home.php'>Home</a>
        </li> -->
        <li class='nav-item'>
          <a class='nav-link  text-white' href='Html.php'>Html</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link  text-white' href='python.php'>Python</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link  text-white' href='CSS.php'>CSS</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link  text-white' href='Javascript.php'>JavaScript</a>
        </li>
      </ul>
      <form class='d-flex'>
        <a class='navbar-brand nav-link active bg-primary' >$username</a>
        <a class='navbar-brand nav-link active bg-primary' href='send.php'> Send Message </a>
        <a class='navbar-brand nav-link active bg-primary'  href='exit.php' >Exit</a>
        
      </form>
    </div>
  </div>
</nav>
<div class='main'>

<!-- <div class='container-fluid mt-3'> -->
  <div class='content'>
      <h1>Web Devlopment & <br><span>Programing</span><br> Languages</h1>
      <p class='par'>Do you want to learn how to develop a website<br> in short time you can join our  free courses</p>

      <button class='cn'><a href='register.php'>JOIN US</a> </button>
    </div>

</div >
<div class='footer'>
  <div class='container'>
    <span> For more Information : </span>
        <ul>
        <li class='nav-item'><img src='img/facebook.png'> code@face</li>
         <li class='nav-item'><img src='img/insta.png'>code@inst</li>
          <li class='nav-item'><img src='img/yout.png'>code.youtube</li>
           <li class='nav-item'><img src='img/tw.png'>@code.com</li>
      </ul>    
  </div>
</div>";

  }else{
    echo " You must come from the index page";
    echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">\n";
  }
?>

</body>
</html>
