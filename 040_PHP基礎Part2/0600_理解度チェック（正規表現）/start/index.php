<?php
// 正規表現を使って形式が正しいかチェックしてみよう。
/**
 * よく使う表現
 * . 任意の一文字
 * * 0回以上の繰り返し
 * + 1回以上の繰り返し
 * {n} n回の繰り返し
 * [] 文字クラスの作成
 * [abc] aまたはbまたはc
 * [^abc] aまたはbまたはc以外
 * [0-9] 0~9まで
 * [a-z] a~zまで
 * $ 終端一致
 * ^ 先頭一致
 * \w 半角英数字とアンダースコア
 * \d 数値
 * \ エスケープ
 */


/**
 * 郵便番号
 * 
 * 001-0012 -> OK
 * 001-001 -> NG
 * 2.2-3042 -> NG
 * wd3-2132 -> NG
 * 124-56789 -> NG
 */
$zipcode = '213-0244';
if (preg_match("/^\d{3}-\d{4}$/",$zipcode, $result)){
  echo '<div>郵便番号が正しいです。</div>';
  // print_r($result);
} else {
  echo'<div>郵便番号が不正です。</div>';
}

/**
 * Email
 * . _ - と半角英数字が可能
 * 
 * example000@gmail.com -> OK
 * example-0.00@gmail.com -> OK
 * example-0.00@ex.co.jp -> OK
 * example/0.00@ex.co.jp -> NG
 */
$email = 'example000@gmail.com';
if (preg_match("/^[\w.\-]+@+[\w.\-]+\.[\w\.\-]+$/",$email, $result)){
  echo '<div>メールアドレスは正しいです。</div>';
  // print_r($result);
} else {
  echo'<div>メールアドレスが間違ってます。</div>';
}

/**
 * HTML
 * 見出しタグ(h1~h6)の中身のみ取得してみよう。
 */

$html = 
'<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>見出し1</h1>
  <h2>見出し2</h2>
  <h3>見出し3</h3>
  </body>
</html>';

if (preg_match_all("/<h[1-6]>(.+)<\/h[1-6]>/",$html, $result)){
  print_r($result[count($result) - 1]);
} 
