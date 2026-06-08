<?php
// ==========================================
// 1. クラスの定義（設計図）
// ==========================================
class User
{
    // 1. プロパティの定義
    public string $name;
    public int $age;

    // 2. コンストラクタ（名前と年齢を初期化）
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // 3. introduce メソッド（自己紹介を返す）
    public function introduce(): string
    {
        return "こんにちは、私は{$this->name}です。{$this->age}歳です。";
    }

    // 4. isAdult メソッド（成人かどうかを判定）
    public function isAdult(): bool
    {
        // 18歳以上なら true、未満なら false をそのまま返します
        return $this->age >= 18;
    }
}


// ==========================================
// 2. データの準備（ロジック）
//========================================== 
// 1. 3人のデータをインスタンス化（変数に定義）
$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);


// 2. 配列にまとめてループ処理で一気に出力する
$users = [$user1, $user2, $user3];

?>

<!-- ==========================================
3. 画面への表示（ビュー / HTML）
========================================== -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理プログラム</title>
</head>
<!DOCTYPE html>

<body>
    <h1>ユーザ管理プログラム</h1>

    <h2>【自己紹介】</h2>
    <?php foreach ($users as $user) {
        echo $user->introduce() . "<br>";
    } ?>

    <h2>【成人判定】</h2>
    <?php foreach ($users as $user) {
        // 誰の結果かわかるように名前も添えて出力します
        if ($user->isAdult()) {
            echo "{$user->name}さんは成人です。<br>";
        } else {
            echo "{$user->name}さんは未成年です。<br>";
        }
    } ?>
</body>

</html>