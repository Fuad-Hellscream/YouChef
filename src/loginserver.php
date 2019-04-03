<?php
	
	include_once ('server.php');
	
	

	
	
	global $prflid;
	global $name;
	global $email;
	global $password;
	global $birth;
	global $gender;
	global $uni_id;
	global $uni_name;
	global $acc_type;
	
	
	
	
	
	
	// User log in check
	
	if (isset($_GET['login']))
	{
		
		
		
		// receive all input values from the form
		
		$email = $_GET['email'];
		
		
		
		
		
		
		// form validation: ensure that the form is correctly filled ...
		// by adding (array_push()) corresponding error onto $errors array
		
		
		
		
		
		// first check the database to make sure
		// a user does  exist with the  user id and password
		
		
		$query = "INSERT INTO test VALUES('$email')";
		
		$results=connect('youchef',$query);
		
		
		
		
		
	}
		
	
?>


<html>
	<head>
	</head>
	<body>
		
		
		
		<script type="text/javascript">
			
			function addpost()
			{
				document.querySelector('.bg-modal').style.display = "flex";
				
			}
			function closepost()
			{
				document.querySelector('.bg-modal').style.display = "none";
			}
			function rate()
			{
				document.querySelector('.bg-modal2').style.display = "flex";
				
			}
		function closepostc()
		{
		
		document.querySelector('.bg-modal2').style.display = "none";
		windows.location="education.php";
		}
		function refresh()
		{
		windows.location="education.php";
		
		}
		
		
		
		</script>
		
		
		
		</body>
		</html>
		
		
		
		
		
		
		
				