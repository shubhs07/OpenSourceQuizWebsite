<?php 
	session_start();
	if(!isset($_GET["submit"])){
		echo $_GET["username"];
		$_SESSION["username"] = $_GET["username"];
	} 		
?>
<h1>Which of the following is the most famous example of open source software?</h1>
<form action="questionTwo.php" method="GET">
	<input type="radio" value="1" name="q1">Microsoft Windows</input><br>
	<input type="radio" value="2" name="q1">Mac OS X</input><br>
	<input type="radio" value="3" name="q1">UNIX</input><br>
	<input type="radio" value="4" name="q1">Linux</input><br>
	<input type="submit"></input>
</form>