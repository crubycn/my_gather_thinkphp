<?php if (!defined('THINK_PATH')) exit();?><!-- 加载头部文件 -->
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title><?php echo ($Title); ?></title>
 	<link rel="icon" href="/my_gather_thinkphp/Public/Static/img/favicon.ico">
 	<link href="/my_gather_thinkphp/Public/Static/css/bootstrap.min.css" rel="stylesheet">
 	<script src="/my_gather_thinkphp/Public/Static/js/jquery-3.3.1.min.js"></script>
 	<script src="/my_gather_thinkphp/Public/Static/js/bootstrap.min.js"></script>

	<link href="/my_gather_thinkphp/Public/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
 	
 </head>
<link href="/my_gather_thinkphp/Public/Static/css/signin_reg.css" rel="stylesheet">
<!-- -->
<body class="text-center">
	<form class="form-signin" action="" method="post">
	  <img class="mb-4" src="/my_gather_thinkphp/Public/Static/img/my_logo.png" alt="" width="214" height="77">

	  <label for="inputEmail" class="sr-only">Email address</label>
	  <input type="email" id="inputEmail" class="form-control" name="user_email" placeholder="Email address" required autofocus>

	  <button class="btn btn-lg btn-primary btn-block"  id="Retrieve password">Retrieve</button>
	  <button class="btn btn-lg btn-secondary btn-block" type="button" id="goBack">GO Back</button>

	</form>

	<script>
		$(function(){
			$('#goBack').click(function(){
				location.href = "<?php echo U('Home/index/index');?>";
			 });
		})
	</script>
</body>
</html>