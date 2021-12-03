<!-- <?php

  /* session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /Fundamentos_Flask');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: login.php?redirect=inicio.php'); 
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  } */

?> -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{url_for('static', filename='css/style.css')}}">
    <style>
    body, html {
      height: 100%;
      margin: 0;
      
    }

    .bg {
      /* The image used */
      background-image: url('static/img/fondo.jpg');
      /* Full height */
      color: white;
      padding: 100px;
      height: 100%; 

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
  </head>
  <body>
  <div class="bg">
    <!-- <?php //if(!empty($message)): ?>
      <p> </p>
    <?php //endif; ?> -->

    <h1><a>Login</a></h1>
    <span> <a href="/signup">Or SignUp</a></span>

    <form action="/login" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
  </div>
  </body>
</html>
