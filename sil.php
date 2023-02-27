<?php

    $sil_id=$_GET['sil'];
    
    require_once('server.php');
    
    $sqlsil= "DELETE FROM comment WHERE id=$sil_id";

    mysqli_query($connection,$sqlsil);

    echo"Deleted Successfully.";
    echo "<meta http-equiv=\"refresh\" content=\"1;url=comment.php\">\n";


?>