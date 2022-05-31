<?php 
include("common.php");
$search='';
$key=isset($_GET['key'])?$_GET['key']:'';
if($key!=''){
	$search.= " where xsxm like '%".$key."%' or xb like '%".$key."%' or zw like '%".$key."%' or jsfs like '%".$key."%' or zzxm like '%".$key."%'";
}

    $sql = "select * from xsxxb ".$search." order by id asc";
	$result = mysql_query($sql);
	$rows = @mysql_num_rows($result);	

	if(isset($_GET['action']) && $_GET['action']=='delete'){
	    $sql = "delete from xsxxb where id =".$_GET['id']."";
		$result = mysql_query($sql);
		$rows=@mysql_affected_rows();
		if($rows<1){
			echo "<script>alert('删除失败！');window.location.href='xsxxb.php';</script>";
		}else{
			echo "<script>alert('删除成功！');window.location.href='xsxxb.php';</script>";
		}
	}

?>

 <div class="fr righter">
		  <div class="title">
		  学生信息管理
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
				  <th>性别</th>
				  <th>校内编号</th>
				  <th>家长姓名</th>
				  <th>接送方式</th>
				  <th>出生日期</th>

				  <th>操作</th>
			  </tr>
			  <?php
			  while($xsxxb=mysql_fetch_array($result)){
				echo "<tr>";
				echo '<td>'.$xsxxb['xsxm'].'</td>';
				echo '<td>'.$xsxxb['xb'].'</td>';
				echo '<td>'.$xsxxb['xnbh'].'</td>';
				echo '<td>'.$xsxxb['zzxm'].'</td>';
				echo '<td>'.$xsxxb['jsfs'].'</td>';
				echo '<td>'.$xsxxb['csrq'].'</td>';
				echo '<td> <a href="xsxxb_xg.php?id='.$xsxxb['id'].'">修改</a> ';
				echo ' <a href="xsxxb.php?action=delete&id='.$xsxxb['id'].'">删除</a></td>';
				echo "</tr>";
		      }
			  ?>
		  </table>

	  </div>
  </div>
  
 </body>
</html>
 

