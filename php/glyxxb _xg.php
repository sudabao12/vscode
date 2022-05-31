<?php 
include("common.php");
$id=$_GET['id'];
$spsql = "select * from glyxxb where id='$id'";
$spres = mysql_query($spsql);
$glyxxb=mysql_fetch_array($spres);
if(isset($_POST['submit'])){
	$zh = $_POST['zh'];
    $mm = $_POST['mm'];
	$xm = $_POST['xm'];
	
	$sql = "update glyxxb set zh='$zh',mm='$mm',xm='$xm' where id='$id'";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('修改失败！');window.location.href='glyxxb.php';</script>";
	}else{
		echo "<script>alert('修改成功！');window.location.href='glyxxb.php';</script>";
	}

}

?>

 <div class="fr righter">
		  <div class="title">
		   修改管理员信息
	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		      <tr>
				  <td>帐号</td>
				  <td><input type="text" name="zh"  value="<?php echo $glyxxb['zh']?>"/></td>
			  </tr>
			  <tr>
				  <td>密码</td>
				  <td><input type="password" name="mm"  value="<?php echo $glyxxb['mm']?>"/></td>
			  </tr>
			  <tr>
				  <td>姓名</td>
				  <td><input type="text" name="xm"  value="<?php echo $glyxxb['xm']?>"/></td>
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
 

