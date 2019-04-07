<?php
    //TASK LIST:
    //Gender variable does not work!
	include_once ('server.php');
	if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
	
	

	
	global $firstname;
	global $lastname;
	global $email;
    global $password_1;
    global $password_2;
    global $gender;
    global $birthdate; 
	global $contact;
    global $address;
    global $user;
    $errors = array();
	
	
    
    if (isset($_POST['sign'])) {

        //receiving all input values from the form
        $firstname = $_POST['name'];
        $lastname = $_POST['last-name'];
        $email = $_POST['email'];
        $password_1 = $_POST['pass'];
        $password_2 = $_POST['conpass'];

        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }

        $birthdate = $_POST['date'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        

        
        //ensure that form fields are filled properly
        if(empty($firstname)){
            array_push($errors, "First name is required");
        }
        if(empty($lastname)){
            array_push($errors, "Last name is required");
        }
        if(empty($birthdate)){
            array_push($errors, "Birth date is required");
        }
        if(empty($contact)){
            array_push($errors, "Contact is required");
        }
        if(empty($address)){
            array_push($errors, "Address is required");
        }
        if(empty($email)){
            array_push($errors, "Email is required");
        }
        if(empty($password_1)){
            array_push($errors, "Password is required");
        }
        if(empty($password_2)){
            array_push($errors, "Password confirmation is required");
        }

        if($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }

        //Checking database for existing usernames
        $user_check_query = "SELECT * FROM users WHERE Contact='$contact' OR Email='$email' LIMIT 1";
        $result = connect("youchef", $user_check_query);
        $user = mysqli_fetch_array($result);

        if ($user) { // if user exists
            if ($user['Contact'] === $contact) {
              array_push($errors, "Contact Number already exists");
            }

            if ($user['Email'] === $email) {
              array_push($errors, "email already exists");
            }
          }
        //if there are no errors save users to database
        if(count($errors)==0){
            
            $password = md5($password_1); //encrypt password before storing in database (security)
            //LINE ADDED EXTRA TO AVOID IMAGE UPLOADING PROCEDURE
            //DATE_FORMAT('$birthdate', "%d/%m/%Y")
            $uploadOk=1;
            if($uploadOk!=0){
                $sql = "INSERT INTO users (FirstName, LastName, Email, PasswordEnc, Gender, DateOfBirth, Contact, Address, Points, UserType)
            VALUES('$firstname', '$lastname', '$email', '$password', '$gender', '$birthdate', '$contact', '$address', 50, 'regular')";
            } else {
                $sql = "INSERT INTO users (FirstName, LastName, Email, PasswordEnc, Gender, DateOfBirth, Contact, Address, Points, UserType, Picture)
            VALUES('$firstname', '$lastname', '$email', '$password', '$gender', '$birthdate', '$contact', '$address', 50, 'regular', '$filename')";
            }
            
            // $sql = "INSERT INTO users (FirstName, LastName, Email, PasswordEnc, Gender, DateOfBirth, Contact, Address, Points, UserType)
            // VALUES('Arpon', 'Chudury', 'arponraihan@gmail.com', 'arponmuah', 'arponmuah', '06/27/1995', '019123456789', 'Khamarbari', 50, 'regular')";
            $result = connect("youchef", $sql);

            $_SESSION['email'] = $email;
            $_SESSION['Discount'] = 0;
            $_SESSION['lastname'] = $lastname;
            // $_SESSION['success'] = "You are now logged in";
            // header('location: YouChefLoggedInHome.php'); //redirect user to homepage
        }
    }
		
	
?>		