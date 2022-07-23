<?php

  // 分割代入
  // 左辺に要素の数だけ変数を列挙し、全体をブラケット([...])でくくる

  $data = [1, 2, 3, 4, 5]; // 配列を定義
  [$a, $b, $c, $d, $e] = $data; // $a〜%eに分解して代入する
  print $a;
  print '<br />';
  print $b;
  print '<br />';
  print $c;
  print '<br />';
  print $d;
  print '<br />';
  print $e;
  print '<br />';




  // 左辺の要素数と右辺(配列)の要素数と等しいか少なくなければならない

  // $data = [1, 2, 3, 4];
  // [$a, $b, $c, $d, $e] = $data
  //    配列の要素数は4個、左辺の要素数が5個のため警告となる

  [$f, $g, $h, $k] = $data;
    // 左辺の要素数が配列より少ない場合、不足分は無視される
  print $f;
  print '<br />';
  print $g;
  print '<br />';
  print $h;
  print '<br />';
  print $k;
  print '<br />';




  // 一部の要素を切り捨てる
  // スキップする数だけブラケット内部でカンマを列挙する

  [  , $n,  , $m, $l] = $data;  // $data[0], $data[2]は切り捨てられる
  print $n;
  print '<br />';
  print $m;
  print '<br />';
  print $l;
  print '<br />';
  



  // 一部の要素だけ取得する
  // 「インデックス値 => 変数」で特定の要素だけを分割代入

  [1 => $o, 4 => $p] = $data;
  print $o;
  print "<br>";
  print $p;
  print "<br>";

  // 連想配列でも同様にできる

  $map = ['title' => '独習Python', 'price' => 3000];
  ['title' => $title, 'price' => $price ] = $map;
  print $title;
  print '<br />';
  print $price;
  print "<br>";




  // 入れ子の配列も分割する
  // 左辺のブラケットも入れ子にすれば良い

  $data2 = [1, 2, [31, 32, 33]];
  [$q, $r, $s] = $data2;
  print_r($q);
  print '<br />';
  print_r($r);
  print '<br />';
  print_r($s);
  print '<br />';

  [$x, $y, [$z1, $z2, $z3]] = $data2;
  print	$x;
  print '<br />';
  print $y;
  print '<br />';
  print $z1;
  print '<br />';
  print $z2;
  print '<br />';
  print $z3;




  // 変数のスワッピング

  $t = 15;
  $u = 38;
  [$u, $t] = [$t, $u];
  print $t;
  print '<br />';
  print $u;