<?php
	$conn = mysqli_connect("localhost","root","wenny673","yyt_info");
	if (!$conn)
	{
		die('Could not connect: ' . mysqli_error());
	}
	

	
	$sql="INSERT INTO cookbook (username,weekday,notes,content,docter) VALUES('曹操','周五','早餐','花卷，米粥，鸡蛋','华佗')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success45";
	} else {
		echo "<br>Error45: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO cookbook (username,weekday,notes,content,docter) VALUES('曹操','周五','午餐','馒头，香菇炒豆腐，鱼丸汤，肉末炒豆角','华佗')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success46";
	} else {
		echo "<br>Error46: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO cookbook (username,weekday,notes,content,docter) VALUES('曹操','周五','晚餐','米饭，醋溜土豆丝，炒空心菜，冬瓜骨头汤','华佗')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success47";
	} else {
		echo "<br>Error47: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>