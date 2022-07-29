<?php

  require_once __DIR__.'/file/tr_06_01_include.php'; // 外部ファイルを呼び出す

  $area = getTriangleArea(8, 10);
  print "三角形の面積は{$area}です。";