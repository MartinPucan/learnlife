<?php require('partials/header.php'); ?>

	<div class="container">
		<p>
			<ul>
				
				<?php foreach ($tasks as $task) : ?>

					<li>
						<?php if ($task->completed) : ?>

					
					<strike><?= $task->description; ?></strike>

					<?php else : ?>

					<?= $task->description; ?>

					<?php endif; ?>
					</li>

				<?php endforeach; ?>
	
			</ul>

		</p>	
	</div>

<?php require('partials/footer.php'); ?>
