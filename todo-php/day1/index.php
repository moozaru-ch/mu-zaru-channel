<?php

$todos = [
    ['todo' => 'プログラミングをする'],
    ['todo' => 'YouTube ライブ配信をする'],
    ['todo' => '筋トレをする'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['todo'])) {
        $error = 'ToDo を入力してください';
    } else {
        $todos[] = ['todo' => $_POST['todo']];
    }
}

?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (!empty($error)) {
?>
    <p class="error"><?= $error ?></p>
<?php
}
?>
<ul>
    <?php
    foreach ($todos as $todo) {
    ?>
        <li><?= $todo['todo'] ?></li>
    <?php
    }
    ?>
</ul>
<form action="index.php" method="post">
    <input type="text" name="todo">
    <input type="submit" value="add">
</form>
</body>
</html>
