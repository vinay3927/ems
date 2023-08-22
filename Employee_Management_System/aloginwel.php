<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName FROM employee";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | Faculty Leave System</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>Faculty Leave System</h1>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Faculty</a></li>
				<li><a class="homeblack" href="viewemp.php">View Faculty</a></li>
				<li><a class="homeblack" href="search2.php">Search Faculty</a></li>
				
				<li><a class="homeblack" href="empleave.php">Faculty Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Faculty Leaderboard </h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					//echo "<td>".$employee['points']."</td>";
					
					$seq+=1;
				}


			?>

		<!--</table>

		<div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color: white"> Reset Points</button>
		</div>
-->
		
	</div>
</body>
</html>