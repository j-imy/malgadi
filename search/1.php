<?php
session_start();

if(isset($_SESSION['adminemail']) && isset($_SESSION['adminpassword'])){
	if(!empty($_SESSION['adminemail']) && !empty($_SESSION['adminpassword']) && ($_SESSION['adminemail'] == "vashishthchaudhary48@gmail.com") && ($_SESSION['adminpassword'] == "Vasu@121")){
if(isset($_POST['sear'])){
	if(!empty($_POST['sear'])){
		$conn = new mysqli('localhost', 'root', '', 'test');
		if($conn->connect_error){
		  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
		}

		$search = $_POST['sear'];
		// echo $search;
		$sql = "SELECT * FROM `malgadi`";
		$result = mysqli_query( $conn , $sql);
		if( !$result )
		            die( "selection of table is not sucess" );


			$i = 0;	
			$fname = "";
            while( $row=mysqli_fetch_assoc($result) )
            {
            	if($row["first_name"] == "$search" || $row["last_name"] == "$search"){
            		if($i == 0){
            			echo   "<div class='container'><table class='striped responsive-table'>
                                <tbody><tr><th>Id</th><th>First_Name</th><th>Last_Name</th><th>Email</th><th>Action</th></tr>";
            		}
            		$i++;
	                $fname = $row["first_name"];
	                $lname = $row["last_name"];
	                $email_id = $row['email'];
	                $id = $row['id'];
	                echo "<tr>
	                        <td>$id</td>
	                        <td>$fname</td>
	                        <td>$lname</td>
	                        <td>$email_id</td>";

	                echo "<td><button class='btn red' value=$id onclick='delete1(this.value)'>Delete</button></td></tr>";
            	}
            }
            if(!empty($fname)){
            	echo "</tbody></table></div>";
            }
	}
}

if(isset($_POST['searemail'])){
	if(!empty($_POST['searemail'])){
		$conn = new mysqli('localhost', 'root', '', 'test');
		if($conn->connect_error){
		  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
		}

		$search = $_POST['searemail'];
		// echo $search;
		$sql = "SELECT * FROM `malgadi`";
		$result = mysqli_query( $conn , $sql);
		if( !$result )
		            die( "selection of table is not sucess" );


			$i = 0;	
			$fname = "";
            while( $row=mysqli_fetch_assoc($result) )
            {
            	if($row["email"] == "$search"){
            		if($i == 0){
            			echo   "<div class='container'><table class='striped responsive-table'>
                                <tbody><tr><th>Id</th><th>First_Name</th><th>Last_Name</th><th>Email</th><th>Action</th></tr>";
            		}
            		$i++;
	                $fname = $row["first_name"];
	                $lname = $row["last_name"];
	                $email_id = $row['email'];
	                $id = $row['id'];
	                echo "<tr>
	                        <td>$id</td>
	                        <td>$fname</td>
	                        <td>$lname</td>
	                        <td>$email_id</td>";

	                echo "<td><button class='btn red' value=$id onclick='delete1(this.value)'>Delete</button></td></tr>";
            	}
            }
            if(!empty($fname)){
            	echo "</tbody></table></div>";
            }
	}
}


if(isset($_POST['searall'])){
	if(empty($_POST['searall'])){
		$conn = new mysqli('localhost', 'root', '', 'test');
		if($conn->connect_error){
		  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
		}

		$search = $_POST['searall'];
		// echo $search;
		$sql = "SELECT * FROM `malgadi`";
		$result = mysqli_query( $conn , $sql);
		if( !$result )
		            die( "selection of table is not sucess" );


			$i = 0;	
			$fname = "";
            while( $row=mysqli_fetch_assoc($result) )
            {
            		if($i == 0){
            			echo   "<div class='container'>
            			<table class='striped responsive-table'>
                                <thead><tr><th>Id</th><th>First_Name</th><th>Last_Name</th><th>Email</th><th>Action</th></tr></thead><tbody id='myTable1'>";
            		}

            		$i++;
	                $fname = $row["first_name"];
	                $lname = $row["last_name"];
	                $email_id = $row['email'];
	                $id = $row['id'];
	                echo "<tr>
	                        <td>$id</td>
	                        <td>$fname</td>
	                        <td>$lname</td>
	                        <td>$email_id</td>";

	                echo "<td><button class='btn red' value=$id onclick='delete1(this.value)'>Delete</button></td></tr>";
            	
            }
            if(!empty($fname))
            	echo "</tbody></table></div>";
	}
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