<?php
    include_once ('server.php');
	if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // If search button has not been used or search was empty.
    $sql = "SELECT COUNT(*) AS max FROM readymeals";
    $result =  connect("youchef", $sql);
    $maxlist = mysqli_fetch_array($result);
    $Max = $maxlist['max'];

    $sql = "SELECT * FROM readymeals LIMIT 0, 48";
    $result = connect("youchef", $sql);

    $countResults = mysqli_num_rows($result);

    // while($countResults>0){
    //     $recipe = mysqli_fetch_array($result);
    //     // TAKE THIS SECTION INTO THE INDEX PAGE TO PRINT EACH ROW INDIVIDUALLY THERE
    //     $countResults--;
    // }
?>