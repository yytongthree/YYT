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
	
	$sql="INSERT INTO prescription (username,PN,MCD,MN,UAD,tabu,AR,notes,count,docter) VALUES('蔡恒公','颈椎病方','2011-05-05','川芎','水煎服，1日2次','1.阴虚火旺、气升痰喘、上盛下虚及气弱之人忌服，月经过多、出血性疾病及怀孕的妇女谨慎使用。2.川芎不可以和黄连、黄芪、山茱萸、狼毒，畏硝石、滑石，反藜芦等一起食用，所以，以上均不能一同使用。还有不可以过量使用，否则会回出现呕吐、眩晕等症状。3.火剧中满，脾虚食少，火郁头痛，呕吐咳嗽， 盗汗咽干口燥，发热作渴烦躁等症状的人群均不能食用，会对身体产生严重的副作用。','呕吐、眩晕等症状','请谨遵遗嘱','15g','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success5";
	} else {
		echo "<br>Error5: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO prescription (username,PN,MCD,MN,UAD,tabu,AR,notes,count,docter) VALUES('蔡恒公','颈椎病方','2011-05-05','黄芪','水煎服，1日2次','肾虚慎用黄芪','呕吐、眩晕等症状','请谨遵遗嘱','30g','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success6";
	} else {
		echo "<br>Error6: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO prescription (username,PN,MCD,MN,UAD,tabu,AR,notes,count,docter) VALUES('蔡恒公','颈椎病方','2011-05-05','桂枝','水煎服，1日2次','在风温等热性传染病时，有高热、脉洪大而汗不出者，不宜用桂枝，如果错用了，即使只用上0.6~0.9g，也会引起鼻出血。至于原来已有口舌干燥、吐血、咯血等所谓内火的患者，更不宜用桂枝。','引起体内虚火','请谨遵遗嘱','10g','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success7";
	} else {
		echo "<br>Error7: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO prescription (username,PN,MCD,MN,UAD,tabu,AR,notes,count,docter) VALUES('蔡恒公','腰脱方','2011-05-06','熟地','水煎服，1日2次','凡脾胃虚弱、气滞痰多，脘腹胀满及食少便溏者忌服；脾虚痰多气郁之人慎服；服用时萝卜、葱白、韭白、薤白均不可食用','腹泻、腹痛、疲乏、心悸、面部痒、圆形风团、颈部向躯干及四肢蔓延，皮疹高出皮肤表面，散在分布。','请谨遵遗嘱','20g','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success8";
	} else {
		echo "<br>Error8: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO prescription (username,PN,MCD,MN,UAD,tabu,AR,notes,count,docter) VALUES('蔡恒公','腰脱方','2011-05-06','山药','水煎服，1日2次','糖尿病患者不可多食；爱吃火锅的人最好少吃山药；忌怀小苏打等碱性药；便秘者少食','吃太多山药也可能造成子宫内膜增生','请谨遵遗嘱','15g','扁鹊')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success9";
	} else {
		echo "<br>Error9: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO prescription (username,PN,MCD,MN,UAD,tabu,AR,notes,count,docter) VALUES('曹操','加味桃红四味汤','2011-05-05','当归','水煎服，1日2次','1.湿阻中满及大便溏泄者慎服。畏葛蒲、海藻、牧蒙、生姜。热盛出血患者禁服，湿盛中满及大便溏泄者慎服。不宜於多痰、邪热、火嗽诸症','过敏反应 有报道复方当归注射液穴位注射引起过敏性休克。','过量口服当归煎剂、散剂偶有疲倦、嗜睡等反应，停药后可消失。当归挥发油穴位注射可使病人出现发热、头痛、口干、恶心等反应，可自行缓解。大剂量给药，会导致血压下降，剂量再加大则血压骤降，呼吸停止。当归乙醚提出物毒性较强，少量即可造成死亡。','10g','华佗')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success10";
	} else {
		echo "<br>Error10: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO prescription (username,PN,MCD,MN,UAD,tabu,AR,notes,count,docter) VALUES('曹操','加味桃红四味汤','2011-05-05','赤芍','水煎服，1日2次','血虚者慎服；不宜与藜芦同用。','过量口服当归煎剂、散剂偶有疲倦、嗜睡等反应，停药后可消失。当归挥发油穴位注射可使病人出现发热、头痛、口干、恶心。当归乙醚提出物毒性较强，少量即可造成死亡。','请谨遵遗嘱','10g','华佗')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success11";
	} else {
		echo "<br>Error11: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO prescription (username,PN,MCD,MN,UAD,tabu,AR,notes,count,docter) VALUES('曹操','心绞痛','2011-05-06','立普妥','每日一次','血虚者慎服；不宜与藜芦同用。','过量口服当归煎剂、散剂偶有疲倦、嗜睡等反应，停药后可消失。当归挥发油穴位注射可使病人出现发热、头痛、口干、恶心。当归乙醚提出物毒性较强，少量即可造成死亡。','请进遵医嘱','20mg','华佗')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success12";
	} else {
		echo "<br>Error12: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO inha_info (inha_ID,name,sex,age,num,addr,height,weight,TZZS,HR,BP,BG,BMD,SS,INPR,hear) VALUES('20003','刘备','男','40','12345678910','蜀国','175','50','18.5','90','95/65','4.5','0.5','5.2','16','15')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success13";
	} else {
		echo "<br>Error13: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO inha_info (inha_ID,name,sex,age,num,addr,height,weight,TZZS,HR,BP,BG,BMD,SS,INPR,hear) VALUES('20004','秦襄王','男','60','12345678910','秦国','185','70','17','90','95/65','4.5','-0.5','5.2','16','15')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success14";
	} else {
		echo "<br>Error14: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO doc_inha (doc_ID,doc_name,inha_ID,inha_name) VALUES('30001','华佗','20001','曹操')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success15";
	} else {
		echo "<br>Error15: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO doc_inha (doc_ID,doc_name,inha_ID,inha_name) VALUES('30001','华佗','20003','刘备')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success16";
	} else {
		echo "<br>Error16: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO doc_inha (doc_ID,doc_name,inha_ID,inha_name) VALUES('30002','扁鹊','20002','蔡恒公')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success17";
	} else {
		echo "<br>Error17: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql="INSERT INTO doc_inha (doc_ID,doc_name,inha_ID,inha_name) VALUES('30002','扁鹊','20004','秦襄王')";
	if(mysqli_query($conn,$sql))
   {
		echo "<br>success18";
	} else {
		echo "<br>Error18: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	?>