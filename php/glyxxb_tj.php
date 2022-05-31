<?php 
include("common.php");
if(isset($_POST['submit'])){
	$zh = $_POST['zh'];
    $mm = $_POST['mm'];
	$xm = $_POST['xm'];
	
	$sql = "insert into glyxxb (zh,mm,xm) values ('$zh','$mm','$xm')";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('添加失败！');window.location.href='glyxxb.php';</script>";
	}else{
		echo "<script>alert('添加成功！');window.location.href='glyxxb.php';</script>";
	}
}
?>

 <div class="fr righter">
		  <div class="title">
		   添加管理员信息
	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		      <tr>
				  <td>帐号</td>
				  <td><input type="text" name="zh" /></td>
			  </tr>
			  <tr>
				  <td>密码</td>
				  <td><input type="password" name="mm" /></td>
			  </tr>
			  <tr>
				  <td>姓名</td>
				  <td><input type="text" name="xm" /></td>
			  </tr>
			  
			  <tr>
				  <td colspan=2><input type="submit" name="submit" value="添加"/></td>
			  </tr>
		  </form>
		  </table>

	  </div>
  </div>
  
 </body>
</html>
 

