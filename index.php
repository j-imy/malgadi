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
 body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
  .services .boxes{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.services .boxes .box{
  margin: 20px 0;
  width: calc(100% / 3 - 20px);
  text-align: center;
  border-radius: 12px;
  padding: 30px 10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.12);
  cursor: default;
  transition: all 0.4s ease;
}
.services .boxes .box:hover{
  background: #4070f4;
  color: #fff;
}
.services .boxes .box .icon{
  height: 50px;
  width: 50px;
  background: #4070f4;
  border-radius: 50%;
  text-align: center;
  line-height: 50px;
  font-size: 18px;
  color: #fff;
  margin: 0 auto 10px auto;
  transition: all 0.4s ease;
}
.boxes .box:hover .icon{
  background-color: #fff;
  color: #4070f4;
}
.services .boxes .box:hover .topic,
.services .boxes .box:hover p{
  color: #0E2431;
  transition: all 0.4s ease;
}
.services .boxes .box:hover .topic,
.services .boxes .box:hover p{
  color: #fff;
}

@media (max-width: 1190px) {
  section .content{
    width: 85%;
  }
}
@media (max-width: 1000px) {
  .services .boxes .box{
    margin: 20px 0;
    width: calc(100% / 2 - 20px);
  }
}

@media (max-width: 750px) {
  .services .boxes .box{
    margin: 20px 0;
    width: 100%;
  }

}
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
<!-- services -->
<div class="container">
<section class="services center-align" id="services">
   <center><h3>My Services</h3></center>
   <div class="content">
     <div class="boxes">
       <div class="box">
         <div class="icon">
           <i class="fa fa-desktop"></i>
       </div>
       <div class="topic">C Programming</div>
       <p>I have provided some projects and links for c programming for you so join my community.</p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fa fa-desktop"></i>
       </div>
       <div class="topic">C++ Programming</div>
       <p>I have provided some projects and links for c++ programming for you so join my community.</p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fa fa-desktop"></i>
       </div>
       <div class="topic">Python Programming</div>
       <p>I have provided some projects and links for python programming for you so join my community.</p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fa fa-android"></i>
       </div>
       <div class="topic">Web Design With Html</div>
       <p>I have provided some videos and some important link on html for you so join my community.</p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fa fa-tablet"></i>
       </div>
       <div class="topic">JAVASCRIPT</div>
       <p>I have provided some important link on javascript for you so join my community.</p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fa fa-android"></i>
       </div>
       <div class="topic">SQL</div>
       <p>I have provided some videos and some important link on SQL for you so join my community.</p>
     </div>
   </div>
   </div>
 </section><br><br>
 <h3 class="center-align">Work Sample</h3><br>
      <!-- <div class="video-container">
        <iframe width="853" height="480" src="//www.youtube.com/embed/-1DbdPvNSBc" frameborder="0" allowfullscreen></iframe>
      </div> -->

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
                  <li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Signup</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Login</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contact-form</a></li>
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
                <div class="right"><a href="forgot.php">Forgot Passworord ?</a></div>
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