<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ループサンプル</title>
</head>
<body>

</body>
</html>

<?php

echo "<h4>サンプル１</h4><br>";//サンプル1: 配列のループ

$fruits= ["りんご", "バナナ", "みかん"];

// 配列 $fruits の各要素を、順番に、変数 $fruit に代入して、処理を繰り返す
foreach ($fruits as $fruit) {
    echo $fruit . "はおいしい！<BR>";
}


echo "<h4>サンプル２</h4><br>";//サンプル2: 連想配列のループ

$scores = [
    "国語" => 80,
    "数学" => 95,
    "英語" => 72,
];

// キーを $subject に、値を $score に代入してループ
foreach ($scores as $subject => $score) {
    echo $subject . "の点数は、" . $score . "点です。<br>";
}
?>

