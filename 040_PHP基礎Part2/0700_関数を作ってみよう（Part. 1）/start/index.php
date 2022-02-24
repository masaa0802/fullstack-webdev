<?php
$numbers = [1,2,3,4];
$numbers2 = [1,2,3];

function sum($numbers) {
  $sum = 0;
  foreach($numbers as $num) {
    $sum += $num;
  }
    return $sum;
    echo "合計: {$sum}<br>";
  }

$result = sum($numbers);
// echo "合計: {$result}<br>";
// sum($numbers2);

// $sum2 = 0;
// foreach($numbers2 as $num2) {
//   $sum2 += $num2;
// }
// echo "合計: {$sum2}";