<?php
// 1. データの準備と関数の定義（すべてPHPタグの内側）
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];


function getGrade($score) {
    if ($score >= 90) {
        return ["grade" => "評価A", ];
    } elseif ($score >= 80) {
        return ["grade" => "評価B", ];
    } elseif ($score >= 70) {
        return ["grade" => "評価C", ];
    } elseif ($score >= 60) {
        return ["grade" => "評価D"];
    } else {
        return ["grade" => "評価F"];
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-2-6ハンズオン</title>
</head>
<body>

<h1>成績判定システム</h1>

    <h2>【個別成績】</h2>


<?php
// 2. 画面に表示するための出力処理
foreach ($students as $student) {
$result = getGrade($student["score"]);
echo "<li>" . $student["name"] . "さん：" .$student["score"]. "点 - " . $result["grade"] . "</li>";
}
?>
    
    <h2>【統計情報】</h2>

<?php
// --- 1. 統計用の変数を初期化（まずはゼロからスタート） ---
$pass_count = 0;
$fail_count = 0;
$total_score = 0;
$student_count = count($students); // 生徒の総数（5人）


// --- 2. ループ処理で合格者・不合格者のカウントと合計点の計算 ---
foreach ($students as $student) {
    // 合計点に足していく
    $total_score += $student["score"];
    
    // 60点以上なら合格、未満なら不合格
    if ($student["score"] >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }
}


// --- 3. 平均点の計算（合計点 ÷ 人数） ---
// 生徒数が0人の場合にエラーにならないよう判定を入れると親切です
$average = ($student_count > 0) ? ($total_score / $student_count) : 0;



// --- 4. 各統計情報の出力 ---
echo "合格者数: {$pass_count}人<br>";
echo "不合格者数: {$fail_count}人<br>";

// number_formatを使って、小数点以下1桁にフォーマットして連結
echo "平均点: " . number_format($average, 1) . "点<br>";
?>