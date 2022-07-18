<pre>
<?php
  
  // var_dump関数は変数の情報を出力する関数。データ型も加味した情報を出力する。
  var_dump((int)1530.95);
  var_dump((int)-1530.95);
  var_dump((int)true);
  var_dump((string)true);
  var_dump((int)false);
  var_dump((string)false);
  var_dump((array)108);

  // 文字列 → 数値の型のキャスト
  // ２進数、８進数、１６進数をキャストする場合、正しく認識されないため
  // 専用の変換する関数を利用して変換が必要

  var_dump((int)'0b11');  // 2進数
  var_dump((int)'0777');  // 8進数
  var_dump((int)'0xFF');  // 16進数
  var_dump(bindec('0b11'));  // bindec:2進数を10進数に変換
  var_dump(octdec('0777'));  // octdec:8進数を10進数に変換
  var_dump(hexdec('0xFF'));  // hexdec:16進数を10進数に変換
  var_dump((int)'1E4');  // 指数表現はそのままで問題なし
  var_dump((float)'1E4');