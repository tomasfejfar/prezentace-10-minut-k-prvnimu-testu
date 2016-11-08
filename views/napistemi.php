<?php require 'views/partials/header.php' ?>

<h1>Napište mi</h1>

<form method="post">
    <p>Jméno: <br><input name="name"></p>

    <p>Zpráva <br><textarea name="message"></textarea></p>
    <input type="submit" title="Odeslat">
</form>

<?php require 'views/partials/footer.php' ?>
