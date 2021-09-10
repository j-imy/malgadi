<?php

session_start();

if(isset($_POST['lpassword']) && isset($_POST['lemail'])){

	if(!empty($_POST['lpassword']) && !empty($_POST['lemail'])){

		$_SESSION['given_username'] = $_POST['lemail'];
		$_SESSION['given_password'] = $_POST['lpassword'];
		header("Location: user_page.php");
	}
	else{

		header("Location: error.php"); 
		exit(0);		
	}
}

else if(isset($_POST['adminemail']) && isset($_POST['adminpassword'])){

	if(!empty($_POST['adminemail']) && !empty($_POST['adminpassword'])){

		$_SESSION['adminemail'] = $_POST['adminemail'];
		$_SESSION['adminpassword'] = $_POST['adminpassword'];
		echo "hello";
		header("Location: admin_page.php");
	}
	else{

		header("Location: error.php"); 
		exit(0);
	}
}

else{

	header("Location: error.php"); 
	exit(0);
}

 ?>