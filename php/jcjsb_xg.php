<?php 
include("common.php");
$id=$_GET['id'];
$spsql = "select * from jcjsb where id='$id'";
$spres = mysql_query($spsql);
$spxx=mysql_fetch_array($spres);
if(isset($_POST['submit'])){
	$jtcygx = $_POST['jtcygx'];
    $lxfs = $_POST['lxfs'];
	$szdw = $_POST['szdw'];
	$jtzc = $_POST['jtzc'];
	$jzxm = $_POST['jzxm'];

	$sql = "update jcjsb set jtcygx='$jtcygx',lxfs='$lxfs',szdw='$szdw',jtzc='$jtzc',jzxm='$jzxm' where id='$id'";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('修改失败！');window.location.href='jcjsb.php';</script>";
	}else{
		echo "<script>alert('修改成功！');window.location.href='jcjsb.php';</script>";
	}

}

?>

 <div class="fr righter">
		  <div class="title">
		   修改家长接送信息
	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		  <tr>
				  <td>家长成员关系</td>
				  <td><input type="text" name="jtcygx"  value="<?php echo $ggbxxb['jtcygx']?>"/></td>
			  </tr>
			  <tr>
				  <td>联系方式</td>
				  <td><input type="text" name="lxfs"  value="<?php echo $ggbxxb['lxfs']?>"/></td>
			  </tr>		      <tr>
				  <td>所在单位</td>
				  <td><input type="text" name="szdw"  value="<?php echo $ggbxxb['szdw']?>"/></td>
			  </tr>
			  <tr>
				  <td>家庭住址</td>
				  <td><input type="text" name="jtzc"  value="<?php echo $ggbxxb['jtzc']?>"/></td>
			  </tr>
			  <tr>
				  <td>家长姓名</td>
				  <td><input type="text" name="jzxm"  value="<?php echo $ggbxxb['jzxm']?>"/></td>
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
 

