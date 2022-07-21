<pre>

<?php

  // 配列の結合
  // 左の配列に存在しないキーの要素を右の配列から取り出し、左の配列に追加する
  // 重複したキーがあればその値は無視される
  $assoc1 = [
    'Apple' => 'Red',
    'Orange' => 'Yellow',
    'Melon' => 'Green'
  ];
  $assoc2 = [
    'Grape' => 'Purple',
    'Apple' => 'Green',
    'Strawberry' => 'Red'
  ];
  $result = $assoc1 + $assoc2;
  print_r($result);

  $ary1 = [1, 3, 5];
  $ary2 = [2, 3, 6];
  $result = $ary1 + $ary2;
  print_r($result);