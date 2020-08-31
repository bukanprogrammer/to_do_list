<?php

	$conn = mysqli_connect("localhost", "root", "", "to_do_list");

	$result = mysqli_query($conn, "SELECT * FROM activity");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>To Do List</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<style>

		::-webkit-scrollbar {
		  width: 10px;

		}

		::-webkit-scrollbar-track {
		  background: #f1f1f1; 
		  border-top-right-radius: 10px;
		  border-bottom-right-radius: 10px;
		}
		 
		::-webkit-scrollbar-thumb {
		  background: #555; 
		  border-top-right-radius: 7px;
		  border-bottom-right-radius: 6px;
		  border-bottom-left-radius: 6px;
		}

		::-webkit-scrollbar-thumb:hover {
		  background: #555; 
		}

		body {
			margin: 0;
			padding: 0;
			/*border: 1px solid black;*/
		}

		.container {
			display: flex;
			align-items: center;
			justify-content: center;
			/*border: 1px solid black;*/
			width: 100%;
			height: 100vh;
		}

		.to-do-list {
			border: 1px solid black;
			width: 300px;
			height: 330px;
			padding: 20px;
			border-radius: 10px;
			overflow-y: scroll;
			/*position: relative;
			left: 33px;*/
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

		.date {
			/*border: 1px solid red;*/
			padding: 10px;
			display: flex;
			align-items: center;
			justify-content: center;
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
			background-color: #1e272e;
			color: white;
			width: 40px;
			height: 40px;
			border-radius: 50%;
			font-size: 30px;
			text-align: center;
			display: flex;
			justify-content: center;
			align-items: center;
			border: none;
			outline: none;
			/*margin: auto;*/
			position: relative;
			margin-top: 40px;
			/*border: 1px solid black;*/
			cursor: pointer;
			float: right;
		}

	</style>
</head>
<body>

	<div class="container">

	
		
		<div class="to-do-list">

			<h1>To Do List with PHP</h1>

			<form action="index.php" method="_POST">

				<table>

					<?php while ($activity = mysqli_fetch_assoc($result)) : ?>

					
							
							<div class="activity">
								<p class="act"><?= $activity["activity"] ?></p> 
								<div class="date"><?= $activity["date"] ?></div>
								<div class="input">
									<?= "<a href='delete.php?id=$activity[id]'><i class='fa fa-trash-alt' style='color: red;'></i></a>" ?>
								</div>
							</div>

							
			

					<?php endwhile ?>
					
				</table>

			</form>


			<a href="create.php"><button>+</button></a>

			
		</div>

	</div>

	</div>
	
</body>
</html>