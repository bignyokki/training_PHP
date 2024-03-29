<?php

  // 条件演算子
  // 「条件式 ? 式1 : 式2;」
  // 条件式がtrueの時は式1を、falseの時は式2を出力する

  $score = 75;
  print $score >= 70 ? '合格！' : '不合格...';
  print "<br>";


  // 条件演算子の省略構文
  // 「式1 ?: 式2;」
  // 式1がtrueの時は式1を、falseの時は式2を出力
  // 式1がnullやゼロ、空文字列などを取るときは式2を
  // 式1に何か文字列や数値等入っている時はそれを出力するといった感じ

  $message = '';
  print $message ?: '空です。';
  print "<br>";
  // この場合$messageは空なので「空です。」と出力される


  // 「式1 ?? 式2;」
  // 上記より限定されて、式1がnullの時だけ式2を出力する(空文字もNG)
  
  print $message2 ?? 'ノーコメント';
  print "<br>";

  $message3 = "";
  print $message3 ?? 'ノーコメント';
  print "<br>";
  // 上記の場合、$message3(空文字列)が出力される




  // 条件演算子を列挙する場合
  // PHP8から必ずカッコで括る必要あり

  // print true ? 1 : false ? 'OK' : 'NG';
  // 上記はNG

  print (true ? 1 : false) ? 'OK' : 'NG';
  // カッコないが先に処理され「1」,よって次に「1 ? 'OK' : 'NG';」が処理され結果は「OK」となる

  print true ? 1 : (false ? 'OK' : 'NG');
  // カッコ内が先に処理され「'NG'」,よって次に「true ? 1: 'NG';」が処理され結果は「1」となる

  