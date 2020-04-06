<?php 
	session_start();
	$answerOne = 4;
	if(!isset($_GET["submit"])){
		if(isset($_SESSION["username"])){	
			echo $_SESSION["username"];
			echo $_GET["q1"];
			if($answerOne == $_GET["q1"]){
				// echo "correct";
			} else {
				header("Location: failed.php");
				// echo "wrong";
			}
		} else {
			// header("Location: failed.php");
		}
	}
	
 ?>

<h1>What is correcting errors in a program called?</h1>
<form action="questionThree.php" method="GET">
	<input type="radio" value="1" name="q2">Compiling</input><br>
	<input type="radio" value="2" name="q2">Debugging</input><br>
	<input type="radio" value="3" name="q2">
	Interpreting</input><br>
	<input type="radio" value="4" name="q2">Translating</input><br>
	<input type="submit"></input>
</form>