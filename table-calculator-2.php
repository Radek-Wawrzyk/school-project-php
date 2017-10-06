
  <?php include "header.php"; ?>

  <section class="panel-content">
    <div class="container-fluid">
      <div class="row">
        <p>Tablica złączona - dodawanie <?php table_addition(); ?></p>
        <p>Tablica złączona - odejmowanie <?php table_substraction(); ?></p>
        <p>Tablica złączona - dzielenie <?php table_splitting(); ?></p>
        <p>Tablica złączona - mnożenie <?php table_multiplications(); ?></p>
      </div>
    </div>
  </section>


  <?php include "footer.php"; ?>

  <?php

    function table_addition(){
      $table_1 = array(1,2,3,4,5);
      $table_2 = array(1,2,3,4,5);;
      $result = array();

      for($i=0;$i<4;$i++) {
        $result[] = $table_1[$i] + $table_2[$i];
      }

      sort($result);

      foreach ($result as $table_element) {
          echo $table_element.",";
        }
    }

    function table_substraction(){
      $table_1 = [12,13,14,15,16];
      $table_2 = [11,12,13,14,15];

      for($i=0;$i<4;$i++) {
        $result[] = $table_1[$i] - $table_2[$i];
      }

      sort($result);

      foreach ($result as $table_element) {
          echo $table_element.",";
        }
    }

    function table_splitting(){
      $table_1 = [132,1,142,125,6];
      $table_2 = [24,1,33,142,15];

      for($i=0;$i<4;$i++) {
        $result[] = $table_1[$i] / $table_2[$i];
      }

      sort($result);

      foreach ($result as $table_element) {
          echo $table_element.",";
        }
    }

    function table_multiplications(){
      $table_1 = [132,1,142,125,6];
      $table_2 = [24,1,33,142,15];

      for($i=0;$i<4;$i++) {
        $result[] = $table_1[$i] * $table_2[$i];
      }

      sort($result);

      foreach ($result as $table_element) {
          echo $table_element.",";
        }
    }


  ?>
