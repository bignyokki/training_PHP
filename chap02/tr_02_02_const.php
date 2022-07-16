<?php
  const TAX = 1.1;
  // const : 定数を宣言するための命令
  // const 定数名 = 値
  // 命名規則
  // ①先頭に「$」は付けない
  // ②全て大文字で命名する
  $price = 1000;
  $sum = $price * TAX;
  print $sum;


  // define関数でも定数を定義できる
  // 少しできることが違う

    define('TAX2', 1.1);

    // define('VALUE', $x);  変数の値を定数に割り当てる
    // define('MAIN', dirname(__FILE__).'/test.php');  関数の戻り値を定数に割り当てる