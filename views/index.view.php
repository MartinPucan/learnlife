<?php require('partials/header.php'); ?>

    <?php foreach ($users as $user) : ?>

        <li><?= $user->name; ?></li>

    <?php endforeach; ?>

	<div class="container">
		<h1>Submit your name</h1>

			<form method="POST" action="/names">
				
				<input type="text" name="name">
				<button type="submit">Submit</button>

			</form>

	</div>

<?php require('partials/footer.php'); ?>
