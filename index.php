<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Strona o nauce php - Radek Wawrzyk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="css/styles.min.css" />
</head>
<body id="login-page-body">

  <!-- Preloader -->


  <section id="login-page">
      <div class="container-fluid">
        <div class="login-box">
          <div class="login-info ">
            <h1 class="site-logo">Nauka<span>PHP</span></h1>
            <p>Panel nauki o PHP</p>
            <p>
              Login: admin </br>
              Hasło: admin 
            </p>
          </div>
          <div class="login-form">
            <ul class="tabs login-form-tabs">
              <li class="active" data-tab="login-form">Logowanie</a></li>
              <li data-tab="register-form">Rejestracja</a></li>
            </ul>

            <form id="login-form" method="post" class="tab-content active">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Login" name="login" >
                <span></span>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Hasło" name="password">
                <span></span>
              </div>
              <div class="form-group form-buttons text-center">
                <button type="submit" class="btn btn-login">Login</button>
              </div>
              <p class="text-center text-danger"><?php login(); ?></p>
              <a href="#">Zapomniałeś hasła?</a>
            </form>

            <form method="post" id="register-form" class="tab-content">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="login" >
                <span></span>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Hasło" >
                <span></span>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Powtórz hasło" >
                <span></span>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" >
                <span></span>
              </div>
              <div class="form-group form-buttons text-center">
                <button type="submit" class="btn btn-login">Rejestracja</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script src="js/scripts.js"></script>

    <?php
      function login() {
        $login = $_POST["login"];
        $password = $_POST["password"];

        if ( $login == "admin" && $password == "admin" ) {
          header( "Location: homepage.php" );
        } else echo "Złe hasło Panie koleżko :(";
      }
    ?>

</body>
</html>
