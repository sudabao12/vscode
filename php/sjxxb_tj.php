<?php 
include("common.php");
if(isset($_POST['submit'])){
	$sjxm = $_POST['sjxm'];
    $xb = $_POST['xb'];
	$jtzz = $_POST['jtzz'];
	$jsnl = $_POST['jsnl'];
	$sql = "insert into sjxxb (sjxm,xb,jtzz,jsnl) values ('$sjxm','$xb','$jtzz','$jsnl')";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('添加失败！');window.location.href='sjxxb.php';</script>";
	}else{
		echo "<script>alert('添加成功！');window.location.href='sjxxb.php';</script>";
	}

}

?>

 <div class="fr righter">
		  <div class="title">
		   添加司机信息表
	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		      <tr>
				  <td>司机姓名</td>
				  <td><input type="text" name="sjxm" /></td>
			  </tr>
			  <tr>
				  <td>性别</td>
				  <td><input type="text" name="xb" /></td>
			  </tr>
			  <tr>
				  <td>家庭住址</td>
				  <td><input type="text" name="jtzz" /></td>
			  </tr>
			  <tr>
				  <td>驾驶年龄</td>
				  <td><input type="text" name="jsnl" /></td>
			  </tr>		 
			  <tr>
			  <tr>
				  <td colspan=2><input type="submit" name="submit" value="添加"/></td>
			  </tr>
		  </form>
		  </table>

	  </div>
  </div>
  
 </body>
</html>
 

