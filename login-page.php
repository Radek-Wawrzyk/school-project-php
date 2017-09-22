<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Admin panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="css/styles.min.css" />
</head>
<body id="login-page-body">

  <!-- Preloader -->
  <div class="preloader"></div>

  <section id="login-page">
      <div class="container-fluid">
        <div class="login-box">
          <div class="login-info ">
            <img class="img-responsive" src="https://i.imgur.com/crwTzML.png" />
            <h1 class="site-logo">Mine<span>Serv</span></h1>
            <p>Panel zarządzania swoim kontem</p>
          </div>
          <div class="login-form">
            <ul class="tabs login-form-tabs">
              <li class="active" data-tab="login-form">Logowanie</a></li>
              <li data-tab="register-form">Rejestracja</a></li>
            </ul>

            <form id="login-form" class="tab-content active">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Login" >
                <span></span>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Hasło" >
                <span></span>
              </div>
              <div class="form-group form-buttons text-center">
                <button type="submit" class="btn btn-login">Login</button>
              </div>
              <a href="#">Zapomniałeś hasła?</a>
            </form>

            <form id="register-form" class="tab-content">
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

</body>
</html>
