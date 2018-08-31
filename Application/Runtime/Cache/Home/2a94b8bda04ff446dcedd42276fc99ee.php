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
 </head>
<link href="/my_gather_thinkphp/Public/Static/css/signin.css" rel="stylesheet">
<!-- -->
<body class="text-center">
	<form class="form-signin" action="<?php echo U('Admin/user/user');?>" method="post">
	  <img class="mb-4" src="/my_gather_thinkphp/Public/Static/img/my_logo.png" alt="" width="214" height="77">
	  <label for="inputEmail" class="sr-only">UserName or Email address</label>
	  <input type="email" id="inputEmail" class="form-control" name="username" placeholder="UserName or Email address" required autofocus>
	  <label for="inputPassword" class="sr-only">Password</label>
	  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>

	  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	  <button class="btn btn-lg btn-secondary btn-block" type="submit">Retrieve password</button>
	  <button class="btn btn-lg btn-secondary btn-block" type="submit">Sign up</button>

	</form>
<!-- 加载尾部文件 -->
 </body>
 </html>