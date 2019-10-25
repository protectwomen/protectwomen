<?php

require_once 'src/HackHeroes/SignIn.php';

?>

<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Protect Women</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">
    <link href="jumbotron.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <link href="signin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
  </head>

  <body class="text-center">


  <div class="container container-forum">

      <form class="form-signin" method="POST" novalidate>
          <a href="index.php"><i class="fa fa-shield logo-forum" aria-hidden="true"></i></a>

          <h2 class="h3 mb-3 font-weight-normal signin-text">
              <p><strong>ProtectWoman</strong></p>
              <p>Proszę się zalogować</p>
          </h2>

          <label for="userName" class="sr-only">Nazwa użytkownika</label>
          <input type="text" name="userName" class="form-control input-forum userName" placeholder="Nazwa użytkownika" required>
          <p class="userNameError formError"></p>

          <label for="userPassword" class="sr-only">Hasło</label>
          <input type="password" name="userPassword" class="form-control input-forum userPassword" placeholder="Hasło" required>
          <p class="userPasswordError formError"></p>

          <div class="checkbox mb-3">
              <label>
                  <input type="checkbox" name="rememberMe" value="remember-me"> Zapamiętaj mnie
              </label>
          </div>

          <?php

          if(isset($_POST['userName'])) {
              $remember = false;
              if (isset($_POST['rememberMe'])) {
                  $remember = true;
              }

              $userName = $_POST['userName'];
              $userPassword = $_POST['userPassword'];

              $singIn = new SignIn\SignIn();
              $SingIn = $singIn->start($userName, $userPassword, $remember);
          }

          ?>

          <button class="btn btn-lg btn-secondary btn-block" type="submit" disabled="true">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; Projekt szkolny stworzony przez uczniów ZSTiO 2019-2020</p>
      </form>

    </div>
  </div>
  <script src="bin/js/inputCheck.js"></script>
	<!-- KWA -->
</body>
</html>
