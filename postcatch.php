<?php
header("Content-type: text/plain; charset=UTF-8");

// POST変数を取得
$str = $_POST['str'];

// csv保存
$file = fopen("deta.csv", "a");
fwrite($file, "$str");
fwrite($file, "\n");
fclose($file);

// フロントサイドへてきとーに返しておく