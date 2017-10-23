<?php
	$conn = mysqli_connect("localhost","root","wenny673","yyt_info");
	if (!$conn)
	{
		die('Could not connect: ' . mysqli_error());
	}
	
	$sql="INSERT INTO diagnosis (pation_ID,symptom,conclu,diag_time,doc_name) VALUES('20002','恶心、厌油腻、食欲差、全身乏力;肝区不适和肝区疼痛;牙龈出血','患有较严重的肝病','2011-05-06','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success2";
	} else {
		echo "<br>Error2: " . $sql . "<br>" . mysqli_error($conn);
	}
	
/*	$sql="INSERT INTO diagnosis (pation_ID,symptom,conclu,diag_time,doc_name) VALUES('20001','柏油便、肝脾肿大、牙龈出血、骨压痛、继发感染、眼底出血和渗出。容易发生青肿，点状出血，贫血，持续发烧，感染经久不愈。','白血病初期','2011-05-07','华佗')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success3";
	} else {
		echo "<br>Error3: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO diagnosis (pation_ID,symptom,conclu,diag_time,doc_name) VALUES('20002','上腹疼痛，疼痛多数无规律、腹胀、嗳气、反复出血','慢性浅表性胃炎','2012-05-06','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success4";
	} else {
		echo "<br>Error4: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO diagnosis (pation_ID,symptom,conclu,diag_time,doc_name) VALUES('20001','具有上腹痛、上腹胀、早饱、嗳气、食欲不振、恶心、呕吐等上腹不适症状；排除肝胃疾病','功能性消化不良','2012-08-06','华佗')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success5";
	} else {
		echo "<br>Error5: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO diagnosis (pation_ID,symptom,conclu,diag_time,doc_name) VALUES('20003','膝关节过伸，膝关节屈曲受限，股四头肌紧张呈挛缩状，髂胫束紧张','先天性膝关节脱位早期','2012-08-06','华佗')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success6";
	} else {
		echo "<br>Error6: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO diagnosis (pation_ID,symptom,conclu,diag_time,doc_name) VALUES('20004','膝关节过伸，膝关节屈曲受限，股四头肌紧张呈挛缩状，髂胫束紧张','先天性膝关节脱位早期','2012-08-06','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success7";
	} else {
		echo "<br>Error7: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);*/
?>