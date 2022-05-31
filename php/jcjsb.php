<?php 
include("common.php");
$search='';
$key=isset($_GET['key'])?$_GET['key']:'';
if($key!=''){
	$search.= " where bh like '%".$key."%' or xm like '%".$key."%' or zw like '%".$key."%' or szdw like '%".$key."%' or rzjtcygx like '%".$key."%'";
}

    $sql = "select * from jcjsb ".$search." order by id asc";
	$result = mysql_query($sql);
	$rows = @mysql_num_rows($result);	

	if(isset($_GET['action']) && $_GET['action']=='delete'){
	    $sql = "delete from jcjsb where id =".$_GET['id']."";
		$result = mysql_query($sql);
		$rows=@mysql_affected_rows();
		if($rows<1){
			echo "<script>alert('删除失败！');window.location.href='jcjsb.php';</script>";
		}else{
			echo "<script>alert('删除成功！');window.location.href='jcjsb.php';</script>";
		}
	}

?>

 <div class="fr righter">
		  <div class="title">
		   家长接送管理
	      </div>
		  
		  <div class="search">
			  <form action="#" method="get" class="fl">
					<input type="text" name="key" value="<?php echo $key ?>"/>
					<input type="submit" value="搜索">
			  </form>
			  
		  </div>

		  <table class="xx">
		  <tr>
				  <th>家长成员关系</th>
				  <th>联系方式</th>
				  <th>所在单位</th>
				  <th>家庭住址</th>
				  <th>家长姓名</th>

				  <th>操作</th>
			  </tr>
			  <?php
			  while($jcjsb=mysql_fetch_array($result)){
				echo "<tr>";
				echo '<td>'.$jcjsb['jtcygx'].'</td>';
				echo '<td>'.$jcjsb['lxfs'].'</td>';
				echo '<td>'.$jcjsb['szdw'].'</td>';
				echo '<td>'.$jcjsb['jtzc'].'</td>';
				echo '<td>'.$jcjsb['jzxm'].'</td>';

				echo '<td> <a href="jcjsb_xg.php?id='.$jcjsb['id'].'">修改</a> ';
				echo ' <a href="jcjsb.php?action=delete&id='.$jcjsb['id'].'">删除</a></td>';
				echo "</tr>";
		      }
			  ?>
		  </table>

	  </div>
  </div>
  
 </body>
</html>
 

