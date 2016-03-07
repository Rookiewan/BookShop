<?php /* Smarty version Smarty-3.1.6, created on 2015-08-12 09:20:11
         compiled from "../Tpl/admin\Admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2822255ca9f4b442950-82715076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7d04ae31c951cf173ff14ee3cd55ba029a10cc7' => 
    array (
      0 => '../Tpl/admin\\Admin\\login.html',
      1 => 1438828142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2822255ca9f4b442950-82715076',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55ca9f4b547ac',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca9f4b547ac')) {function content_55ca9f4b547ac($_smarty_tpl) {?>
<!DOCTYPE HTML>
<html>
<head>
<title>智慧百屋后台登录</title>
<!-- Custom Theme files -->
<link href="<?php echo @ADMIN_CSS_URL;?>
login.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<body>
<!--header start here-->
	<div class="login">
		 <div class="login-main">
		 		<div class="login-top">
		 			<img src="<?php echo @ADMIN_IMG_URL;?>
head-img.png" alt=""/>
		 			<h1>管理员登录</h1>
		 			<input type="text" name='adminName' placeholder="管理员账户" required="">
		 			<input type="password" name='password' placeholder="密码" required="">
		 			<div class="login-bottom">
			 			<div class="clear"> </div>
		 			</div>
		 			<input type="submit" class='btnLogin' value="登录" />
		 		</div>
		 	</div>
  </div>
<!--header end here-->
<div style="text-align:center;">
</div>

<script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.9.1.min.js"></script>
<script src='<?php echo @ADMIN_JS_URL;?>
ajaxRookie_wan.js'></script>
<script>
	$(document).ready(function(){
		$('.btnLogin').click(function(){
			login();
		});
		$("input[name='adminName'],input[name='password']").keydown(function(e){
			if(e.keyCode==13){
				login();
			}
		});
	});
	function login(){
		var adminName=$("input[name='adminName']").val();
		var adminPwd=$("input[name='password']").val();
		if($.trim(adminName)=='' || $.trim(adminPwd)==''){
			alert('用户名或密码不能空！');
			return;
		}

		url='admin/Admin/login';
		postData={
			'adminName':adminName,
			'adminPwd':adminPwd
		};
		sendData(url,'post',postData,null,function(data){
			if(data==1){
				url=URL+'admin/Admin/index';
				localStorage.setItem('adminName',adminName);
				window.location.href=url;
			}else{
				alert(data);
			}
		});
	}
</script>
</body>
</html><?php }} ?>