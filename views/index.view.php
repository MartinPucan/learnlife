<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/png" href="/img/open-book.png"/>

	<title>Learn Life</title>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
		<img src="/img/open-book.png" width="30" height="30" class="d-inline-block align-top" alt="book learnlife">
	  <a class="navbar-brand px-4" href="#">LearnLife</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">PHP <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">OS</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Problems</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">EN</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Articles</a>
	      </li>
	    </ul>
	    <form action="search.php" method="post" class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
	      <button class="btn my-2 my-sm-0" type="submit">
	      	<img src="/img/transparency32.png" width="27" height="27" class="d-inline-block align-top">
	      </button>
	    </form>
	  </div>
	</nav>

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



</body>
</html>