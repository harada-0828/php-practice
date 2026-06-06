<?php
//課題１の表記テストです
echo "課題1<br>";

$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

echo "元の価格：" . number_format($original_price) . "円<br>";
echo "割引率：" . ($discount_rate * 100) . "%<br>";
echo "最終価格：" . number_format($final_price) . "円<br>";


//課題２の表記テストです
echo "課題２<br>";
$number = 7;

if ($number % 2 == 0) {
    echo "{$number}は偶数です";
} else {
    echo "{$number}は奇数です";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>写真の表示テスト</title>
</head>

<body>
    <h1>iPhoneで撮影した写真</h1>
    <p>※phpの中にhtmlを入れてみるテスト</p>

    <!-- 💡 ここが画像を表示するタグです -->
    <img src="images/my-photo.jpg" alt="iPhoneで撮影した写真" width="400">


    <!-- 画像を表示するタグ（正しい相対パス） -->
    <div>
        <img src="../../images/my-photo.jpg" alt="iPhoneで撮影した写真" width="400">
    </div>
</body>

</html>




<?php
echo "課題３<br>";
//課題3: 複数条件の判定
//論理演算子（&&、||）を使って、以下の条件を判定するプログラムを作成してください。
//年齢が18歳以上 かつ 会員である場合: 「割引が適用されます」
//年齢が65歳以上 または 学生である場合: 「シニア・学生割引が適用されます」

$age = 25;
$is_member = true;
$is_student = false;

// 条件1: 18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
}

// 条件2: 65歳以上または学生
if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
}

echo "課題4<br>";//課題４

$score = 100;
echo "初期スコア: {$score}点<br>";

$score += 50;  // ボーナスステージクリア
echo "ボーナス後: {$score}点<br>";

$score -= 30;  // ダメージ
echo "ダメージ後: {$score}点<br>";

$score *= 2;   // 2倍アイテム
echo "最終スコア: {$score}点<br>";

