<?php
session_start();

if (!isset($_SESSION['tweets'])) {
    $_SESSION['tweets'] = [];
}

if (isset($_POST['tweet']) && $_POST['tweet'] !== '') {
    $_SESSION['tweets'][] = $_POST['tweet'];
}
?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>虚無ったー</title>
    <style type="text/css">
        * {
            color: #333;
        }
        main {
            width: 500px;
            margin: auto;
        }
        textarea {
            width: 500px;
            box-sizing: border-box;
            font-size: 20px;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #999;
            outline: none;
        }
        form {
            text-align: center;
            padding: 0 0 15px 0;
        }
        button {
            font-size: 20px;
            padding: 5px 15px;
        }
        .tweet {
            box-sizing: border-box;
            margin: 0px auto;
            padding: 15px;
            border: 1px solid #cccccc;
        }
        .tweet + .tweet {
            border-top: none;
        }
    </style>
</head>
<body>
<main>
    <h1>虚無ったー</h1>
    <form action="kyomutter.php" method="post">
        <textarea name="tweet"></textarea>
        <button>虚無</button>
    </form>
    <?php
    foreach (array_reverse($_SESSION['tweets']) as $tweet) {
    ?>
    <div class="tweet"><?= nl2br($tweet) ?></div>
    <?php
    }
    ?>
</main>
</body>
</html>
