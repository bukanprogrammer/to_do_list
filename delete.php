<?php

	$conn = mysqli_connect("localhost", "root", "", "to_do_list");

	$id = $_GET["id"];

	$result = mysqli_query($conn, "DELETE FROM activity WHERE id=$id");

	header("Location: index.php")

?>