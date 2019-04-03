<?php
    error_reporting(0);
    session_start();

    //initializing variables
    $firstname = "";
    $lastname = "";
    $email = "";
    $contact = "";
    $address = "";
    $gender = "";
    $birthdate= "";
    $errors = array();
    
    
    //connect to the database
    $db = mysqli_connect("localhost", "root", "", "youchef");

    
    //if the register button is clicked. "reg_user" in POST is the name of the button
    //that we set up in our html/php
    if (isset($_POST['sign'])) {

        //receiving all input values from the form
        $firstname = mysqli_real_escape_string($db, $_POST['name']);
        $lastname = mysqli_real_escape_string($db, $_POST['last-name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['pass']);
        $password_2 = mysqli_real_escape_string($db, $_POST['conpass']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $birthdate = mysqli_real_escape_string($db, $_POST['date']);
        $contact = mysqli_real_escape_string($db, $_POST['contact']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        

        
        //ensure that form fields are filled properly
        if(empty($firstname)){
            array_push($errors, "First name is required");
        }
        if(empty($lastname)){
            array_push($errors, "Last name is required");
        }
        if(empty($gender)){
            array_push($errors, "Gender is required");
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

        if($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }

        //Checking database for existing usernames
        $user_check_query = "SELECT * FROM users WHERE Contact='$contact' OR Email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

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
            $uploadOk=1;
            if($uploadOk!=0){
                $sql = "INSERT INTO users (FirstName, LastName, Email, PasswordEnc, Gender, DateOfBirth, Contact, Address, Points, UserType)
            VALUES('$firstname', '$lastname', '$email', '$password', '$gender', '$birthdate', '$contact', '$address', 50, 'regular')";
            } else {
                $sql = "INSERT INTO users (FirstName, LastName, Email, PasswordEnc, Gender, DateOfBirth, Contact, Address, Points, UserType, Picture)
            VALUES('$firstname', '$lastname', '$email', '$password', '$gender', '$birthdate', '$contact', '$address', 50, 'regular', '$filename')";
            }
            move_uploaded_file($filetmpname, $folder.$filename);
            mysqli_query($db, $sql); //sending string query to mysql database

            $_SESSION['email'] = $email;
            $_SESSION['Discount'] = 0;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['success'] = "You are now logged in";
            header('location: YouChefLoggedInHome.php'); //redirect user to homepage
        }
    }
    
    //Log user in from login page
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($db, $_POST['id']);
        $password = mysqli_real_escape_string($db, $_POST['pass']);
        
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
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 1) {
                //log user in
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email'] = $email;
                $_SESSION['Discount'] = 0;
                $_SESSION['lastname'] = $row['LastName'];
                $_SESSION['usertype'] = $row['UserType'];
  	            $_SESSION['success'] = "You are now logged in";
  	            header('location: index.php'); //redirect user to homepage
            } else{
                array_push($errors, "Wrong username/password combination");
                // header('location: Login.php');
            }
        }
    }

    //logout
    if(isset($_GET["logout"])){
        session_destroy();
        unset($_SESSION['lastname']);
        unset($_SESSION['email']);
        unset($_SESSION['Discount']);
        header("location: YouChefHome.php");
    }


    if(isset($_POST["recipe_submit"])){

        $filename = $_FILES['filetoupload']['name'];
        $filetmpname = $_FILES['filetoupload']['tmp_name'];
        $folder = 'RecipePictures/';

        $MealName = mysqli_real_escape_string($db, $_POST['MealName']);
        $Price = $_POST['Price'];
        $Difficulty = mysqli_real_escape_string($db, $_POST['Difficulty']);
        $Instruction = $_POST['Instruction'];
        $Calories = mysqli_real_escape_string($db, $_POST['Calories']);
        $NutritionalInfo = $_POST['NutritionalInfo'];
        $PromotionalDiscounts = mysqli_real_escape_string($db, $_POST['PromotionalDiscounts']);
        $Email = mysqli_real_escape_string($db, $_POST['SubmittedBy']);
        
        $uploadOk=0;
        
        //ensure that form fields are filled properly

        $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
        if($check !== false){
            $uploadOk=1;
        } else{
            $uploadOk=0;
        }

        if(empty($MealName)){
            array_push($errors, "Meal Name is required");
        }
        if(empty($Price)){
            array_push($errors, "Price is required");
        }
        if(empty($Difficulty)){
            array_push($errors, "Difficulty is required");
        }
        if(empty($Instruction)){
            array_push($errors, "Instruction is required");
        }
        if(empty($Calories)){
            array_push($errors, "Calories is required");
        }
        if(empty($NutritionalInfo)){
            array_push($errors, "NutritionalInfo is required");
        }
        if(empty($PromotionalDiscounts)){
            $PromotionalDiscounts=0;
        }
        if(empty($Email)){
            $Email = 'admin@g.com';
        }
        $recipe_check_query = "SELECT * FROM recipe WHERE MealName='$MealName'";
        $result = mysqli_query($db, $recipe_check_query);
        $recipe = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($recipe) > 0) {
            if ($recipe['MealName'] === $MealName) {
              array_push($errors, "Recipe already exists");
            }
          }
        
        //if there are no errors save users to database
        if(count($errors)===0){
            if($uploadOk === 1){
                $sql = "INSERT INTO recipe (MealName, Price, Difficulty, Instruction, Calories, NutritionalInfo, PromotionalDiscounts, Picture, Email)
                VALUES('$MealName', $Price, '$Difficulty', '$Instruction', $Calories, '$NutritionalInfo', $PromotionalDiscounts, '$filename', '$Email')";
                move_uploaded_file($filetmpname, $folder.$filename);
            } else {
                $sql = "INSERT INTO recipe (MealName, Price, Difficulty, Instruction, Calories, NutritionalInfo, PromotionalDiscounts, Email)
                VALUES('$MealName', $Price, '$Difficulty', '$Instruction', $Calories, '$NutritionalInfo', $PromotionalDiscounts, '$Email')";
            }


            $success = mysqli_query($db, $sql); //sending string query to mysql database
            $_SESSION['MealName']= $MealName;
            
            // header('location: AdminProfile.php');
            if($success){
                header('location: AddEquipments.php');
            } else {
                echo $MealName." ".$Price." ".$Difficulty."</br>". $Instruction."</br>".$Calories."</br>".$NutritionalInfo."</br>".$PromotionalDiscounts." ".$Email;
            }
        }
    }

    if(isset($_POST["update_submit"])){

        $filename = $_FILES['filetoupload']['name'];
        $filetmpname = $_FILES['filetoupload']['tmp_name'];
        $folder = 'RecipePictures/';

        $MealName = mysqli_real_escape_string($db, $_POST['MealName']);
        $Price = $_POST['Price'];
        $Difficulty = mysqli_real_escape_string($db, $_POST['Difficulty']);
        $Instruction = mysqli_real_escape_string($db, $_POST['Instruction']);
        $Calories = mysqli_real_escape_string($db, $_POST['Calories']);
        $NutritionalInfo = mysqli_real_escape_string($db, $_POST['NutritionalInfo']);
        $PromotionalDiscounts = mysqli_real_escape_string($db, $_POST['PromotionalDiscounts']);
        
        $recipe_find_query = "SELECT * FROM recipe WHERE MealName='$MealName'";
        $result = mysqli_query($db, $recipe_find_query);
        $recipe = mysqli_fetch_assoc($result);
        $uploadOk=1;

        $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
        if($check !== false){
            $uploadOk=1;
        } else{
            $uploadOk=0;
        }

        
        //ensure that form fields are filled properly
        if(empty($MealName)){
            array_push($errors, "Meal Name is required");
        }
        if(empty($Price)){
            $Price = $recipe["Price"];
        }
        if(empty($Difficulty)){
            $Difficulty = $recipe["Difficulty"];
        }
        if(empty($Instruction)){
            $Instruction = $recipe["Instruction"];
        }
        if(empty($Calories)){
            $Calories = $recipe["Calories"];
        }
        if(empty($NutritionalInfo)){
            $NutritionalInfo = $recipe["NutritionalInfo"];
        }
        if(empty($PromotionalDiscounts)){
            $PromotionalDiscounts = $recipe["PromotionalDiscounts"];
        }

        //if there are no errors save recipes to database
        if(count($errors)==0){
            if($uploadOk == 1){
                $sql = "UPDATE recipe SET Picture = '$filename', MealName = '$MealName', Price = $Price, Difficulty = '$Difficulty', Instruction = '$Instruction', Calories = $Calories, NutritionalInfo = '$NutritionalInfo', PromotionalDiscounts = $PromotionalDiscounts WHERE MealName = '$MealName'";
            } else {
                $sql = "UPDATE recipe SET MealName = '$MealName', Price = $Price, Difficulty = '$Difficulty', Instruction = '$Instruction', Calories = $Calories, NutritionalInfo = '$NutritionalInfo', PromotionalDiscounts = $PromotionalDiscounts WHERE MealName = '$MealName'";
            }
            $checker = mysqli_query($db, $sql); //sending string query to mysql database
            move_uploaded_file($filetmpname, $folder.$filename);
        }
        
        $_SESSION['MealName']=$MealName;
        if($checker){
            header('location: AddEquipments.php');
        } else {
            header('location: UpdateRecipes.php');
        }
    }

    if(isset($_POST["delete_submit"])){

        $MealName = mysqli_real_escape_string($db, $_POST['MealName']);

        $recipe_find_query = "SELECT * FROM recipe WHERE MealName='$MealName'";
        $result = mysqli_query($db, $recipe_find_query);
        $meal = mysqli_fetch_assoc($result);
        $MealID = $meal['MealID'];

        //ensure that form fields are filled properly
        if(empty($MealName)){
            array_push($errors, "Meal Name is required");
        }
        if(!$result){
            array_push($errors, "Meal not found!");
        }

        //if there are no errors save recipes to database
        
        if(count($errors)==0){
            $sql = "DELETE FROM ingredients WHERE MealID = '$MealID'";
            $checker = mysqli_query($db, $sql);

            $sql = "DELETE FROM equipment_recipe WHERE MealID = '$MealID'";
            $checker = mysqli_query($db, $sql);

            $sql = "DELETE FROM recipe WHERE MealID = '$MealID'";
            $checker = mysqli_query($db, $sql); //sending string query to mysql database
        }
        
        if($checker){
            header('location: AdminProfile.php');
        } else {
            header('location: DeleteRecipes.php');
        }
    }
?>
