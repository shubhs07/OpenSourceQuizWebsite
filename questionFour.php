<?php 
	session_start();
	
	$answerThree = 1;


	if(!isset($_GET["submit"])){
		if(isset($_SESSION["username"])){
			echo $_SESSION["username"];
			echo $_GET["q3"];
			if($answerThree == $_GET["q3"]){
				// echo "correct";
			} else {
				header("Location: failed.php");
				// echo "wrong";
			}
		} else {
			header("Location: failed.php");
		}
	}
 ?>

<h1>What does the computer’s operating system do?</h1>
<form action="questionFive.php" method="GET">
	<input type="radio" value="1" name="q4">Communicates with peripherals</input><br>
	<input type="radio" value="2" name="q4">Coordinates concurrent processing of jobs</input><br>
	<input type="radio" value="3" name="q4">Monitors resources and handles basic security</input><br>
	<input type="radio" value="4" name="q4">All of the above</input><br>
	<input type="submit"></input>
</form>
