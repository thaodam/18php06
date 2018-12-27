<?php 
	include 'connect_db.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM products WHERE id = $id";
	if (mysqli_query($conn, $sql) === TRUE) {
		header("Location: list_product.php");
	}
?>