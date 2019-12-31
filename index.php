<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Learn</title>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>

	<div class="container">
		<p>

		<?php
			
			require 'functions.php';

			class Task
			{
				protected $description;

				protected $completed = false;
				
				public function __construct($description)
				{
					$this->description = $description;
				}

				public function complete(): bool
				{
					$this->completed = true;
				}

				public function isComplete()
				{
					return $this->completed;
				}

			}


			$task = [ 
				new Task('Go to the store'),
				new Task('Finish my screencast'),
				new Task('Clean My Room')
			];


			
			dd($task);


		?>

		</p>	
	</div>


</body>
</html>