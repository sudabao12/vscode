<?php
session_start();
header("Content-type: text/html; charset=utf-8");

if(isset($_POST['submit'])){
	include_once("db.php");
	$zh = $_POST['zh'];
	$mm = $_POST['mm'];

	$sql = "select * from glyxxb where zh='$zh' and mm='$mm'";
	$result_set = mysql_query($sql);
	$rows = mysql_num_rows($result_set);
	if($rows==0){
		
		echo '<script>alert("账号或密码错误，请重新输入！");window.location.href="login.php";</script>';
		exit;
	}else{
		$account = mysql_fetch_array($result_set);
		$_SESSION['zh'] = $account['zh'];
		echo '<script>alert("登录成功！");window.location.href="glyxxb.php";</script>';
		exit;
	}

}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>春日部幼儿园学生信息管理系统</title>
<style type="text/css">
body,td,th {
	font-size: 26px;
  color:#000;
}
input{
  vertical-align:-3px;
}
select{
  color: #999;
}
</style>
</head>
<body style="background-image: url(image/2.jpg);    width:100%;   height:100%;  background-size:100% 100%;  position:absolute;   ">
<form method="post"  target="hidden_frame" action="">
<table class="bd" width="400" height="400" border="0" cellpadding="0" cellspacing="0" align="center" style=" margin-top: 120px; margin-right: 38%;box-shadow: 2 x 2px 10px #909090; border-radius:20px; ">
<tr>
<td width="300" height="250" align="center" style=" background-color: rgba(250,250,250,0.1); ">
<h1 style="position: absolute; margin-left:140px; margin-top: -10px; color: #70f3ff;font-size:36px; ">系统登录</h1>
<table width="300" height="211" style=" padding-left:20px; border-radius:20px;padding-top:50px;">
<tr>
<td height="80" style="font-size:24px; font-weight: 800;" >帐号：</td>
<td><input style="height:25px;" type="text" name="zh" /></td>
</tr>
<tr>
<td height="80" style="font-size:24px; font-weight: 800;">密码：</td>
<td><input style="height:25px;" type="password" name="mm"  /></td>
</tr>
<tr>
<td colspan="2" align="center"><label>
<input style=" width: 100px; height: 35px; margin-right: 50px; margin-top: 30px; background-color:#1685a9; color: #fff; border: 0px; box-shadow: 2px 2px 10px #909090;border-radius:5px;" type="submit" name="submit" value="提交"  />
</label>
<label>
<input  style=" width: 100px; height: 35px; background-color: #1685a9; color: #fff;border: 0px; box-shadow: 2px 2px 10px #909090;border-radius:5px;" type="submit" name="Submit2" value="取消" />
</label>
</td>
</tr>
</table>
</td>
</tr>
</table>
</form>
