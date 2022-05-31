<?php 
include("common.php");


    $sql = "select * from glyxxb  order by id asc";
	$result = mysql_query($sql);
	$rows = @mysql_num_rows($result);	

	if(isset($_GET['action']) && $_GET['action']=='delete'){
	    $sql = "delete from glyxxb where id =".$_GET['id']."";
		$result = mysql_query($sql);
		$rows=@mysql_affected_rows();
		if($rows<1){
			echo "<script>alert('删除失败！');window.location.href='glyxxb.php';</script>";
		}else{
			echo "<script>alert('删除成功！');window.location.href='glyxxb.php';</script>";
		}
	}

?>

 <div class="fr righter">
		  <div class="title">
		   管理员信息管理
	      </div>
		  
		  

		  <table class="xx">
			  <tr>
				  <th>帐号</th>
				  <th>密码</th>
				  <th>姓名</th>				 
				  <th>操作</th>
			  </tr>
			  <?php
			  while($glyxxb=mysql_fetch_array($result)){
				echo "<tr>";
				echo '<td>'.$glyxxb['zh'].'</td>';
				echo '<td>'.$glyxxb['mm'].'</td>';
				echo '<td>'.$glyxxb['xm'].'</td>';
				echo '<td><a href="glyxxb _xg.php?id='.$glyxxb['id'].'">修改</a> ';
				echo ' <a href="glyxxb.php?action=delete&id='.$glyxxb['id'].'">删除</a></td>';
				echo "</tr>";
		      }
			  ?>
		  </table>

	  </div>
  </div>
  
 </body>
</html>
 

