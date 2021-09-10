<?php 
session_start();

if(isset($_SESSION['adminemail']) && isset($_SESSION['adminpassword'])){

	if(!empty($_SESSION['adminemail']) && !empty($_SESSION['adminpassword']) && ($_SESSION['adminemail'] == "vashishthchaudhary48@gmail.com") && ($_SESSION['adminpassword'] == "Vasu@121")){

		
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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vashishth | Admin</title>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Vashishth-Community</title>
      <link rel="icon" type="image/png" href="img/logo.png"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        form.example input[type=text] {
          padding: 10px;
          font-size: 17px;
          border: 1px solid grey;
          float: left;
          width: 80%;
          background: #f1f1f1;
        }
      </style>
</head>
<body>
    <nav>
      <div class="nav-wrapper blue">
        <a href="index.php" class="brand-logo">
      <img src="img/logo.png" width="70">
    </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <a href="admin_page.php" class="brand-logo center hide-on-med-and-down">Vashishth | Admin-Panel</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="admin_page.php" class="waves-effect">Home</a></li>
          <li><a href="logout.php" class="waves-effect">Logout</a></li>
        </ul>
        <ul class="side-nav blue lighter" id="mobile-demo">
          <li><a href="admin_page.php" class="white-text waves-effect">Home</a></li>
          <li><a href="logout.php" class="white-text waves-effect">Logout</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
    	<center>
    		<h3>Welcome To Admin Panel</h3><br><br>
   		<br>

		   <div class="row">
		    <div class="col s12">
		      <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
		        <li class="tab col s3"><a class="active"  href="#11">Home</a></li>
		        <li class="tab col s3"><a href="#21">Show & Delete</a></li>
		        <li class="tab col s3"><a href="#41">Deleted Members</a></li>
		      </ul>
		      <br><br>
		    </div>

		    <div id="11" class="col s12"><h5><i class="material-icons">login</i>&nbsp;Go to the Show & Delete Section to see the details of members</h5><br>
		    		<h5><i class="material-icons">login</i>&nbsp;Go to the Show & Delete Section to delete the members</h5><br>
            <h5><i class="material-icons">login</i>&nbsp;Go to the Deleted Member Section to see deleted members</h5>
          </div>
		    <div id="21" class="col s12">
           <table><tbody><tr>
            <td><input type="text" placeholder="Search By Name" name="search11" id="search11"></td>
            <td><button class="btn blue" id="search11c">Search</button></td>
          </tr></tbody></table>
          <table><tbody><tr>
            <td><input type="text" placeholder="Search By Email" name="search22" id="search22"></td>
            <td><button class="btn blue" id="search22c">Search</button></td>
          </tr></tbody></table>
          <button class="btn btn-large blue" id="showall">Show All</button>
          <input id='myInput1' style="visibility:hidden;" type='text' placeholder='Search anything with any property..'>
        </div>
		    <div id="41" class="col s12">
          <table><tbody><tr>
            <td><input type="text" placeholder="Search Deleted Member By Name" name="search11neg" id="search11neg"></td>
            <td><button class="btn red" id="search11negc">Search</button></td>
          </tr></tbody></table>
          <table><tbody><tr>
            <td><input type="text" placeholder="Search Deleted Member By Email" name="search22neg" id="search22neg"></td>
            <td><button class="btn red" id="search22negc">Search</button></td>
          </tr></tbody></table>

          <button class="btn btn-large red" id="showallneg">Show All</button>
          <input id='myInput2' style="visibility:hidden;" type='text' placeholder='Search anything by any property..'>
        </div>
		  </div>
    </center>
    </div>

    <div id="data">
      <br><br><br><br><br><br>
    </div>
    <div id="data1">
      <br><br><br><br><br><br>
    </div><br>

<script type="text/javascript">
  var search11 = document.querySelector('#search11');
  var search11c = document.querySelector('#search11c');
  var search22 = document.querySelector('#search22');
  var search22c = document.querySelector('#search22c');
  var showall = document.querySelector('#showall');
  search11c.addEventListener('click',(event) => {
    $.ajax({
      url: '/malgadi/search/1.php',
      type: "post",
      data: {
        sear: search11.value,
      },
      success: function(html){
        var ajdisplay = document.getElementById('data');
        ajdisplay.innerHTML = html;
        $('#myInput1').css('visibility','hidden');
        if(ajdisplay.innerHTML===""){
          alert('Data Not Found');
        }
      }
    });
  });

  search22c.addEventListener('click',(event) => {
    $.ajax({
      url: '/malgadi/search/1.php',
      type: "post",
      data: {
        searemail: search22.value,
      },
      success: function(html){
        var ajdisplay = document.getElementById('data');
        ajdisplay.innerHTML = html;
        $('#myInput1').css('visibility','hidden');
        if(ajdisplay.innerHTML===""){
          alert('Data Not Found');
        }
      }
    });
  });


  showall.addEventListener('click',(event) => {
    $.ajax({
      url: '/malgadi/search/1.php',
      type: "post",
      data: {
        searall: showall.value,
      },
      success: function(html){
        var ajdisplay = document.getElementById('data');
        ajdisplay.innerHTML = html;
        if(ajdisplay.innerHTML===""){
          alert('Data Not Found');
        }
        else{
          $('#myInput1').css('visibility','visible');
        }
      }
    });
  });



  var search11neg = document.querySelector('#search11neg');
  var search22neg = document.querySelector('#search22neg');
  var search11negc = document.querySelector('#search11negc');
  var search22negc = document.querySelector('#search22negc');
  var showallneg = document.querySelector('#showallneg');
  search11negc.addEventListener('click',(event) => {
    $.ajax({
      url: '/malgadi/search/2.php',
      type: "post",
      data: {
        sear: search11neg.value,
      },
      success: function(html){
        var ajdisplay = document.getElementById('data');
        ajdisplay.innerHTML = html;
        $('#myInput2').css('visibility','hidden');
        if(ajdisplay.innerHTML===""){
          alert('Data Not Found');
        }
      }
    });
  });

  search22negc.addEventListener('click',(event) => {
    $.ajax({
      url: '/malgadi/search/2.php',
      type: "post",
      data: {
        searemail: search22neg.value,
      },
      success: function(html){
        var ajdisplay = document.getElementById('data');
        ajdisplay.innerHTML = html;
        $('#myInput2').css('visibility','hidden');
        if(ajdisplay.innerHTML===""){
          alert('Data Not Found');
        }
      }
    });
  });


  showallneg.addEventListener('click',(event) => {
    $.ajax({
      url: '/malgadi/search/2.php',
      type: "post",
      data: {
        searall: showallneg.value,
      },
      success: function(html){
        var ajdisplay = document.getElementById('data');
        ajdisplay.innerHTML = html;
        if(ajdisplay.innerHTML===""){
          alert('Data Not Found');
        }
        else{
          $('#myInput2').css('visibility','visible');
        }
      }
    });
  });


function delete1(value){
  $.ajax({
    url: '/malgadi/search/delete.php',
    type: "post",
    data: {
      id: value,
    },
    success: function(html){
      var ajdisplay = document.getElementById('data');
      ajdisplay.innerHTML = html;
    }
  });
}

</script>

  <footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Vashishth Community</h5>
                <p class="grey-text text-lighten-4">Admin Panel | Community Handling</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Important Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright by Vashishth Community
            <a class="grey-text text-lighten-4 right" href="#!">All Rights Reserved</a>
            </div>
          </div>
        </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
    	$(".button-collapse").sideNav();
    </script>
    <script>
$(document).ready(function(){
  $("#myInput1").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
$(document).ready(function(){
  $("#myInput2").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable2 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jque
ry.min.js"></script>
</body>
</html>