<?php
  $msg = 'こんにちは、世界！<br>';
  print $msg;

  // 変数の命名規則
  // ①「$名前」の形式であること                      [OK]$name, $msg  [NG]str, number
  // ②先頭は文字かアンダースコア(_)であること。数字不可  [OK]$_name       [NG]$123, $1data
  // ③２文字目以降は数字OK                          [OK]$name_11     [NG]$name-22
  // ④大文字、小文字は区別される                      [OK]$val, $Val
  // 一般的にはcamelCase記法で記述(例：$userName)

  // 可変変数
  // 変数名を変数の値によって決めることで動的に変数名を付け替えることができる

    $x = 'title';
    $title = 'PHP:Hypertext Preprocessor';
    print $$x;  // print ${$x};でもOK