<?php 
include("common.php");
$id=$_GET['id'];
$spsql = "select * from sjxxb where id='$id'";
$spres = mysql_query($spsql);
$sjxxb=mysql_fetch_array($spres);
if(isset($_POST['submit'])){
	$sjxm = $_POST['sjxm'];
    $xb = $_POST['xb'];
	$jtzz = $_POST['jtzz'];
	$jsnl = $_POST['jsnl'];
	$sql = "update sjxxb set sjxm='$sjxm',xb='$xb',jtzz='$jtzz',jsnl='$jsnl' where id='$id'";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('修改失败！');window.location.href='sjxxb.php';</script>";
	}else{
		echo "<script>alert('修改成功！');window.location.href='sjxxb.php';</script>";
	}

}

?>

 <div class="fr righter">
		  <div class="title">
		   修改司机信息表
	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		      <tr>
				  <td>司机姓名</td>
				  <td><input type="text" name="sjxm"  value="<?php echo $sjxxb['sjxm']?>"/></td>
			  </tr>
			  <tr>
				  <td>性别</td>
				  <td><input type="text" name="xb"  value="<?php echo $sjxxb['xb']?>"/></td>
			  </tr>		      <tr>
				  <td>家庭住址</td>
				  <td><input type="text" name="jtzz"  value="<?php echo $sjxxb['jtzz']?>"/></td>
			  </tr>
			  <tr>
				  <td>驾驶年龄</td>
				  <td><input type="text" name="jsnl"  value="<?php echo $sjxxb['jsnl']?>"/></td>
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
 

