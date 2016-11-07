<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $app['title'] ?></title>
</head>
<body>
<?php require 'menu.php' ?>

<h1>Kontakt</h1>
<ul>
    <?php foreach ($hobbies as $hobby) {
        echo '<li>' . $hobby . '</li>';
    } ?>
</ul>

<ul>
    <?php foreach ($person as $title => $information) {
        echo '<li>' . $title . ': ' . $information . '</li>';
    } ?>
</ul>

</body>
</html>
