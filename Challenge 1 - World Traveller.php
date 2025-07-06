<?php
  //Starting amounts
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;

  echo "Starting Riel: $riel";
  echo "\nStarting Kyat: $kyat";
  echo "\nStarting Krones: $krones";
  echo "\nStarting Lek: $lek";

  //Conversion Rates
  $rielToUSDRate = 0.00025;
  $kyatToUSDRate = 0.00047;
  $kronesToUSDRate = 0.099;
  $lekToUSDRate = 0.012;

  //Work out the USD amounts before the conversion fee
  $rielFinal = round($riel * $rielToUSDRate, 2);
  $kyatFinal = round($kyat * $kyatToUSDRate, 2);
  $kronesFinal = round($krones * $kronesToUSDRate, 2);
  $lekFinal = round($lek * $lekToUSDRate, 2);

  //Minus the conversion fee for 4 currencies
  $finalCalc = $rielFinal + $kyatFinal + $kronesFinal + $lekFinal - 4;

  //Display the final conversion amounts
  echo "\n\nRiel Converts to $rielFinal USD";
  echo "\nKyat Converts to $kyatFinal USD";
  echo "\nKrones Converts to $kronesFinal USD";
  echo "\nLek Converts to $lekFinal USD";

  //Display the overall amounts
  echo "\n\nAfter the \$1 fee per conversion your final amount is: " . round($finalCalc, 2) . " USD";
