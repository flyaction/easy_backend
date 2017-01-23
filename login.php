<?php
	if($_POST){
		$action = $_GET['action'];

		if($action == 'login'){

	        $error_msg = '密码错误，请重新输入';
		}
	}

?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/css-login.css" type="text/css" media="screen" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/common.js"></script>
<title>登录</title>
</head>
<body>
<div id="main" class="container">
	<form name="f" method="post" action="login.php?action=login" class="form-horizontal">
	<br>
		<div class="form-group">
			<label class="col-sm-2 control-label"></label>
			<div class="col-sm-10">
			<?php if(isset($error_msg)){ ?>
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <?php echo $error_msg; ?>
				</div>
			<?php }?>
			</div>
		</div>
		<div class="form-group">
			<label for="user" class="col-sm-2 control-label"></label>
			<div class="col-sm-10">
				<input type="text" name="user" class="form-control" id="user" placeholder="用户名" required="required">
			</div>
		</div>
		<div class="form-group">
			<label for="pw" class="col-sm-2 control-label"></label>
			<div class="col-sm-10">
				<input type="password" name="pw" class="form-control" id="pw" placeholder="密码" required="required">
			</div>
		</div>
		<?php
		if (isset($ckcode)) {
			?>
			<div class="form-group">
				<label for="imgcode" class="col-sm-2 control-label"></label>
				<div class="col-sm-7">
					<input type="text" name="imgcode" class="form-control" id="imgcode" placeholder="验证码" required="required">
				</div>
				<img src="../include/lib/checkcode.php" align="absmiddle" id="checkcode">
			</div>
		<?php } ?>
		<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <div class="checkbox">
	        <label>
	          <input type="checkbox" name="ispersis">记住我
	        </label>
	      </div>
	    </div>
	  </div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" id="login" class="btn btn-lg btn-success">登录</button>
			</div>
		</div>
	</form>
	<div class="login-ext"><?php //doAction('login_ext'); ?></div>
	<div id="small-buttons">
		<a href="../" class="btn btn-link btn-xs" role="button">返回首页</a>
		<a href="#" class="btn btn-link btn-xs" role="button" target="_blank">忘记密码</a>
	</div>
</div>

<script>focusEle('user');</script>
</body>
</html>
