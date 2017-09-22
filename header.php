<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Admin panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="css/styles.min.css" />
</head>
<body>

  <!-- Preloader -->
  <div class="preloader"></div>

  <!-- Sidebar menu -->
  <section class="sidebar">
    <div class="sidebar-menu">
      <div class="sidebar-logo">
        <h1 class="text-center site-header"><a href="index.php" class="link"><span>Mine</span>Serv</a></h1>
      </div>
      <ul class="sidebar-nav">
        <li><a class="active" href="index.php" class="link" >
          <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          <p>Aktualności</p>
        </a></li>
        <li><a href="shop.php" class="link" >
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <p>Sklep</p>
        </a></li>
        <li><a href="tickets.php" class="link" >
          <i class="fa fa-comments-o" aria-hidden="true"></i>
          <p>Ticket</p>
        </a></li>
        <li><a href="block.php" class="link" >
          <i class="fa fa-lock" aria-hidden="true"></i>
          <p>Edycja sklepu</p>
        </a></li>
        <li><a href="stats.php" class="link" >
          <i class="fa fa-area-chart" aria-hidden="true"></i>
          <p>Statystyki</p>
        </a></li>
        <li><a href="help.php" class="link" >
          <i class="fa fa-question" aria-hidden="true"></i>
          <p>Pomoc</p>
        </a></li>
      </ul>
      <div class="sidebar-footer">
        <p class="text-center">© 2017 site by <a href="https://www.facebook.com/radek.wawrzyk" class="link" >Radziu</a> and <a href="https://www.facebook.com/MatisiekPL2" class="link" >Mateusz</a></p>
      </div>
    </div>
  </section>

  <!-- Page content -->
  <main class="main-panel">
    <nav class="navigation">
      <div class="navigation-button-wrapper">
        <button class="navigation-button">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <div class="navigation-header">
        <h1>Witamy w panelu gracza!</h1>
      </div>
      <div class="navigation-user-panel">
        <p class="navigation-user"><a href="user-profile.php">Radziu</a></p>
        <div class="dropdown" id="notifications">
          <i class="fa fa-envelope-o" data-toggle="dropdown" aria-hidden="true"><span class="badge">5</span></i>
          <ul class="dropdown-menu" id="notifications-dropdown">
            <li><a href="#">Powiadomienie 1</a></li>
            <li><a href="#">Powiadomienie 1</a></li>
            <li><a href="#">Powiadomienie 1</a></li>
            <li class="divider"></li>
            <li><a href="#">Wszystkie</a></li>
          </ul>
        </div>

        <div class="dropdown" id="messages">
          <i class="fa fa-comment" data-toggle="dropdown" aria-hidden="true"><span class="badge">2</span></i>
          <ul class="dropdown-menu" id="message-dropdown">
            <li><a href="#">Wiadomość 1</a></li>
            <li><a href="#">Wiadomość 2</a></li>
            <li><a href="#">Wiadomość 3</a></li>
            <li class="divider"></li>
            <li><a href="#">Wszystkie</a></li>
          </ul>
        </div>

        <div class="dropdown">
          <i class="fa fa-cog" aria-hidden="true" data-toggle="dropdown"></i>
          <ul class="dropdown-menu">
            <li><a href="change-password.php" class="link" >Zmiana hasła</a></li>
            <li><a href="user-profile.php" class="link" >Pokaż profil</a></li>
            <li class="divider" class="link" ></li>
            <li><a href="#">Wyloguj</a></li>
          </ul>
        </div>
      </div>
    </nav>
