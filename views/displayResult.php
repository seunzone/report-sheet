<!DOCTYPE html>
<html>
<head>
<!-- CSS FILES -->
<link rel="stylesheet" href="../css/main.css"/>


</head>


<body>
<hr>
	
	<div class="myDiv" align="center">


	 
	
		<h1>Students Results Sheet</h1>
			
				<table class="imagetable">
					  <tr>
						<th>Names</th>
						<th>Maths</th>
						<th>English</th>
						<th>Physics</th>
						<th>Biology</th>
						<th>Chemistry</th>
						<th>Computer Studies</th>
						
					  </tr>
					  <tr>
						
							<?php
								require"../logics/functions.php";
								display_results();
							?>
						
						
					  </tr>


					 
				</table><br>

				<a href="http://localhost/movement/report-sheet/">
					<button class="myButton" >Go back Home</button>
				</a>
			
		<hr>
			
		</div>
</body>

</html> 