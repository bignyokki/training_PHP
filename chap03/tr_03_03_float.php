<?php 

  // 浮動小数点数の演算
  print floor((0.1 + 0.7) * 10);
  print "<br>";
    // 期待する結果は8だが、結果は7となってしまう。
    // 浮動小数点数の計算が内部的には2進数で計算されるため
    // 0.1は2進数では0.0001100...となる無限循環小数となるため
    // この演算も内部的には7.9999999...となるため結果が7となる

  // 任意精度数学関数
  $add = bcadd(0.1, 0.7, 1);
  $mul = bcmul($add, 10, 1);
  print floor($mul);
  // bcadd(加算), bcsub(減算)...
  // 引数は順に「左オペラント」,「右オペラント」,「小数点以下の桁数」を渡す。