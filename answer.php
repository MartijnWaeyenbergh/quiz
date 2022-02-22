<?php
	require_once("class.quiz.php");	
	require_once("class.quizBoard.php");

	session_start();

	$quizBoard = new quizBoard();
	$quiz = new quiz();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kwis : <?php echo $quizBoard->beautify($_SESSION['quiz']) ?></title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class='wrapper'>
		<h1><?= $quizBoard->beautify($_SESSION['quiz']) ?></h1>
		<hr>
		<?php
			echo $quiz->checkAnswer($_GET['a']);
		?>
	</div>
</body>
</html>
