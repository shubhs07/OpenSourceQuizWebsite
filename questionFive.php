<?php 
	session_start();
	
	$answerFour = 4;


	if(!isset($_GET["submit"])){
		if(isset($_SESSION["username"])){
			echo $_GET["q4"];
			echo $_SESSION["username"];
			if($answerFour == $_GET["q4"]){
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

<h1>When you buy a typical computer software package, you are purchasing</h1>
<form action="success.php" method="GET">
	<input type="radio" value="1" name="q4">A guarantee that the software has no bugs in it</input><br>
	<input type="radio" value="2" name="q4">A share of stock in the company making the software</input><br>
	<input type="radio" value="3" name="q4">A license to use the software</input><br>
	<input type="radio" value="4" name="q4">The software</input><br>
	<input type="submit"></input>
</form>