<?php 
include("common.php");
$id=$_GET['id'];
$spsql = "select * from xsxxb where id='$id'";
$spres = mysql_query($spsql);
$xsxxb=mysql_fetch_array($spres);
if(isset($_POST['submit'])){
	$xsxm = $_POST['xsxm'];
    $xb = $_POST['xb'];
	$xnbh = $_POST['xnbh'];
	$zzxm = $_POST['zzxm'];
	$jsfs = $_POST['jsfs'];
	$csrq = $_POST['csrq'];

	$sql = "update xsxxb set xsxm='$xsxm',xb='$xb',xnbh='$xnbh',zzxm='$zzxm',jsfs='$jsfs' ,csrq='$csrq' where id='$id'";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('修改失败！');window.location.href='xsxxb.php';</script>";
	}else{
		echo "<script>alert('修改成功！');window.location.href='xsxxb.php';</script>";
	}

}

?>

 <div class="fr righter">
		  <div class="title">
		   学生信息
	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		  <tr>
				  <td>学生姓名</td>
				  <td><input type="text" name="xsxm"  value="<?php echo $xsxxb['xsxm']?>"/></td>
			  </tr>
			  <tr>
				  <td>性别</td>
				  <td><input type="text" name="xb"  value="<?php echo $xsxxb['xb']?>"/></td>
			  </tr>		      <tr>
				  <td>校内编号</td>
				  <td><input type="text" name="xnbh"  value="<?php echo $xsxxb['xnbh']?>"/></td>
			  </tr>
			  <tr>
				  <td>家长姓名</td>
				  <td><input type="text" name="zzxm"  value="<?php echo $xsxxb['zzxm']?>"/></td>
			  </tr>
			  <tr>
				  <td>接送方式</td>
				  <td><input type="text" name="jsfs"  value="<?php echo $xsxxb['jsfs']?>"/></td>
			  </tr>
			  <tr>
				  <td>出生日期</td>
				  <td><input type="text" name="csrq"  value="<?php echo $xsxxb['csrq']?>"/></td>
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
 

