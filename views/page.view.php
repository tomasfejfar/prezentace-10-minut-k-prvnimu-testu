<?php require 'views/partials/header.php' ?>

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

<?php require 'views/partials/footer.php' ?>
