<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet"/> -->
      <title>Vashishth-Community</title>
      <link rel="icon" type="image/png" href="img/logo.png"/>
      <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">

      </style>
    </head>
<body>
  <!-- navbar from nav.html -->
  <?php include 'nav.php';?>
<br><br>


<div class="container">
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="img/1.png" alt="">
              <div class="caption center-align">
                <h3 class="black-text">Join Community</h3>
                <h5 class="light black-text text-lighten-3">Take best from best</h5>
              </div>
            </li>
            <li>
              <img src="img/2.png" alt="">
              <div class="caption left-align">
                <h3 class="black-text">Exploring these tools</h3>
                <h5 class="light black-text text-lighten-3">All stuff in one place</h5>
              </div>
            </li>
          </ul>
        </div>
      </div>

<br><br><br><br>
<div class="container">
  <ul class="collection with-header">
        <li class="collection-header"><h4>Recent Members</h4></li>
  <?php

  include 'config.php';

  if( !$conn )
        die( "something went to worng in our server" . mysqli_connect_error());

      $table_name = "malgadi";

            $sql = "SELECT * FROM `$table_name`";

            $result = mysqli_query( $conn , $sql );

            
            if( !$result )
                    die( "Something went wrong" );


                  $i = 0;
             while( $row=mysqli_fetch_assoc($result) )
            { 
                if($i == 3)
                  break;
                echo "<li class='collection-item'><div>" . $row['first_name'] . " " . $row['last_name'] . "<a href='mailto:" . $row['email'] . "' class='secondary-content'><i class='material-icons'>send</i></a></div></li>";
                $i ++;
            }


   ?>
      </ul>
</div>          

<br><br>

<div class="container"><br>
 <h3 class="center-align">Work Sample</h3><br>
      <div class="video-container">
        <iframe width="853" height="480" src="//www.youtube.com/embed/-1DbdPvNSBc" frameborder="0" allowfullscreen></iframe>
      </div>

</div> <br><br><br>

  <footer class="page-footer grey">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Vashishth Community</h5>
                <p class="grey-text text-lighten-4">Please register or login yourself to get all services. The content you will find is genuine and in very cristel clear labguage.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Important Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="#modal2">Signup</a></li>
                  <li><a class="grey-text text-lighten-3" href="#modal1">Login</a></li>
                  <li><a class="grey-text text-lighten-3" href="#about">About</a></li>
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


        <!-- modals for register and logins -->

        <div id="modal1" class="modal scale-in">
          <div class="modal-content">
            <div class="right"><img src="img/logo.png" width="90"></div>
            <h4><i class="material-icons">login</i>&nbsp;Login To Vashishth Community</h4><br>
            <div class="row">
              <form class="col s12" action="login_back.php" method="post">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" name="lemail" type="email" class="validate" required>
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="password" name="lpassword" type="password" class="validate" required>
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="right"><a href="forgot.php">Forgot Passworord ?</a></div>
                <button type="submit" class="btn btn-large blue">Login</button>
              </form>
            </div>
          </div>
        </div>


        <div id="modal3" class="modal scale-in">
          <div class="modal-content">
            <div class="right"><img src="img/logo.png" width="90"></div>
            <h4><i class="material-icons">login</i>&nbsp;Admin Login</h4><br>
            <div class="row">
              <form class="col s12" action="login_back.php" method="post">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" name="adminemail" type="email" class="validate" required>
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="password" name="adminpassword" type="password" class="validate" required>
                    <label for="password">Password</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-large blue">Login</button>
              </form>
            </div>
          </div>
        </div>


        <div id="modal2" class="modal scale-in">
          <div class="modal-content">
            <div class="right"><img src="img/logo.png" width="90"></div>
            <h4><i class="material-icons">group_add</i>&nbsp;Signup To Vashishth Community</h4><br>
            <div class="row">
              <form class="col s12" action="signup_back.php" method="post">
                <div class="row">
                  <div class="input-field col s6">
                    <input id="first_name" name="first_name" type="text" class="validate" required>
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="last_name" name="last_name" type="text" class="validate" required>
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="password" name="password" type="password" class="validate" required>
                    <label for="password">Password</label>
                  </div>
                </div><br>
                <div class="right"><button type="submit" class="btn blue btn-large">Signup</button></div>
                <div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="6Lf4tAwbAAAAACn30LBTesJBWlU8t1_lKF38SDLg"></div>
              </form>
            </div>
        </div>




        <!-- video demo -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->
    <script>
          $(".button-collapse").sideNav();
          $(document).ready(function(){
          $('.slider').slider(); });
          $('.modal').modal();

    </script>
</body>
  </html>