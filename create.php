<?php

	$conn = mysqli_connect("localhost", "root", "", "to_do_list");

	if (isset($_POST["submit"])) {

		global $conn;

		$activity = $_POST["activity"];
		$date = $_POST["date"];

		$result = mysqli_query($conn, "INSERT INTO activity(activity, date) VALUES('$activity', '$date')");

		header("Location: index.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>

		body {
			margin: 0;
			padding: 0;
			/*border: 1px solid black;*/
			font-family: monospace; 
		}

		.container {
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			/*border: 1px solid black;*/
		}

		.to-do-list {
			border: 1px solid black;
			width: 300px;
			padding: 20px;
			height: 330px;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 10px;
		}

		h1 {
			text-align: center;
			font-family: monospace;
		}

		.activity {
			width: 100%;
			/*border: 1px solid red;*/
			font-family: monospace;
			display: grid;
			grid-template-columns: 171px 100px 29px;
		}

		.act {
			padding: 10px;
		}
		.input {
			padding: 10px;
			/*border: 1px solid yellow;*/
			display: flex;
			align-items: center;
			justify-content: center;
		}

		a {
			text-decoration: none;
			color: black;
		}

		button {
			width: 57px;
			height: 42px;
			/*border-radius: 5px;*/
			font-size: 30px;
			text-align: center;
			display: flex;
			justify-content: center;
			align-items: center;
			border: none;
			outline: none;
			margin: auto;
			position: relative;
			bottom: 42px;
			left: 104px;
			border: 6px solid black;
			cursor: pointer;
			background-color: black;
			color: white;
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
		}

		label {
			background-color: black;
			color: white;
			padding: 10px;
			border: none;
			border: 1px solid black;
			border-top-left-radius: 5px;
			border-bottom-left-radius: 5px;
		}

		/*input {
			padding: 3px;
		}*/


		.act {
			position: relative;
			right: 7px;
			border: none;
			border: .5px solid black;
			outline: none;
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
		}

		.date-act {
			position: relative;
			right: 2px;
			border: none;
			border: .5px solid black;
			outline: none;
		}

		.date {
			width: 1000px;
			border: 3.5px solid black;
		}

	</style>
</head>
<body>

	<div class="container">
		
		<div class="to-do-list">

			<div class="to-do">

				<h1>To Do List</h1>

				<form action="create.php" method="POST">

					<table cellspacing="10" cellpadding="0">

						
								
					
								
							<tr>
								<td>
									<label for="">Activity</label>
									<input type="text" class="act" name="activity">
								</td>
							</tr>
							<tr>
								<td>
									<label for="" class="date">Date</label>
									<input type="date" class="act" name="date">
									<button type="submit" name="submit">+</button>
								</td>
							</tr>



				

						
						
					</table>

				</form>
				
				<!-- <a href="#"><button onclick="alert('Clicked');">+</button></a> -->
			</div>

		</div>

	</div>
	
</body>
</html>