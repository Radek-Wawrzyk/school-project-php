 
  <?php include "header.php"; ?>
  
  <section class="panel-content">
	<div class="container-fluid">
	  <div class="row">
	    <?php table_sort(); ?>
		<?php table_sort_2(); ?>
	  </div>
	</div>
  </section>
  
	
  <?php
    function table_sort () {
      $table_sort = array("d"=>"mango zjeb","a"=>"pope papaj","b"=>"kowalski-to-pedzio","c"=>"C# to super jezyk");
      asort($table_sort);
  
      while (list($key, $value) = each($table_sort)) {
	    echo "$key = $value";
      }
    }
	
	function table_sort_2() {
	  $table_sort = array("Agnieszka","Kuba","Wlodek","Antoni","xD");
	  
	  rsort($table_sort);
	  foreach ($table_sort as $table_element) {
        echo "<br/>".$table_element.",";
      }
	}

  ?>
  
  <?php include "footer.php"; ?>