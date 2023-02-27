<?php
if(isset($_POST['password']) && $_POST['reset_link_token'] && $_POST['email'])
{
  require_once('server.php');
  
  $emailId = $_POST['email'];

  $token = $_POST['reset_link_token'];
  
  $password = md5($_POST['password']);

  $query = mysqli_query($connection,"SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `email`='".$emailId."'");

   $row = mysqli_num_rows($query);

   if($row){
        $q = "UPDATE users set users.password='" . $password . "', reset_link_token='" . NULL . "' ,exp_date='NULL' WHERE email='" . $emailId . "'";
        echo $q;
       mysqli_query($connection,$q);

       echo '<p>Congratulations! Your password has been updated successfully.</p>';
   }else{
      echo "<p>Something goes wrong. Please try again</p>";
   }
}
?>