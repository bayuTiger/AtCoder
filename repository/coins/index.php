<?php
// 0≤A,B,C≤50
// A+B+C≥1
// 50≤X≤20,000
// A,B,C は整数である
// X は 50 の倍数である

$inputs = [];
while ($line = (string) fgets(STDIN)) {
    $inputs[] = explode(' ', $line);
}


$five = intval($inputs[0][0], 10);
$one = intval($inputs[1][0], 10);
$fif = intval($inputs[2][0], 10);
$check = intval($inputs[3][0], 10);
$count = 0;


for($i = 0; $i <= $five; $i++) {
  $fiveHundreds = $i * 500;
  for($j = 0; $j <= $one; $j++) {
    $oneHundreds = $j * 100;
    for($k = 0; $k <= $fif; $k++) {
      $fifty = $k * 50;
      $sum = $fiveHundreds + $oneHundreds + $fifty;
      if( ($fiveHundreds + $oneHundreds + $fifty) === $check ){
        $count++;
      }
    }
  }
}

echo $count;
?>