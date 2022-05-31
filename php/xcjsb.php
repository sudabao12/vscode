<?php 
include("common.php");
$search='';
$key=isset($_GET['key'])?$_GET['key']:'';
if($key!=''){
	$search.= " where xsxm like '%".$key."%' or sjxm like '%".$key."%' or jsdz like '%".$key."%' or jssj like '%".$key."%' or xb like '%".$key."%'";
}

    $sql = "select * from xcjsb ".$search." order by id asc";
	$result = mysql_query($sql);
	$rows = @mysql_num_rows($result);	

	if(isset($_GET['action']) && $_GET['action']=='delete'){
	    $sql = "delete from xcjsb where id =".$_GET['id']."";
		$result = mysql_query($sql);
		$rows=@mysql_affected_rows();
		if($rows<1){
			echo "<script>alert('删除失败！');window.location.href='xcjsb.php';</script>";
		}else{
			echo "<script>alert('删除成功！');window.location.href='xcjsb.php';</script>";
		}
	}

?>

 <div class="fr righter">
		  <div class="title">
		   校车接送信息管理
	      </div>
		  
		  <div class="search">
			  <form action="#" method="get" class="fl">
					<input type="text" name="key" value="<?php echo $key ?>"/>
					<input type="submit" value="搜索">
			  </form>
			  
		  </div>

		  <table class="xx">
		  <tr>
				  <th>学生姓名</th>
				  <th>司机姓名</th>
				  <th>接送地址</th>
				  <th>接送时间</th>
				  <th>操作</th>
			  </tr>
			  <?php
			  while($xcjsb=mysql_fetch_array($result)){
				echo "<tr>";
				echo '<td>'.$xcjsb['xsxm'].'</td>';
				echo '<td>'.$xcjsb['sjxm'].'</td>';
				echo '<td>'.$xcjsb['jsdz'].'</td>';
				echo '<td>'.$xcjsb['jssj'].'</td>';
				echo '<td><a href="xcjsb_xg.php?id='.$xcjsb['id'].'">修改</a> ';
				echo ' <a href="xcjsb.php?action=delete&id='.$xcjsb['id'].'">删除</a></td>';
				echo "</tr>";
		      }
			  ?>
		  </table>

	  </div>
  </div>
  
 </body>
</html>
 

