<?php
	function display_results(){
		$sql="SELECT * FROM results";
		require "connect.php";
		$results= mysqli_query($con, $sql);
		$x= 0;
		while ($row= mysqli_fetch_assoc($results)) {
			echo "<tr>";
			echo " <td>{$row['Student']} </td>";
			echo " <td>{$row['maths']} </td>";
			echo " <td>{$row['english']} </td>";
			echo " <td>{$row['physics']} </td>";
			echo " <td>{$row['biology']} </td>";
			echo " <td>{$row['chemistry']} </td>";
			echo " <td>{$row['computer_studies']} </td>";
			echo "</tr>";
		}
	}

?>