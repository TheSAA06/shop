<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'shop');
	$zapros = mysqli_query($connect, "SELECT * FROM items");
	$zapros_vstavit = mysqli_query($connect, "INSERT INTO items (title, desk, price, img) VALUES ('{$_GET['title']}', '{$_GET['desk']}', '{$_GET['price']}', '{$_GET['img']}')");
	header("Location: index.php");
?>