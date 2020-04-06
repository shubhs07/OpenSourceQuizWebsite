<?php 
	session_start();
	
	$answerTwo = 2;


	if(!isset($_GET["submit"])){
		if(isset($_SESSION["username"])){
			echo $_GET["q2"];
			echo $_SESSION["username"];
			if($answerTwo == $_GET["q2"]){
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

<h1>A compiler translates a program written in a high-level language into</h1>
<form action="questionFour.php" method="GET">
	<input type="radio" value="1" name="q3">Machine language</input><br>
	<input type="radio" value="2" name="q3">An algorithm</input><br>
	<input type="radio" value="3" name="q3">
	C#</input><br>
	<input type="radio" value="4" name="q3">Natural language</input><br>
	<input type="submit"></input>
</form>