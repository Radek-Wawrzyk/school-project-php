<?php
  $nr=1;
  while (isset($_POST['nazwa'.$nr]))
  {
    $towary[]=array('nazwa'=>$_POST['nazwa'.$nr], 'cena'=>$_POST['cena'.$nr], 
                    'sztuk'=>$_POST['sztuk'.$nr]); 
    $nr++;
  }
  $suma_sprzedazy=0;
  $ile_sprzedano_max=0;
  $za_ile_sprzedano_max=0;
  $nazwa_ile_sprzedano_max='';
  $nazwa_za_ile_sprzedano_max='';
  foreach ($towary as $towar)
  {
    $ile_sprzedano=$towar['sztuk'];
    $za_ile_sprzedano=$ile_sprzedano*$towar['cena'];
    $suma_sprzedazy+=$za_ile_sprzedano;
    if ($ile_sprzedano>$ile_sprzedano_max)
    {
      $ile_sprzedano_max=$ile_sprzedano;
      $nazwa_ile_sprzedano_max=$towar['nazwa'];
    }
    if ($za_ile_sprzedano>$za_ile_sprzedano_max)
    {
      $za_ile_sprzedano_max=$za_ile_sprzedano;
      $nazwa_za_ile_sprzedano_max=$towar['nazwa'];
    }
  }
  echo 'Sprzedano towary za kwotê: '.$suma_sprzedazy;
  echo '<br />Towar który sprzedano w najwiêkszej iloœci to: '.$nazwa_ile_sprzedano_max;
  echo '<br />Towar którego sprzeda¿ przynios³a najwiêkszy przychód to: '
       .$nazwa_za_ile_sprzedano_max;
?>