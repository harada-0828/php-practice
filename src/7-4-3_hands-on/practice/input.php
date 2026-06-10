<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー情報入力</title>
</head>

<body>
    <h1>ユーザー登録（1/3)入力</h1>

    <!-- 送信ボタンを押すと、データを次のファイル「confirm.php」へPOST送信 -->
    <form action="confirm.php" method="post">


        <p>
            <label>お名前：</label>
            <!-- text で通常の文字入力を指定 -->
            <input type="text" name="name" required>
        </p>



        <p>
            <label>メールアドレス：</label>
            <!-- email でメールアドレスの書式を自動チェック -->
            <input type="email" name="email" required>
        </p>



        <p>
            <label>年齢：</label>
            <!-- number で数値しか入力できないように制限（0以上150以下など制限も可能） -->
            <input type="number" name="age" min="0" max="150" required>
        </p>



        <button type="submit">送信する</button>



    </form>



</body>

</html>