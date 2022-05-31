<?php
session_start();
include_once("db.php");
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <style>
    body,*{ margin: 0;padding: 0;font-family: "宋体";font-size: 20px;}
	.fl{float: left;}
	.fr{float: right;margin-top: 1px;}
	input,select{ height:26px; padding: 0 6px;}
	a{color:	#FF0000;text-decoration: none;}
	table { border-collapse:collapse; margin:20px auto;}
	table.xx{width:800px;}
	table.bd{width:400px;}
    table td,table th{border:	#FFD700 solid 2px;padding:7px 5px;text-align:center}
	table td{border:#FFD700 solid 2px;}
	.top{height:130px;}
	.top .title{height: 130px;
    padding: 0 15px;
    width: 970px;
	}

	.top h1{color:	#fff143;font-size:50px;padding-top: 25px;
		padding-left: 150px;}

    .w1000{width:1000px;margin:0 auto;}

	.log{color:	#696969；font-size:40px;
		font-weight: 900;
	}

	.lefter{    width: 197px;
    background: #00FFFF;
    height: 630px;
	font-weight:600;
	}

	.lefter a.fa{display: block; font-size: 24px; line-height: 32px; background: #065279;text-align: center;color:#fff;}

	.lefter a.son{display: block;
    font-size: 18px;
    line-height: 40px;
    margin: 5px 0;
    text-align: center;
    color: 	#8B4513;
	}

	.righter{width: 800px;
    border: #D4F2E7 solid 1px;
    margin-top: 0;
    min-height: 625px;}

	.righter .title{line-height: 50px;
    border-bottom: #D4F2E7 solid 1px;
    background: #ececec;
    font-size: 25px;
    padding: 0 15px;}

	.search{margin:15px;height:25px;}
	input[type="submit"]{background: 			#000;
    border: 0;
	height:30px;
	line-height:30px;
    padding: 0 35px;
    color: 	#fff;}
  </style>
  <title>春日部幼儿园学生信息管理系统</title>
 </head>
 <body style="background-image: url(image/2.jpg); width:100%;   height:100%;  background-size:100% 100%; ">
  <div class="top">
	  <div class="w1000 title">
		  <h1>春日部幼儿园学生信息管理系统</h1>
		  <br>
          <div class="log fr">
		  <?php
			if(!empty($_SESSION["zh"])){
				echo '';
				echo "欢迎您，".$_SESSION["zh"]."";
			?>
				<a href="logout.php">退出</a>
			<?php
			}else{
			   echo '<script>alert("没有登录，不能访问");window.location.href="login.php";</script>';
			   exit();
			}
		  ?>
		  </div>
	  </div>
  </div>
  <div class="main w1000">
	  <div class="fl lefter">
		  <a href="xcjsb.php" class="fa">校车接送信息</a>
			  <a href="xcjsb_tj.php" class="son">添加校车接送信息</a>
			  <a href="xcjsb.php" class="son">校车接送信息管理</a>
		  <a href="jcjsb.php" class="fa">家长接送信息</a>
		  	  <a href="jcjsb_tj.php" class="son">添加家长接送信息</a>
			  <a href="jcjsb.php" class="son">家长接送信息管理</a>
		  <a href="xsxxb.php" class="fa">学生信息</a>
		  	  <a href="xsxxb_tj.php" class="son">添加学生信息</a>
			  <a href="xsxxb.php" class="son">学生信息管理</a>
		  <a href="sjxxb.php" class="fa">司机信息表</a>
		  	  <a href="sjxxb_tj.php" class="son">添加司机信息表</a>
			  <a href="sjxxb.php" class="son">司机信息表管理</a>
		  <a href="glyxxb.php" class="fa">管理员系统</a>
		  	  <a href="glyxxb_tj.php" class="son">添加管理员</a>
			  <a href="glyxxb.php" class="son">管理员信息管理</a>
		
			  
		  
	  </div>
	  