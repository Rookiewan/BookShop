<?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 11:09:41
         compiled from "../Tpl/home\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:640255cd4331342101-19241779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eee8ec9d90f85611a5ebe13b0009ded3b4d51464' => 
    array (
      0 => '../Tpl/home\\User\\login.html',
      1 => 1454133026,
      2 => 'file',
    ),
    'c4865507a796473fe02d38cbc004832b2d6455e4' => 
    array (
      0 => '../Tpl/home\\public\\layout.html',
      1 => 1454133027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '640255cd4331342101-19241779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55cd43314e078',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cd43314e078')) {function content_55cd43314e078($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' >
<link href = "<?php echo @CSS_URL;?>
styles.css" rel = "stylesheet" type = "text/css">


<link href = "<?php echo @CSS_URL;?>
login.css" rel = "stylesheet" type = "text/css">


<title>智慧百屋</title>
</head>

<body>
<div id='container'>
  <div class = "header">
  <div class = "header-top">
  	<span>前端：王静雯、后台：陈万芳、文档：林晨光</span>
     <div class = "header-top-right">
	   <ul>
	     <li class = ""><a href = "<?php echo @__GROUP__;?>
/home/Index/index">首页</a></li>|
		 <li class='buy-cart'><a  href = "##">购物车</a></li>|
	     <li class = "_login"><a href = "<?php echo @__GROUP__;?>
/home/User/login">登录</a></li><i class='_register'>|</i>
		 <li class = "_register"><a href = "<?php echo @__GROUP__;?>
/home/User/register">注册</a></li>
		 <li class = "quit"><a href = "##">退出</a></li>|
		 <li class = ""><a href = "<?php echo @__GROUP__;?>
/admin/Admin/login"  target='blank'>管理员</a></li>
	   </ul>
	 </div>
	 <div class = "clear"></div>
  </div>
  <div class = "header-bottom">
     <div class = "header-bottom-left">
	    <div class = "logo">
		  <a href = "<?php echo @__GROUP__;?>
/home/Index/index">智慧百屋</a>
		</div>
	 </div>
	 
  </div>
  </div>
		 
  		<hr/>
		<div class = "register">
			<h4 class = "title">注册</h4>
			<div class = "register-text">欢迎进入智慧百屋！如果想要购买书籍请先登录账号</p>如果没有账号请您

注册！</div>
			<a class = "register-submit"  href="<?php echo @__GROUP__;?>
/User/register">注册</a>
		</div>
		<div class = "login">
			<h4 class = "title">登录</h4>
			
			<div class ="user">
				<div class = "pic"></div>
				<input class ="text" type = "text" value="" placeholder = "账号">
			</div>
			<div class ="psw">
				<div class = "pic"></div>
				<input class = "text" type="password" value="" placeholder = "密码">
			</div>
			<div class="remember">忘记密码</div>
			<input class = "submit" type="button" value = "登录">
			
		</div>



  <div class = "footer">
	  	<hr>
		<div class = "footer_pic">
			<img src="<?php echo @IMG_URL;?>
footer1.png"><img src="<?php echo @IMG_URL;?>
footer2.png"><img src="<?php echo @IMG_URL;?>
footer3.png"><img src="<?php echo @IMG_URL;?>
footer4.png">
		</div>
		<div class = "footer_bottom"><a href="http://www.miitbeian.gov.cn" target='blank'>闽ICP备15014635号</a> Copyright &copy;智慧百屋</div>
  </div>

  <!--alert-->
		<div id='alertTips' onselectstart='return false'>
			<div class='alertMain'>
				<div class='hostName' id='alertTitle' onselectstart='return false'>BookShop:
					<i class='closeAlert'>Close</i>
				</div>
				<div class='alertContent'></div>
			</div>
		</div>

  </div>
  <div id='mask' class='mask'></div>
  <script src="<?php echo @JS_URL;?>
jquery-1.9.1.min.js"></script>
  <script src='<?php echo @JS_URL;?>
ajaxRookie_wan.js'></script>
  <script src="<?php echo @JS_URL;?>
jquery.imagezoom.min.js"></script>
  <script src="<?php echo @JS_URL;?>
slider.js"></script>
  
  
<script src='<?php echo @JS_URL;?>
userLogin.js'></script>

</body>
</html><?php }} ?>