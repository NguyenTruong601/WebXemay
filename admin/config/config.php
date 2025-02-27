<?php
	$connect = mysqli_connect('localhost', 'root', 'manhtruong123', 'web_banxemay');
	if(mysqli_error($connect))
	{
		die("Kết nối thất bại ! " . mysqli_error($connect));
	}
?>