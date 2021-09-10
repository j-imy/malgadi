<?php 
session_start();
if(isset($_SESSION['adminemail']) && isset($_SESSION['adminpassword'])){
	if(!empty($_SESSION['adminemail']) && !empty($_SESSION['adminpassword']) && ($_SESSION['adminemail'] == "vashishthchaudhary48@gmail.com") && ($_SESSION['adminpassword'] == "Vasu@121")){

		if(isset($_POST['id']) && !empty($_POST['id'])){

			$conn = new mysqli('localhost', 'root', '', 'test');
			if($conn->connect_error){
			  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
			}
			$sno = $_POST['id'];
			$table_name = "malgadi";


			$sql = "SELECT * FROM `$table_name` WHERE `id` = $sno;";
			$result = mysqli_query( $conn , $sql);
				 if( !$result )
        			die( "selection from $table_name was not successfull" );
        	$row=mysqli_fetch_assoc($result);
        	$fname = $row['first_name'];
        	$lname = $row['last_name'];
        	$email = $row['email'];
        	$password = $row['password'];

        	$sql = "INSERT INTO `malgadi_deleted`(`id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL,'$fname','$lname','$email','$password');";
        	$result = mysqli_query( $conn , $sql);
				 if( !$result )
        			die( "deletion from malgadi-deleted was not successfull" );


			$sql = "DELETE FROM `$table_name` WHERE `id` = $sno;";
			$result = mysqli_query( $conn , $sql);
			    if( !$result )
        			die( "deletion from $table_name was not successfull" );
        		else
        			echo "Deletion Was Successful";

		    $sql  = "SET @autoid :=0;";

		    $result = mysqli_query( $conn , $sql );

		    if( !$result )
		        die( "in first line" );

		    $sql = "UPDATE $table_name SET `id` = @autoid :=(@autoid+1);";

		    $result = mysqli_query( $conn , $sql );

		    if( !$result )
		        die( "second was not successfull" );

		    $sql = "ALTER TABLE $table_name AUTO_INCREMENT = 1;";

		    $result = mysqli_query( $conn , $sql );

		    if( !$result )
		        die( "third was not successfull" );









		}
		else{
			echo "Something Went Wrong";
		}

	}
	else{
		echo "Something Went Wrong";
	}
}
else{
	echo "Something Went Wrong";
}



 ?>