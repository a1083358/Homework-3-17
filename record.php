<?php
    $euserid=$_GET["euserid"];
    $epassword=$_GET["epassword"];
    if($euserid=='cindy83392' && $epassword=='123'){
        header("Location:success.php");
    }else{
        header("Location:failed.php");
    }
?>