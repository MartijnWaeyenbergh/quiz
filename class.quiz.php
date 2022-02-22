<?php

require_once("settings.php");

class quiz{

	function showQuestion(){
		$output = "";
		$quiz = parse_ini_file(QUIZESPATH . $_SESSION['quiz'], true);
		$question = $quiz["QUESTION".$_SESSION['round']]["opdracht"];
		$output .= "<h3 class='question'>$question (question ".$_SESSION['round']."/". count($quiz).")</h3>";
		for ($i=1; $i<=4; $i++){
		   $output .= "<a href='answer.php?a=$i' class='answer'>".$quiz["QUESTION".$_SESSION['round']]["antwoord".$i]."</a>";
		}
		return $output;
	}

	function checkAnswer($index){
		$quiz = parse_ini_file(QUIZESPATH . $_SESSION['quiz'], true);
		if($quiz["QUESTION".$_SESSION['round']]["correctAnswer"] == $index)
		{
			$_SESSION['score']++;
			$output = "<span style='color:white; background-color:green;padding:9px;font-size:20pt;'>CORRECT</span><br>";
		}else{
			$output = "<span style='color:white; background-color:red;padding:9px;font-size:20pt;'>WRONG!</span><br>";
		}
		$_SESSION['round']++;
		if($_SESSION['round'] <= count($quiz)){
			$output .= "<br>";
			$output .= "<a href='start.php?quiz=".$_SESSION['quiz']."'>NEXT QUESTION</a><br>";
		}else{
			$output .= "<span class='result'>YOU SCORED ".$_SESSION['score']." / ".count($quiz)."</span><br>";
			$output .= "<a href='index.php'>Back to start</a>";
		}
		return $output;
	}

}


?>