<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ブックマークアプリ</title>
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav>
            <a href="select.php">登録一覧</a>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <main>
        <form method="POST" action="insert.php">
            <fieldset>
                <legend>Youtubeメモ</legend>
                <label for="book_name">タイトル</label>
                <input type="text" id="book_name" name="book_name" required placeholder="">

                <label for="book_url">URL</label>
                <input type="text" id="book_url" name="book_url" required placeholder="">

                <label for="book_comment">概要</label>
                <textarea id="book_comment" name="book_comment" rows="4" required placeholder=""></textarea>

                <input type="submit" value="登録">
            </fieldset>
        </form>
    </main>
    <!-- Main[End] -->


</body>

</html>
