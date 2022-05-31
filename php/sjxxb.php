<?php 
include("common.php");
$search='';
$key=isset($_GET['key'])?$_GET['key']:'';
if($key!=''){
	$search.= " where sjxm like '%".$key."%' or xb like '%".$key."%' or zw like '%".$key."%' or jtzz like '%".$key."%' or ddje like '%".$key."%'";
}

    $sql = "select * from sjxxb ".$search." order by id asc";
	$result = mysql_query($sql);
	$rows = @mysql_num_rows($result);	

	if(isset($_GET['action']) && $_GET['action']=='delete'){
	    $sql = "delete from sjxxb where id =".$_GET['id']."";
		$result = mysql_query($sql);
		$rows=@mysql_affected_rows();
		if($rows<1){
			echo "<script>alert('删除失败！');window.location.href='sjxxb.php';</script>";
		}else{
			echo "<script>alert('删除成功！');window.location.href='sjxxb.php';</script>";
		}
	}

?>

 <div class="fr righter">
		  <div class="title">
		   司机信息表管理
	      </div>
		  
		  <div class="search">
			  <form action="#" method="get" class="fl">
					<input type="text" name="key" value="<?php echo $key ?>"/>
					<input type="submit" value="搜索">
			  </form>
			  
		  </div>

		  <table class="xx">
		  <tr>
				  <th>司机姓名</th>
				  <th>性别</th>
				  <th>家庭住址</th>
				  <th>驾驶年龄</th>
				  <th>操作</th>
			  </tr>
			  <?php
			  while($sjxxb=mysql_fetch_array($result)){
				echo "<tr>";
				echo '<td>'.$sjxxb['sjxm'].'</td>';
				echo '<td>'.$sjxxb['xb'].'</td>';
				echo '<td>'.$sjxxb['jtzz'].'</td>';
				echo '<td>'.$sjxxb['jsnl'].'</td>';
				echo '<td> <a href="sjxxb_xg.php?id='.$sjxxb['id'].'">修改</a> ';
				echo ' <a href="sjxxb.php?action=delete&id='.$sjxxb['id'].'">删除</a></td>';
				echo "</tr>";
		      }
			  ?>
		  </table>

	  </div>
  </div>
  
 </body>
</html>
 

