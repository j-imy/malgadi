<?php

session_start();

function updater($fname,$lname){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "test";
            $conn = mysqli_connect( $servername , $username , $password , $database );
            
            if( !$conn )
                die( "something went to worng in our server" . mysqli_connect_error());
            $user_name1 = $_SESSION["given_username"];
            $password1 = $_SESSION["given_password"];

            $table_name = "malgadi";

            $sql = "SELECT * FROM `$table_name`";

            $result = mysqli_query( $conn , $sql );

            
            if( !$result )
                    die( "something went wrong" );

            while( $row=mysqli_fetch_assoc($result) )
            {
                if( $user_name1==$row["email"] && $row["password"]==$password1 )
                {
                    $_SESSION["check"] = "yes";
                    break;
                }
            }
            
    $id = '';
    $id = $row['id'];
    // Check connection   
    $sql = "UPDATE malgadi SET first_name='{$fname}' , last_name='{$lname}' WHERE id='{$id}'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    unset($_POST);
    echo '<meta http-equiv="refresh" content="0">';
}

function updater1($newmail){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "test";
            $conn = mysqli_connect( $servername , $username , $password , $database );
            
            if( !$conn )
                die( "something went to worng in our server" . mysqli_connect_error());
            $user_name1 = $_SESSION["given_username"];
            $password1 = $_SESSION["given_password"];


            $table_name = "malgadi";

            $sql = "SELECT * FROM `$table_name`";

            $result = mysqli_query( $conn , $sql );

            
            if( !$result )
                    die( "something went wrong" );

            while( $row=mysqli_fetch_assoc($result) )
            {
                if( $user_name1==$row["email"] && $row["password"]==$password1 )
                {
                    $_SESSION["check"] = "yes";
                    break;
                }
            } 
    $id = '';
    $id = $row['id'];
    // Check connection   
    $sql = "UPDATE malgadi SET email='{$newmail}'WHERE id='{$id}'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $_SESSION["given_username"] = $newmail;
    $conn->close();
    unset($_POST);
    echo '<meta http-equiv="refresh" content="0">';
}


function updater2($newpassword){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "test";
            $conn = mysqli_connect( $servername , $username , $password , $database );
            
            if( !$conn )
                die( "something went to worng in our server" . mysqli_connect_error());
            $user_name1 = $_SESSION["given_username"];
            $password1 = $_SESSION["given_password"];


            $table_name = "malgadi";

            $sql = "SELECT * FROM `$table_name`";

            $result = mysqli_query( $conn , $sql );

            
            if( !$result )
                    die( "something went wrong" );

            while( $row=mysqli_fetch_assoc($result) )
            {
                if( $user_name1==$row["email"] && $row["password"]==$password1 )
                {
                    $_SESSION["check"] = "yes";
                    break;
                }
            } 
    $id = '';
    $id = $row['id'];
    // Check connection   
    $sql = "UPDATE malgadi SET password='{$newpassword}'WHERE id='{$id}'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $_SESSION["given_password"] = $newpassword;
    $conn->close();
    unset($_POST);
    echo '<meta http-equiv="refresh" content="0">';
}

if(isset($_POST['newlname']) && isset($_POST['newfname'])){
    updater($_POST['newfname'],$_POST['newlname']);
  }
if(isset($_POST['newemail'])){
  updater1($_POST['newemail']);
}
if(isset($_POST['newpassword'])){
  updater2($_POST['newpassword']);
}

?>


<?php

	$user_name = "";
	$pass_word = "";

  if(isset($_SESSION["given_username"]) && isset($_SESSION['given_password'])){

    $user_name = $_SESSION["given_username"];
    $pass_word = $_SESSION["given_password"];
  }
  else{

    header("Location: error.php"); 
    exit(0);    
  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		User | Dashboard
	</title>
  <link rel="icon" type="image/png" href="img/logo.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
}
/* Nevigation Bar */
.topnav {
  overflow: hidden;
  background-color:black;
  width: 100%;
  z-index: 100;
}
.fa-home{
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.fa-bars{
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;  
}
.img-responsive {
    height: 30px;
    width: 30px;
    display: block;
    text-align: center;
    padding: 10px 16px;
    border-radius: 50%;
    float: right;
}
.topnava {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.buttonlogin{
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 12px 15px;
  text-decoration: none;
  font-size: 17px;
  border-color: black;
  border-radius: 10px;
  background-color: rgb(255, 153, 170,0.3);
}

.buttonlogin:hover{
  background-color: #ddd;
  color: blue;
}
.topnav a:hover {
  background-color: #ddd;
  color: blue;
}


.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

/* side navbar */
.content-container {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}
.content-container .left-nav-wrapper {
    width: 270px;
    height: 75vh;
    background: #dfdfdf;
    overflow-y: auto;
    
}
.content-container ul.navigation-panel {
    padding: 0px;
    margin: 0;
}
.content-container .left-nav-wrapper ul li {
    padding: 10px;
    list-style: none;
    border-bottom: 1px solid gray;
    background: #c1c1c1;
    cursor: pointer;
}

.content-container .left-nav-wrapper ul li.active {
    background: #efefef;
}
.content-container .right-content-wrapper {
    width: 100%;
    padding-left: 15px;
}

.content-container .right-content-wrapper p {
  margin-top: 0px
}
.content-container .right-content-wrapper .content {
  display: none;
}
.cross-btn {
    display: none;
}


@media (max-width: 560px) {
    .content-container {
        position: relative;
    }

    .cross-btn {
        display: block;
        padding: 5px 8px;
        cursor: pointer;
        width: 20px;
        height: 20px;
        background: #dfdfdf;
    }

    .content-container .left-nav-wrapper {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background: #fff0;
        position: absolute;
        left: -250px;
        transition: all 0.5s;
    }

    .content-container .right-content-wrapper {
        margin-left: 25px;
    }

    ul.navigation-panel {
        width: 100%;
        background: #dfdfdf;
        margin-top: 0;
    }
    #left-panel {
        left: -250px;
    }


}

.table{
        position: relative;
        width: auto;
}
/* cardcss */
.cardBox {
  float: left;
  font-size: 1em;
  margin: 1% 0 0 1%;
  perspective: 500px;
  transition: all 0.3s ease 0s;
  width: 20%;
  z-index: 1;
}

.cardBox:hover .card {
  transform: rotateY( 180deg);
}

.card {
  background: #222;
  cursor: default;
  height: 160px;
  transform-style: preserve-3d;
  transition: transform 0.4s ease 0s;
  width: 100%;
  -webkit-animation: giro 1s 1;
  animation: giro 1s 1;
  border-radius: 10px;
  z-index: 1;
}

.card p {
  margin-bottom: 1.8em;
}

.card .front,
.card .back {
  backface-visibility: hidden;
  box-sizing: border-box;
  color: white;
  display: block;
  font-size: 1.2em;
  height: 100%;
  padding: 0.8em;
  position: absolute;
  text-align: center;
  width: 100%;
  border-radius: 10px;
  z-index: 1;
}

.card .front strong {
  background: #fff;
  border-radius: 100%;
  color: #222;
  font-size: 1em;
  line-height: 30px;
  padding: 0 7px 4px 6px;
}

.card .back {
  transform: rotateY( 180deg);
}

.card .back a {
  padding: 0.3em 0.5em;
  background: #333;
  color: #fff;
  text-decoration: none;
  border-radius: 1px;
  font-size: 0.9em;
  transition: all 0.2s ease 0s;
}

.card .back a:hover {
  background: #fff;
  color: #333;
  text-shadow: 0 0 1px #333;
}

.cardBox:nth-child(1) .card .back {
  background: cornflowerblue;
}

.cardBox:nth-child(2) .card .back {
  background: orange;
}

.cardBox:nth-child(3) .card .back {
  background: yellowgreen;
}

.cardBox:nth-child(4) .card .back {
  background: tomato;
}

.cardBox:nth-child(5) .card .back {
  background: lightblue;
}

.cardBox:nth-child(6) .card .back {
  background: lightsalmon;
}

.cardBox:nth-child(7) .card .back {
  background: lightseagreen;
}

.cardBox:nth-child(8) .card .back {
  background: cornflowerblue;
}

.cardBox:nth-child(1) .card {
  -webkit-animation: giro 2.5s 1;
  animation: giro 2.5s 1;
}

.cardBox:nth-child(2) .card {
  -webkit-animation: giro 1.5s 1;
  animation: giro 1.5s 1;
}

.cardBox:nth-child(3) .card {
  -webkit-animation: giro 2s 1;
  animation: giro 2s 1;
}

.cardBox:nth-child(4) .card {
  -webkit-animation: giro 2.5s 1;
  animation: giro 2.5s 1;
}

.cardBox:nth-child(5) .card {
  -webkit-animation: giro 2.5s 1;
  animation: giro 2.5s 1;
}

.cardBox:nth-child(6) .card {
  -webkit-animation: giro 2s 1;
  animation: giro 2s 1;
}

.cardBox:nth-child(7) .card {
  -webkit-animation: giro 2.5s 1;
  animation: giro 2.5s 1;
}

.cardBox:nth-child(8) .card {
  -webkit-animation: giro 2.5s 1;
  animation: giro 2.5s 1;
}

@-webkit-keyframes giro {
  from {
    transform: rotateY( 180deg);
  }
  to {
    transform: rotateY( 0deg);
  }
}

@keyframes giro {
  from {
    transform: rotateY( 180deg);
  }
  to {
    transform: rotateY( 0deg);
  }
}

@media screen and (max-width: 767px) {
  .cardBox {
    margin-left: 2.2%;
    margin-top: 3%;
    width: 30%;
     font-size: 0.7em;
  }
  .card {
    height: 100px;
  }
  .cardBox:last-child {
    margin-bottom: 3%;
  }
}

@media screen and (max-width: 480px) {
  .cardBox {
    width: 26%;
     font-size: 0.6em;
  }
  .card {
    height: 100px;
  }
} 
.fa:hover {
    opacity: 0.7;
}

.fa-youtube {
  background: black;
  color: white;
}
.fa-instagram {
  background: black;
  color: white;
}   

.fa-linkedin {
  background: black;
  color: white;
}
.fa-github {
  background: black;
  color: white;
}
.fa-whatsapp {
  background: black;
  color: white;
}
.fa-skype {
  background: black;
  color: white;
}
.foot {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100px;
  background-color: black;
  color: white;
  text-align: center;
  display: block;
}
/**
 * Panels
 */
/*** General styles ***/
.panel {
  box-shadow: none;
}
.panel-heading {
  border-bottom: 0;
}
.panel-title {
  font-size: 17px;
}
.panel-title > small {
  font-size: .75em;
  color: #999999;
}
.panel-body *:first-child {
  margin-top: 0;
}
.panel-footer {
  border-top: 0;
}

.panel-default > .panel-heading {
    color: #333333;
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.07);
}

/**
 * Profile
 */
/*** Profile: Header  ***/
.profile__avatar {
  float: left;
  height: 100px;
  border-radius: 50%;
  width: 100px;
  font-family: Veranda;
}
@media (min-width: 768px) {
  .profile__avatar {
    width: 100px;
    height: 100px;
  }
}
.profile__avatar > img {
  width: 100%;
  height: auto;
}
.profile__header {
  overflow: hidden;
}
.profile__header p {
  margin: 20px 0;
}
/*** Profile: Table ***/
@media (min-width: 992px) {
  .profile__table tbody th {
    width: 200px;
  }
}
/*** Profile: Contact ***/
.profile__contact-btn {
  padding: 12px 20px;
  margin-bottom: 20px;
}
.profile__contact-hr {
  position: relative;
  border-color: rgba(0, 0, 0, 0.1);
  margin: 40px 0;
}

.profile__contact-info-item {
  margin-bottom: 30px;
}
.profile__contact-info-item:before,
.profile__contact-info-item:after {
  content: " ";
  display: table;
}
.profile__contact-info-item:after {
  clear: both;
}
.profile__contact-info-item:before,
.profile__contact-info-item:after {
  content: " ";
  display: table;
}
.profile__contact-info-item:after {
  clear: both;
}
.profile__contact-info-icon {
  float: left;
  font-size: 18px;
  color: #999999;
}
.profile__contact-info-body {
  overflow: hidden;
  padding-left: 20px;
  color: #999999;
}
.profile__contact-info-body a {
  color: #999999;
}
.profile__contact-info-body a:hover,
.profile__contact-info-body a:focus {
  color: #999999;
  text-decoration: none;
}
.profile__contact-info-heading {
  margin-top: 2px;
  margin-bottom: 5px;
  font-weight: 500;
  color: #999999;
}
@media screen and (max-width: 560px) {
  .panelhide {
    visibility: hidden;
    display: none;
    /* your any other css styles */
  }
}
.marq:hover{
  color: red;
  background-color: red;
}


/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */


.containerh {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 11; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
/* loader */
.content {
  display: flex;
  justify-content: center;
  align-items: center;
  width:100%;
  height:100%;
}
.loader-wrapper {
  width: 100%;
  height: 100%;
  position: fixed;
  z-index: 100;
  top: 0;
  left: 0;
  background-color: #242f3f;
  display:flex;
  justify-content: center;
  align-items: center;
  /* opacity: 0.95; */
}
.loader {
  display: inline-block;
  width: 50px;
  height: 50px;
  position: relative;
  border: 4px solid #Fff;
  animation: loader 2s infinite ease;
}
.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}

@keyframes loader {
  0% { transform: rotate(0deg); background-color: orange;}
  25% { transform: rotate(180deg); background-color:cornflowerblue;}
  50% { transform: rotate(180deg); background-color:yellowgreen;}
  75% { transform: rotate(360deg); background-color: tomato;}
  100% { transform: rotate(360deg); background-color:cornflowerblue}
}

@keyframes loader-inner {
  0% { height: 0%; background-color: orange;}
  25% { height: 0%; background-color:cornflowerblue}
  50% { height: 100%; background-color: orange;}
  75% { height: 100%; background-color: tomato;}
  100% { height: 0%; background-color:yellowgreen;}
}
</style>
</head>
<body>

<!-- <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>&nbsp;&nbsp;&nbsp;<span><font color="white" face="Lucida Console" style="font-size:4vw;"><b>Wait For A Moment</b></font></span>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
          $('.loader-wrapper').fadeToggle();
        }, 5000)
    </script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script> -->
<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "test";
            $conn = mysqli_connect( $servername , $username , $password , $database );
            
            if( !$conn )
                die( "something went to worng in our server" . mysqli_connect_error());


            $table_name = "malgadi";

            $sql = "SELECT * FROM `$table_name`";

            $result = mysqli_query( $conn , $sql );

            
            if( !$result )
                    die( "Something went wrong" );

            while( $row=mysqli_fetch_assoc($result) )
            {
                if( $user_name==$row["email"] && $row["password"]==$pass_word )
                {
                    $_SESSION["check"] = "yes";
                    break;
                }
            }
            
            
        if( !$row ){
        echo "<center>"."<font size='5' face='verdana'>Please Give True Username And Password</font>"."</center>"."<br>"."<br>";
        echo "<center>"."<font size='6'>"."<a href='index.php'>Home</a>"."</font>"."</center>";
        exit();

     }
?>

<body>
<div class="topnav" id="myTopnav">
  <a href="index.php"  class="fa fa-home"></a>
  <a onclick="window.print()" style="cursor: pointer;" class="topnava">Print</a>
  <a href="#services" class="topnava">About Us</a>
  <a href="logout.php" class="topnava">Logout</a>
  <a onclick="openPage(event, 'contentName3')" style="cursor: pointer;"><img class="img-responsive" src="img/logo.png"></img></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div><br>
<div class="content-container">
        <div id="left-panel" class="left-nav-wrapper" style="z-index:10;">
            <ul class="navigation-panel">
                <li class="nav-1 nav-tab active" onclick="openPage(event, 'contentName1')">Introduction</li>
                <li class="nav-2  nav-tab" onclick="openPage(event, 'contentName2')">Courses</li>
                <li class="nav-3 nav-tab" id="profile1" onclick="openPage(event, 'contentName3')">Profile Setting</li>
            </ul>
            <marquee direction="up" class=panelhide height="65%"><a href="#" style="text-decoration: none;" class="marq"><font size="4" face="calimbria" color="#000099"><img alt="" src="https://mysy.guj.nic.in/image/nunew_e0.gif" style="height: 20px; width: 30px; vertical-align: middle"><b>Subscribe my youtube channel</b></font></a></marquee>
            <div class="cross-btn" onclick="showNav()">
                <span>&nbsp;X</span>
            </div>
        </div>
        <div class="right-content-wrapper">
            <div id="contentName1" class="content right-pan-normal-mode" style="display: block">
              <div class="heading">
                    <h1>Hi...! <?php echo $row["first_name"] . " " . $row["last_name"];?></h1>
                </div>
              <p>
                Welcome..! Learner. I am happy to see you here. Now you are member of vashishth community. You can enjoy all the services from this dashboard.<br><br>
                Happy Learning...!
                </p>
                <br>
                <br>
                <h3>Best of luck for your future..!</h3>
            </div>
            <div id="contentName2" class="content right-pan-normal-mode">
                <div class="heading">
                    <h3>Courses</h3>
                </div>
                <p>
                      <div class="boxesContainer">
                        <div class="cardBox">
                          <div class="card">
                            <div class="front">
                              <h5>C Programming</h5>
                              <strong>&#x21bb;</strong>
                            </div>
                            <div class="back"><br>
                              <a href="https://www.cprogramming.com/" target="_blank">Goto C</a>
                            </div>
                          </div>
                        </div>
                        <div class="cardBox">
                          <div class="card">
                            <div class="front">
                              <h5>C++ Programming</h5>
                              <strong>&#x21bb;</strong>
                            </div>
                            <div class="back"><br>
                            <a href="https://www.w3schools.com/cpp/" target="_blank">Goto C++</a>
                            </div>
                          </div>
                        </div>
                        <div class="cardBox">
                          <div class="card">
                            <div class="front">
                              <h5>Python Programming</h5>
                              <strong>&#x21bb;</strong>
                            </div>
                            <div class="back"><br>
                              <a href="https://www.w3schools.com/python/" target="_blank">Goto Python</a>
                            </div>
                          </div>
                        </div>
                        <div class="cardBox">
                          <div class="card">
                            <div class="front">
                              <h5>C# Programming</h5>
                              <strong>&#x21bb;</strong>
                            </div>
                            <div class="back"><br>
                              <a href="https://www.w3schools.com/cs/" target="_blank">Goto C#</a>
                            </div>
                          </div>
                        </div>
                        <div class="cardBox">
                          <div class="card">
                            <div class="front">
                              <h5>Web Design With HTML</h5>
                              <strong>&#x21bb;</strong>
                            </div>
                            <div class="back"><br>
                              <a href="https://www.w3schools.com/html/" target="_blank">Goto HTML</a>
                            </div>
                          </div>
                        </div>
                        <div class="cardBox">
                          <div class="card">
                            <div class="front">
                              <h5>CSS</h5>
                              <strong>&#x21bb;</strong>
                            </div>
                            <div class="back"><br>
                              <a href="https://www.w3schools.com/css/" target="_blank">Goto CSS</a>
                            </div>
                          </div>
                        </div>
                        <div class="cardBox">
                          <div class="card">
                            <div class="front">
                              <h5>Javascript</h5>
                              <strong>&#x21bb;</strong>
                            </div>
                            <div class="back"><br>
                              <a href="https://www.w3schools.com/js/DEFAULT.asp" target="_blank">Goto JS</a>
                            </div>
                          </div>
                        </div>
                        <div class="cardBox">
                          <div class="card">
                            <div class="front">
                              <h5>SQL</h5>
                              <strong>&#x21bb;</strong>
                            </div>
                            <div class="back"><br>
                              <a href="https://www.learnsqlonline.org/" target="_blank">Goto SQL</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </p>
            </div>
            <div id="contentName3" class="content right-pan-normal-mode">
                <p>
                      <div class="container">
                      <div class="row">
                            <div class="col-xs-12 col-sm-9">
                              
                              <!-- User profile -->

                              
                                  <div>
                                    <h2><?php echo $row["first_name"] . " " . $row["last_name"];?>&nbsp;<a onclick="document.getElementById('id02').style.display='block'" style="cursor: pointer;"><i class="fa fa-edit" style="color: gray;"></i></a></h2>
                                  </div>
                              <br><br><br><br>  

                              <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">Change Email&nbsp;<a href="#"><i class="fa fa-edit" style="color: gray;" onclick="document.getElementById('id03').style.display='block'" style="cursor: pointer;"></i></a></h4>
                                </div>
                                <table>
                                    <tbody>
                                          <tr>
                                            <div class="profile__contact-info-item">
                                              <div class="profile__contact-info-icon">
                                                <i class="fa fa-envelope-square"></i>
                                              </div>
                                              <div class="profile__contact-info-body">
                                                <h6 class="profile__contact-info-heading">E-mail address</h6>
                                                <a href="mailto:<?php echo $row["email"];?>"><h6 class="profile__contact-info-heading">
                                                  <?php echo $row["email"];?>
                                                </h6></a>
                                              </div>
                                            </div>
                                            </tr>
                                         </tbody>
                                       </table>
                              <div class="panel-heading">
                                <h4 class="panel-title">Change Password&nbsp;<a href="#"><i class="fa fa-edit" style="color: gray;" onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;"></i></a></h4>
                              </div>
                              <table>
                                    <tbody>
                                          <tr>
                                            <div class="profile__contact-info-item">
                                              <div class="profile__contact-info-icon">
                                                <i class="fa fa-user"></i>
                                              </div>
                                              <div class="profile__contact-info-body">
                                                <h6 class="profile__contact-info-heading">Password</h6>
                                                <h6 class="profile__contact-info-heading">
                                                  <?php echo $row["password"];?>
                                                </h6>
                                              </div>
                                            </div>
                                            </tr>
                                         </tbody>
                                       </table>
                                </div>
                              </div>
                          </div>
                </p>


  <div id="id02" class="modal">
  <form class="modal-content animate" action="" method="post">
    <h2><center>ProfileInfo Edit</center></h2>
    <div class="containerh">
      <label for="newname"><b>Enter New First_Name</b></label>
      <input type="text" placeholder="Enter Your New Name" maxlength="20" name="newfname" required>
      <label for="newname"><b>Enter New Last_Name</b></label>
      <input type="text" placeholder="Enter Your New Name" maxlength="20" name="newlname" required>
      <button type="submit">Submit</button>
    </div>

    <div class="containerh" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<div id="id03" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <h2><center>Email Edit</center></h2>
    <div class="containerh">
      <label for="newemail"><b>Enter New Email</b></label>
      <input type="email" placeholder="Enter New Email" name="newemail" required>
      <button type="submit">Submit</button>
    </div>
    <div class="containerh" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <h2><center>Password Edit</center></h2>
    <div class="containerh">
      <label for="newemail"><b>Enter New Password</b></label>
      <input type="password" placeholder="Enter New Password" name="newpassword" required>
      <button type="submit">Submit</button>
    </div>
    <div class="containerh" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
    </div><br>

<footer class="foot">
<center id="contact">
      <a href="https://www.youtube.com/channel/UCT_aAHVTwIPvW3mEUfHbB7g" target="_blank" style="padding: 10px;   font-size: 14px;
  text-decoration: none;
  border-radius: 50%;" class="fa fa-youtube"></a>
        <a href="https://www.instagram.com/vashishthchaudhary/" target="_blank" class="fa fa-instagram" style="padding: 10px;   font-size: 14px;
  text-decoration: none;
  border-radius: 50%;" ></a>
        <a href="https://github.com/vasu-1" target="_blank" class="fa fa-github" style="padding:10px;   font-size: 18px;
  text-decoration: none;
  border-radius: 50%;" ></a>
        <a href="https://www.linkedin.com/in/vashishth-patel-312a52204" target="_blank" class="fa fa-linkedin" style="padding: 10px;   font-size: 14px;
  text-decoration: none;
  border-radius: 50%;" ></a>
        <a href="https://wa.link/u7w477" class="fa fa-whatsapp" target="_blank" style="padding: 10px;   font-size: 18px;
  text-decoration: none;
  border-radius: 50%;" ></a>
        <a href="mailto:Vashishthchaudhary48@outlook.com" target="_blank" class="fa fa-skype" style="padding: 10px;   font-size: 14px;
  text-decoration: none;
  border-radius: 50%;" ></a>
  <font color=gray><h6>Copyright &#169; 2021 by Vashishth Patel.<br>
  All Rights Reserved.</h6></font>
</center>
</footer>
<script type="text/javascript">
  function openPage(evt, pageName) {
    var i, pagecontent, tablinks;
    pagecontent = document.getElementsByClassName("right-pan-normal-mode");
    for (i = 0; i < pagecontent.length; i++) {
        pagecontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("nav-tab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(pageName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Left Pane Active/Hide Nav on Mobile
function showNav() {
    var navCss = document.getElementById("left-panel");
    if (navCss.style.left === "0px") {
        navCss.style.left = "-250px";
    } else {
        navCss.style.left = "0px";
    }
}
</script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



</body>
</html>