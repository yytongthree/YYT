<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="../css/font_eolqem241z66flxr.css" media="all" />
	<link rel="stylesheet" href="../css/news.css" media="all" />
<title>无标题文档</title>
</head>

<body>
<?php
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
?>
<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div>
        </blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">
		    <colgroup>
				<col width="20%">
				<col width="80%">
                 </colgroup>

            <?php
			if(mysqli_num_rows($result)>0){  
         //如果返回的数据集行数大于0，则开始以表格的形式显示   
         while($row=mysqli_fetch_row($result)){ ?>
         <thead>
				<caption><big><b><? echo $row[1];?>的身体数据</b></big></caption>
				<tr>
					<th>项目</th>
					<th>内容</th>
				</tr> 
		    </thead>
		    <tbody>
			 <tr>
			 <td>身高(height)</td><td><?php echo $row[6];?></td><td>cm</td>
             </tr>
             <tr>
			 <td>体重(weight)</td><td><?php echo $row[7];?></td><td>kg</td>
             </tr> 
			 <tr>
			 <td>BMI指数(TZZS)</td><td><?php echo $row[8]?></td><td>kg/m²</td>
             </tr>
             <tr>
			 <td>心率(HR)</td><td><?php echo $row[9];?></td><td>bpm</td>
             </tr>
			 <tr>
			 <td>血压(BP)</td><td><?php echo $row[10];?></td><td>mmHg</td>
             </tr>
             <tr>
			 <td>血糖(BG)</td><td><?php echo $row[11];?></td><td>mmol/L</td>
             </tr> 
			 <tr>
			 <td>骨质密度(BMD)</td><td><?php echo $row[12];?></td><td>g/cm³</td>
             </tr>
             <tr>
			 <td>视力(SS)</td><td><?php echo $row[13];?></td><td>（无单位）</td>
             </tr>
			 <tr>
			 <td>眼压(INPR)</td><td><?php echo $row[14];?></td><td>mmHg</td>
             </tr>
             <tr>
			 <td>听力(hear)</td><td><?php echo $row[15];?></td><td>dB</td>
             </tr>
<?php
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
            </tbody>
		</table>
</body>
</html>