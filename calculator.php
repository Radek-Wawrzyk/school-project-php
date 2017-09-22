<?php include "header.php"; ?>

<section class="panel-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="panel-tile">
          <div class="panel-header">
            <h3 class="text-center">Numery telefonów</h3>
          </div>
          <div class="panel-body">
            <form method="POST" action="" class="form">
              <div class="form-group">
                <input class="form-control" type="text" name="a" placeholder="1 liczba" >
                <span></span>
              </div>
              <div class="form-group">
                <input type="radio" name="char" value="+" /> +
                <input type="radio" name="char" value="-" /> -
                <input type="radio" name="char" value="*" /> *
                <input type="radio" name="char" value="/" /> /
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="b" placeholder="2 liczba" >
                <span></span>
              </div>
              <div class="form-group text-center">
                <button class="btn" type="submit" >Oblicz</button>
              </div>
            </form>
            <h3 class="text-center"><?php calculate(); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>

      <?php

        function calculate() {
          $number_1 = $_POST['a'];
          $number_2 = $_POST['b'];

          echo "Wynik działania ".$number_1."".$_POST["char"]."".$number_2." Wynosi: ";

          switch($_POST["char"]) {
            case "+": echo $number_1 + $number_2; break;
            case "-": echo $number_1 - $number_2; break;
            case "*": echo $number_1 * $number_2; break;
            case "/": echo $number_1 / $number_2; break;
          }
        }


      ?>
