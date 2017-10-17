<?php
	$conn = mysqli_connect("localhost","root","wenny673","yyt_info");
	if (!$conn)
	{
		die('Could not connect: ' . mysqli_error());
	}
	
	$sql="INSERT INTO docter_info (doc_ID,name,sex,age,num,GS,awards,RA,SN) VALUES('30001','华佗','男','50','12345678910','外科','神医','武侯区','8')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success1";
	} else {
		echo "<br>Error1: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO docter_info (doc_ID,name,sex,age,num,GS,awards,RA,SN) VALUES('30002','扁鹊','男','40','12345678910','内科','医圣','双流区','8')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success2";
	} else {
		echo "<br>Error2: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO inha_info (inha_ID,name,sex,age,num,addr,height,weight,TZZS,HR,BP,BG,BMD,SS,INPR,hear) VALUES('20001','曹操','男','45','12345678910','魏国','180','60','18.5','90','95/65','4.5','0','5.2','16','15')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success3";
	} else {
		echo "<br>Error3: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO inha_info (inha_ID,name,sex,age,num,addr,height,weight,TZZS,HR,BP,BG,BMD,SS,INPR,hear) VALUES('20002','蔡恒公','男','45','12345678910','蔡国','180','60','18.5','90','95/65','4.5','0','5.2','16','15')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success4";
	} else {
		echo "<br>Error4: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	?>