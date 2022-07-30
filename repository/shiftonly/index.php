<?php

// 問題文
// 黒板に N 個の正の整数 A1,...,ANが書かれています
// すぬけ君は，黒板に書かれている整数がすべて偶数であるとき，次の操作を行うことができます．

// 黒板に書かれている整数すべてを 2 で割ったものに置き換える．
// すぬけ君は最大で何回操作を行うことができるかを求めてください．

// 制約
// 1≤N≤200
// 1≤Ai≤10**9

$inputs = [];
while ($line = trim((string) fgets(STDIN))) {
    $inputs[] = explode(' ', $line);
}

$int_arr = [];
$result = 0;
$flag = true;

foreach ($inputs[1] as $s) {
    $int_arr[] = intval($s);
}
;

while ($flag) {
    for ($j = 0; $j < count($int_arr); $j++) {
        if ($int_arr[$j] % 2 != 0) {
            $flag = false;
        } else {
            $int_arr[$j] = $int_arr[$j] / 2;
        }
    }
    if ($flag) {
        $result++;
    }
    ;
}

echo $result;
