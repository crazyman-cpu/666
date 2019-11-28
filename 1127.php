<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>京东</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
		}
		.jdm{
			width: 100%;
			margin: 0 auto;
		}
		.jdm_search{
			width: 100%;
			height: 40px;
			background: #c91523;
			position: fixed;
			top: 0;
			left: 0;
			line-height: 40px;
		}
		.jdm_search input{
			width: 100%;
			height: 30px;
			border-radius: 15px;
			padding-left: 25px;
			box-sizing: border-box;
		}
		.jdm_search .search{
			position: relative;
			width: 100%;
			height: 100%;
			padding-left: 80PX;
			padding-right: 50px; 
			box-sizing: border-box;
		}
		.jdm_search,.jdm_login{
			display: block;
			position: absolute;
			top: 0px;
			right: 10px;
			font-size: 16px;
			text-decoration: none;
			font-size: 16px;
			color: #fff;
		}
		.jdm_search .search_logo{
			display: block;
			position: absolute;
			top: 5px;
			left: 5px;
			width: 75px;
			height: 30px;
			background-image: url(images/jd.png); 
		}
	</style>
</head>
<body>
	<div class="jdm">
		<header class="jdm_search">
			<a href="#" class="search_logo"></a>
			<div class="search">
				<input type="text" placeholder="100万超级爆品疯抢">
			</div>
			<a href="#" class="jdm_login">登录</a>
		</header>
	</div>

</body>
</html>
