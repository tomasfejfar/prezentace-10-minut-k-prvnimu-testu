<?php require ROOT . '/views/partials/header.php' ?>

<h1>Tajné</h1>
<?php if (!$hideSecret) { ?>
	<p>Hrozně tajná informace</p>
<?php } else { ?>
	<p>nemáte práva :/</p>
	<form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
		Name: <input name="name">
		Password: <input type="password" name="password">
		<input type="submit" name="submit" id="">
	</form>
<?php } ?>

<?php require ROOT . '/views/partials/footer.php' ?>
