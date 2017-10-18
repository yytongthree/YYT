<?php  
 	session_start();
     //连接数据库的参数  
     $host = "localhost";  
     $user = "root";  
     $pass = "wenny673";  
     $db = "yyt_info";  
     //创建一个mysql连接  
     $connection = mysqli_connect($host, $user, $pass,$db) or die("Unable to connect!");   
     //开始查询  
     $query = "SELECT * FROM inha_info WHERE nickname='{$_SESSION['username']}'";  
     //执行SQL语句  
     $result = mysqli_query($connection,$query) or die("Error in query: $query. ".mysqli_error());  
     //显示返回的记录集行数  
     if(mysqli_num_rows($result)>0){  
         //如果返回的数据集行数大于0，则开始以表格的形式显示  
         echo "<table cellpadding=10 border=1>";  
         while($row=mysqli_fetch_row($result)){  
			 echo "<tr>"; 
			 echo "<td>身高(height)</td><td>".$row[6]."</td><td>cm</td>";
			 echo "<td>体重(weight)</td><td>".$row[7]."</td><td>kg</td>";
             echo "</tr>"; 
			 echo "<tr>"; 
			 echo "<td>BMI指数(TZZS)</td><td>".$row[8]."</td><td>kg/m²</td>";
			 echo "<td>心率(HR)</td><td>".$row[9]."</td><td>bpm</td>";
             echo "</tr>"; 
			 echo "<tr>"; 
			 echo "<td>血压(BP)</td><td>".$row[10]."</td><td>mmHg</td>";
			 echo "<td>血糖(BG)</td><td>".$row[11]."</td><td>mmol/L</td>";
             echo "</tr>"; 
			 echo "<tr>"; 
			 echo "<td>骨质密度(BMD)</td><td>".$row[12]."</td><td>g/cm³</td>";
			 echo "<td>视力(SS)</td><td>".$row[13]."</td><td>（无单位）</td>";
             echo "</tr>"; 
			 echo "<tr>"; 
			 echo "<td>眼压(INPR)</td><td>".$row[14]."</td><td>mmHg</td>";
			 echo "<td>听力(hear)</td><td>".$row[15]."</td><td>dB</td>";
             echo "</tr>"; 
         }  
         echo "</table>";  
     }  
     else{  
         echo "记录未找到！";  
     }  
     //释放记录集所占用的内存  
     mysqli_free_result($result);  
     //关闭该数据库连接  
     mysqli_close($connection);  
 ?>