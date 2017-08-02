<?php
	
	if(empty($_POST['name']) || empty($_POST['maths']) || empty($_POST['english']) ||
		empty($_POST['physics']) || empty($_POST['chemistry']) || empty($_POST['biology']) ||
		empty($_POST['computer']))
	{
		die("Please complete all fields");
	}


	$name =$_POST['name'];
	$maths = $_POST['maths'];
	$english = $_POST['english'];
	$physics = $_POST['physics'];
	$chemistry = $_POST['chemistry'];
	$biology = $_POST['biology'];
	$computer = $_POST['computer'];

	$sql= "INSERT INTO results (student, maths, english, chemistry, physics, biology, computer_studies)
						VALUE ('$name', $maths, $english, $chemistry, $physics, $biology, $computer)";
	require "connect.php";
	$results=mysqli_query($con, $sql);
	header('location:http://localhost/movement/report-sheet/views/displayResult.php');


?>

