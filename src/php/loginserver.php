<?php
    //TASK LIST:
    //Gender variable does not work!
	include_once ('server.php');
	if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
	
	

	

	global $email;
    global $password;
    $errors = array();
	
	
    
    if (isset($_POST['login'])) {

        //receiving all input values from the form
        $email = $_POST['email'];
        $password = $_POST['pass'];
        
        //ensure that form fields are filled properly
        if(empty($email)){
            array_push($errors, "Email is required");
        }
        if(empty($password)){
            array_push($errors, "Password is required");
        }

        if(count($errors) == 0){
            $password = md5($password); //encrypt password before comparing with that of database
            $query = "SELECT * FROM users WHERE Email = '$email' AND PasswordEnc = '$password'";
			$result = connect("youchef", $query);
            if(mysqli_num_rows($result) == 1) {
                //log user in
                $row = mysqli_fetch_array($result);
                $_SESSION['email'] = $email;
                $_SESSION['Discount'] = 0;
                $_SESSION['lastname'] = $row['LastName'];
                $_SESSION['usertype'] = $row['UserType'];
            } else{
                array_push($errors, "Wrong username/password combination");
                echo "Wrong username/password combination";
                // echo '<script language="javascript">';
                // echo 'alert("Email/Password was entered incorrectly")';
                // echo '</script>';
            }
        }
    }
		
	
?>		