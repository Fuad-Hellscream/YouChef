<?php
    include_once ('server.php');
	if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
?>