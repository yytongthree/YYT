<?php
	$conn = mysqli_connect("localhost","root","wenny673","yyt_info");
	if (!$conn)
	{
		die('Could not connect: ' . mysqli_error());
	}
	

	
	$sql="INSERT INTO cookbook (username,weekday,notes,content,docter) VALUES('蔡恒公','周日','早餐','花卷，牛奶，煮鸡蛋','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success7";
	} else {
		echo "<br>Error7: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO cookbook (username,weekday,notes,content,docter) VALUES('蔡恒公','周日','午餐','米饭，黑木耳炒鸡丁，糖醋白菜，南瓜汤','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success7";
	} else {
		echo "<br>Error7: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO cookbook (username,weekday,notes,content,docter) VALUES('蔡恒公','周日','晚餐','韭菜猪肉饺子，豆豉油麦菜，肉末炒豇豆','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success7";
	} else {
		echo "<br>Error7: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>