<?php

  // 値による代入
  $x = 1;
  $y = $x;
  $x = 5;
  print $y; // $yに$xを代入した後に$xを変更しても$yは影響を受けない

  // 参照による代入
  $x = 1;
  $y = &$x; // 参照を表す「&」をつける
  $x = 5;
  print $y; // $xが変更されると$yも影響を受ける
