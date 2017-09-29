
  <?php include "header.php"; ?>

  <section class="panel-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <form class="form" method="POST" action="">
            <label>Pierwsza tablica xD</label>
            <div class="form-group">
              <input class="form-control" name="a" placeholder="1 liczba"/>
              <span></span>
            </div>
            <div class="form-group">
              <input class="form-control" name="b" placeholder="2 liczba"/>
              <span></span>
            </div>
            <div class="form-group">
              <input class="form-control" name="c" placeholder="3 liczba"/>
              <span></span>
            </div>
            <div class="form-group">
              <input class="form-control" name="d" placeholder="4 liczba"/>
              <span></span>
            </div>
            <label>Druga tablica xD</label>
            <div class="form-group">
              <input class="form-control" name="e" placeholder="1 liczba"/>
              <span></span>
            </div>
            <div class="form-group">
              <input class="form-control" name="f" placeholder="2 liczba"/>
              <span></span>
            </div>
            <div class="form-group">
              <input class="form-control" name="g" placeholder="3 liczba"/>
              <span></span>
            </div>
            <div class="form-group">
              <input class="form-control" name="h" placeholder="4 liczba"/>
              <span></span>
            </div>
            <div class="form-group text-center">
              <button class="btn btn-accept" type="submit">Dodaj dane do tablicy</button>
            </div>
          </form>
          <p><?php table_operations(); ?></p>
        </div>
      </div>
    </div>
  </section>

  <?php include "footer.php"; ?>

  <?php

    function table_operations () {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      $d = $_POST['d'];

      $e = $_POST['e'];
      $f = $_POST['f'];
      $g = $_POST['g'];
      $h = $_POST['h'];

      $table_1 = [$a,$b,$c,$d];
      foreach ($table_1 as $table_element) {
        echo $table_element.","."<br/>";
      }

      $table_2 = [$e,$f,$g,$h];
      foreach ($table_2 as $table_element) {
        echo $table_element.","."<br/>";
      }

      $xd = array_merge($table_1,$table_2);
      echo "Suma 2 tablic to: ".array_sum($xd);
    }

  ?>
