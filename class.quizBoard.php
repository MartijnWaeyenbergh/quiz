<?php

require_once("settings.php");

class quizBoard{

	function showQuizes(){
		$output = "";
		$foundQuizes = scandir(QUIZESPATH);
		foreach ($foundQuizes as $foundQuiz) {
			if( $foundQuiz == "." || $foundQuiz == ".."){
				continue;
			}
			$output .= "<a href='start.php?quiz=$foundQuiz'>".quizBoard::beautify($foundQuiz)."</a><br>";
		}
		return $output;
	}

	function beautify($name){
		$niceName = str_replace("_", " ", $name);
		$niceName = str_replace(".ini", "", $niceName);
		return $niceName;
	}

}

?>