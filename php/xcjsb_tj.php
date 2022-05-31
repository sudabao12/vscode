<?php 
include("common.php");
if(isset($_POST['submit'])){
	$xsxm = $_POST['xsxm'];
    $sjxm = $_POST['sjxm'];
	$jsdz = $_POST['jsdz'];
	$jssj = $_POST['jssj'];
	$sql = "insert into xcjsb (xsxm,sjxm,jsdz,jssj) values ('$xsxm','$sjxm','$jsdz','$jssj')";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('添加失败！');window.location.href='xcjsb.php';</script>";
	}else{
		echo "<script>alert('添加成功！');window.location.href='xcjsb.php';</script>";
	}

}

?>

 <div class="fr righter">
		  <div class="title">
		   添加校车接送信息
	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		      <tr>
				  <td>学生姓名</td>
				  <td><input type="text" name="xsxm" /></td>
			  </tr>
			  <tr>
				  <td>司机姓名</td>
				  <td><input type="text" name="sjxm" /></td>
			  </tr>
			  <tr>
				  <td>接送地址</td>
				  <td><input type="text" name="jsdz" /></td>
			  </tr>
			  <tr>
				  <td>接送时间</td>
				  <td><input type="text" name="jssj" /></td>
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
 

