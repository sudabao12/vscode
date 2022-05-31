<?php 
include("common.php");
if(isset($_POST['submit'])){
	$jtcygx = $_POST['jtcygx'];
    $lxfs = $_POST['lxfs'];
	$szdw = $_POST['szdw'];
	$jtzc = $_POST['jtzc'];
	$jzxm = $_POST['jzxm'];

	$sql = "insert into jcjsb(jtcygx,lxfs,szdw,jtzc,jzxm) values ('$jtcygx','$lxfs','$szdw','$jtzc','$jzxm')";
	$result = mysql_query($sql);
	$rows=mysql_affected_rows();
	if($rows<1){
		echo "<script>alert('添加失败！');window.location.href='jcjsb.php';</script>";
	}else{
		echo "<script>alert('添加成功！');window.location.href='jcjsb.php';</script>";
	}

}

?>

 <div class="fr righter">
		  <div class="title">
		   添加家长接送信息
	      </div>
		  
		  <table class="bd">
		  <form action="#" method="post">
		  <tr>
				  <td>家长成员关系</td>
				  <td><input type="text" name="jtcygx" /></td>
			  </tr>
			  <tr>
				  <td>联系方式</td>
				  <td><input type="text" name="lxfs" /></td>
			  </tr>
			  <tr>
				  <td>所在单位</td>
				  <td><input type="text" name="szdw" /></td>
			  </tr>

			   <tr>
				  <td>家庭住址</td>
				  <td><input type="text" name="jtzc" /></td>
			  </tr>
			  <tr>
				  <td>家长姓名</td>
				  <td><input type="text" name="jzxm" /></td>
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
 

