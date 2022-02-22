<?php
	require_once("class.quiz.php");	
	require_once("class.quizBoard.php");

	session_start();

	$quizBoard = new quizBoard();
	$quiz = new quiz();

	if(!isset($_GET['quiz']) && !empty($_GET['quiz'])){
		header("Location:index.php");
	}

	if(!isset($_SESSION['round'])){
		$_SESSION['round'] = 1;
	}

	if(!isset($_SESSION['quiz'])){
		$_SESSION['quiz'] = $_GET['quiz'];
	}

	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz : <?php echo $quizBoard->beautify($_GET['quiz']) ?></title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class='wrapper'>
		<h1><?= $quizBoard->beautify($_GET['quiz']) ?></h1>
		<hr>
		<?php
			echo $quiz->showQuestion();
		?>
		<a href='index.php'>Back to start</a>
	</div>
</body>
</html>
