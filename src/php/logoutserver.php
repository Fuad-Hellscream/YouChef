<?php
    //TASK LIST:
    //Gender variable does not work!
	include_once ('server.php');
	if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

	if(isset($_GET["logout"])){
        session_destroy();
        unset($_SESSION['lastname']);
        unset($_SESSION['email']);
        unset($_SESSION['Discount']);

        header('location: index.php');
    }
		
	
?>		