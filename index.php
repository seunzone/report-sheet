<!DOCTYPE html>
<html>
<head>
<!-- CSS FILES -->
<link rel="stylesheet" href="css/main.css"/>


</head>


<body>
<hr>
	
	<div class="myDiv" align="center">


	 
	
		<h1>Enter Students Results Here</h1>
			<form action="logics/store_report.php" method="POST">
				<table class="imagetable">
					  <tr>
						<th>Name</th>
						<th>Maths</th>
						<th>English</th>
						<th>Physics</th>
						<th>Biology</th>
						<th>Chemistry</th>
						<th>Computer Studies</th>
					  </tr>
					  <tr>
						<td>
							<input type="text" name="name" required>
						</td>
						<td>
							<input type="number" name="maths" required>
						</td>
						<td>
							<input type="number" name="english" required>
						</td>
						<td>
							<input type="number" name="physics" required>
						</td>
						<td>
							<input type="number" name="chemistry" required>
						</td>
						<td>
							<input type="number" name="biology" required>
						</td>
						<td>
							<input type="number" name="computer" required>
						</td>
					  </tr>
				</table><br>

				<button class="myButton">Submit Student Record</button>
			</form>
		<hr>
			
		</div>
</body>

</html> 