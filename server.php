<?php

$connection = mysqli_connect("localhost", "root", "") or die ("Bağlantı Hatası: Lütfen Yeniden Deneyiniz"); 
mysqli_select_db($connection,"my_db");

mysqli_query($connection, "SET CHARACTER SET 'utf8'");
mysqli_query($connection, "SET NAMES 'utf8'");
mysqli_query($connection, "SET COLLATION_CONNECTION = 'latin5_turkish_ci'");

?>