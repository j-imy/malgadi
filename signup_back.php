<?php 

        $secretKey = '6Lf4tAwbAAAAAAj91RKjOSQ6Sy-DqANXxdIhYdgb';
        $captcha = $_POST['g-recaptcha-response'];

        if(!$captcha){
          echo '<script type ="text/JavaScript">';  
			echo 'alert("Please fill recaptcha dialog box !")';  
			echo '</script>'; 
			echo "<h1><a href='index.php'>Home</a><h1>";
			exit(0);
          }

session_start();

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password'])) {
	if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	 	$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$_SESSION['given_username'] = $email = $_POST['email'];
		$_SESSION['given_password'] = $password = $_POST['password'];

		  // define('DB_SERVER', 'localhost');
		  // define('DB_USERNAME', 'root');
		  // define('DB_PASSWORD', '');
		  // define('DB_NAME','test');
		  // $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
		include 'config.php';

		  if($conn === false){
		  	echo "<h1><a href='index.php'>Home</a><h1>";
		    die("ERROR: Could not connect. " . mysqli_connect_error());}

		$sql = "INSERT INTO `malgadi`(`id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL,'$first_name','$last_name','$email','$password');";

		$result = mysqli_query( $conn , $sql );
              if( !$result ){
             echo mysqli_error($conn);
             echo "<h1><a href='index.php'>Home</a><h1>";
             exit("error");
         	 }
         	 else{
         	 	header("Location: user_page.php"); 
         	 }

        

	}
	else{
		header("Location: error.php"); 
    	exit();
	}
}
else{
	header("Location: error.php"); 
    exit();
}

 ?>