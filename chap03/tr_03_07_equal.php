<pre>
<?php
  // 文字列混在の比較(等価)
  var_dump('3.14' == 3.14000);
  var_dump('3.14E2' == 314);
  var_dump('0x10' == 16); // false, 2/8/16進数リテラルは正しく認識されない
  var_dump('010' == 8); // false, 2/8/16進数リテラルは正しく認識されない
  var_dump('0b11' == 3); // false, 2/8/16進数リテラルは正しく認識されない
  var_dump('13xyz' == 13); // php7.4までtrue, php8からfalse
  var_dump('X' == 0); // php7.4までtrue, php8からfalse
  var_dump('3.14' == '3.14000');
  var_dump('3.14E2' == '314');
  var_dump('13xyz' == '13'); // false, 片方が純粋な数値文字列では無い場合変換されない


  // 厳密な等価演算子
  // 下記は全てfalse
  var_dump('3.14E2' === 314);
  var_dump('X' === 0);
  var_dump('1' === 1);



