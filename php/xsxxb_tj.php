<?php 
include("common.php");
if(isset($_POST['submit'])){
	$xsxm = $_POST['xsxm'];
    $xb = $_POST['xb'];
	$xnbh = $_POST['xnbh'];
	$zzxm = $_POST['zzxm'];
	$jsfs = $_POST['jsfs'];
	$csrq = $_POST['csrq'];

	$sql = "insert into xsxxb (xsxm,xb,xnbh,zzxm,jsfs,csrq) values ('$xsxm','$xb','$xnbh','$zzxm','$jsfs','$csrq')";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('添加失败！');window.location.href='xsxxb.php';</script>";
	}else{
		echo "<script>alert('添加成功！');window.location.href='xsxxb.php';</script>";
	}

}

?>

 <div class="fr righter">
		  <div class="title">
		  添加学生信息

	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		      <tr>
				  <td>学生姓名</td>
				  <td><input type="text" name="xsxm" /></td>
			  </tr>
			  <tr>
				  <td>性别</td>
				  <td><input type="text" name="xb" /></td>
			  </tr>
			  <tr>
				  <td>校内编号</td>
				  <td><input type="text" name="xnbh" /></td>
			  </tr>
			  <tr>
				  <td>家长姓名</td>
				  <td><input type="text" name="zzxm" /></td>
			  </tr>		      <tr>
				  <td>接送方式</td>
				  <td><input type="text" name="jsfs" /></td>
			  </tr>
			  <tr>
				  <td>出生日期</td>
				  <td><input type="text" name="csrq" /></td>
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
 

