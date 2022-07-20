<?php

  // 前方演算
  $x = 10;
  $y = ++$x; // $xを加算してから$yに代入するため$yには$x+1が代入されている
  print $x;
  print '<br />';
  print $y;
  print '<br />';

  // 後方演算
  $i = 10;
  $j = $i++; // $iを$jに代入してから、$iに+1しているため、$jには+1されていない
  print $i;
  print '<br />';
  print $j;


  // マジカルインクリメント
  // 英数字混在の連番を作成するときに便利
  $i = 'Z';
  print ++$i; // アルファベットなら次の文字へ。Zなら繰上げを行う
  print '<br />';
  print ++$i;
  print '<br />';

  $j = 'T8';
  print ++$j;
  print '<br />';
  print ++$j; //数値の場合も9なら、その前の文字について繰上げする