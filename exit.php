<?php
session_start();
?>

<?php


require_once('server.php');

if (isset($_SESSION["kim"]))
  {
    echo " <meta http-equiv=\"refresh\" content=\"0;url=index.php\">\n";
  }else{
    echo "SAHTEKARLIK YAPMA. GİRİŞ YAPMADIN Kİ... ";   
 }
  
unset($_SESSION['kim']);
session_destroy(); 
 
mysqli_close($connection); //veritabanı her ihtimale karşı kapatılır.

?>

</body>
</html>