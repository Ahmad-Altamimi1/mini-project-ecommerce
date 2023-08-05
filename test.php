<?php 
session_start();
if ( $_SESSION["username"]=="Ahmad" &&$_SESSION["password"]==272526) {
   
    header("Location: pro.php");
}else{
header("Location: login.php");
}


?>