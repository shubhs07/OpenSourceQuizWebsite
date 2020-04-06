<?php 

	session_start();

	$serverName = "localhost";
	$dBName = "quizwebsite";
	$dBUsername = "root";
	$dBPassword = "";

	$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

	if(!$conn){
		die("Conection Failed: ".mysql_connect_error());
	}





	$answerFive = 3;


	if(!isset($_GET["submit"])){

		echo $_GET["q4"];
		if($answerFive == $_GET["q4"]){
			echo "<h1>" . $_SESSION["username"] . " Won</h1>";
			$sql = "INSERT INTO winners (username) VALUES (?)";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
				echo "Connection error";
			} else {
				mysqli_stmt_bind_param($stmt,"s",$_SESSION["username"]);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_close($stmt);
				mysqli_close($conn);
			}
		} else {
			header("Location: failed.php");
			echo "wrong";
		}
	}

	

	session_unset();
	session_destroy();
 ?>

