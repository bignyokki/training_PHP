<pre>

<?php

  // 文字列演算子
  // 文字列演算子(.)は、左辺と右辺の文字列を連結します。
  $x = 'こんにちは、';
  $y = '世界！';
  print $x . $y;



  // 実行演算子
  // バッククォート(`)で囲まれたブロックをシェルコマンドとして実行

  $result = `ls -la`;
  print $result;




  // エラー制御演算子
  // エラー分を表示しないようにする

  $data = [ 'apple' => 'りんご' ];
  print $data['orange'];
  print @$data['orange'];

