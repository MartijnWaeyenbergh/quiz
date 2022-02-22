<?php
	session_start();
	session_destroy();

	require_once("class.quiz.php");	
	require_once("class.quizBoard.php");	

	// reset the session if already started
	session_start();
	session_destroy();

	$quizBoard = new quizBoard();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

	<div class="wrapper">
		<h1>Choose the quiz you want to play</h1>
		<hr>
		<?php
			echo $quizBoard->showQuizes();
		?>
	</div>

</body>
</html>