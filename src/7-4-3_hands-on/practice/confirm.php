<?php
// 1. 送られてきたデータを変数に代入する
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

// セキュリティ対策（XSS対策）の関数
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>

<body>

    <h1>ユーザー登録（２/3)確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>


    <table
        style="border: 4px double #333333; border-collapse: separate; border-spacing: 0; width: 100%; max-width: 450px; margin-bottom: 20px;">
        <tr>
            <td
                style="background-color: #f5f5f5; border-right: 1px solid #333333; padding: 12px; width: 35%; text-align: center;">
                <strong>お名前</strong></td>
            <td style="padding: 12px; font-size: 1.1rem;"><?php echo h($name); ?></td>
        </tr>
    </table>
    

    <!-- 2. メールアドレスの表 -->
    <table
        style="border: 4px double #333333; border-collapse: separate; border-spacing: 0; width: 100%; max-width: 450px; margin-bottom: 20px;">
        <tr>
            <td
                style="background-color: #f5f5f5; border-right: 1px solid #333333; padding: 12px; width: 35%; text-align: center;">
                <strong>アドレス</strong></td>
            <td style="padding: 12px; font-size: 1.1rem; word-break: break-all;"><?php echo h($email); ?></td>
        </tr>
    </table>

    <!-- 3. 年齢の表 -->
    <table
        style="border: 4px double #333333; border-collapse: separate; border-spacing: 0; width: 100%; max-width: 450px; margin-bottom: 30px;">
        <tr>
            <td
                style="background-color: #f5f5f5; border-right: 1px solid #333333; padding: 12px; width: 35%; text-align: center;">
                <strong>年齢</strong></td>
            <td style="padding: 12px; font-size: 1.1rem;"><?php echo h($age); ?> 歳</td>
        </tr>
    </table>


    <!-- 💡 データを complete.php に引き継いで送信する正しいフォーム -->
    <form action="complete.php" method="post">
        <!-- type="hidden" で画面には出さずに裏でデータを保持する -->
        <input type="hidden" name="name" value="<?php echo h($name); ?>">
        <input type="hidden" name="email" value="<?php echo h($email); ?>">
        <input type="hidden" name="age" value="<?php echo h($age); ?>">

        <!-- 登録ボタン -->
        <button type="submit" style="padding: 5px 15px;">登録する</button>
    </form>

    <br>

    <!-- 修正したいとき用の戻るボタン -->
    <button onclick="history.back()" style="padding: 5px 15px;">戻る</button>

</body>

</html>