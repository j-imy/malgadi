<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Forgot Password</title>
      <link rel="icon" type="image/png" href="img/logo.png"/>
  </head>

  <body>
      <br><br><br><br>
        <div class="container">
          <div class="col s12 m6 l4 z-depth-4 offset-m4 card-panel border-radius-6 forgot-card bg-opacity-8">
    <form class="login-form">
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Forgot Password</h5>
          <p class="ml-4">You can reset your password</p>
        </div>
      </div>s
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="email" type="email">
          <label for="email" class="center-align">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <a href="forgot.php" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 mb-1">Reset
            Password</a>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="index.php">Login</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          <p class="margin right-align medium-small"><a href="index.php">Register</a></p>
        </div>
      </div>
    </form>
  </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>