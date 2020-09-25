<?php 
require "includes/header.php";
?>

<main>

    <?php
    if (isset($_SESSION['username'])) {
    	include "html/profile.html";
    } 
    else {
    	header("Location: ../login.php");
    	exit();
    }
    ?> 
      
</main>