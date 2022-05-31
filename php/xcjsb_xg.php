<?php 
include("common.php");
$id=$_GET['id'];
$sql1 = "select * from xcjsb where id='$id'";
$res = mysql_query($sql1);
$xcjsb=mysql_fetch_array($res);
if(isset($_POST['submit'])){
	$xsxm = $_POST['xsxm'];
    $sjxm = $_POST['sjxm'];
	$jsdz = $_POST['jsdz'];
	$jssj = $_POST['jssj'];
	$sql = "update xcjsb set xsxm='$xsxm',sjxm='$sjxm',jsdz='$jsdz',jssj='$jssj' where id='$id'";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('修改失败！');window.location.href='xcjsb.php';</script>";
	}else{
		echo "<script>alert('修改成功！');window.location.href='xcjsb.php';</script>";
	}

}

?>

 <div class="fr righter">
		  <div class="title">
		   修改校车接送信息
	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		  <tr>
				  <td>学生姓名</td>
				  <td><input type="text" name="xsxm"  value="<?php echo $xcjsb['xsxm']?>"/></td>
			  </tr>
			  <tr>
				  <td>司机姓名</td>
				  <td><input type="text" name="sjxm"  value="<?php echo $xcjsb['sjxm']?>"/></td>
			  </tr>		      <tr>
				  <td>接送地址</td>
				  <td><input type="text" name="jsdz"  value="<?php echo $xcjsb['jsdz']?>"/></td>
			  </tr>
			  <tr>
				  <td>接送时间</td>
				  <td><input type="text" name="jssj"  value="<?php echo $xcjsb['jssj']?>"/></td>
			  </tr>
			  <tr>
				  <td colspan=2><input type="submit" name="submit" value="修改"/></td>
			  </tr>
		  </form>
		  </table>

	  </div>
  </div>
  
 </body>
</html>
 

