<?php /* Smarty version Smarty-3.1.6, created on 2015-08-14 10:51:43
         compiled from "../Tpl/home\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:3049655cd57bf65ff03-45261225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '036f53e130b4be0844a53adf28c7412a27ee5ca3' => 
    array (
      0 => '../Tpl/home\\User\\register.html',
      1 => 1437786984,
      2 => 'file',
    ),
    'c4865507a796473fe02d38cbc004832b2d6455e4' => 
    array (
      0 => '../Tpl/home\\public\\layout.html',
      1 => 1439519532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3049655cd57bf65ff03-45261225',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55cd57bf7b833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cd57bf7b833')) {function content_55cd57bf7b833($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' >
<link href = "<?php echo @CSS_URL;?>
styles.css" rel = "stylesheet" type = "text/css">


<link href = "<?php echo @CSS_URL;?>
register.css" rel = "stylesheet" type = "text/css">


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
		 <div class = "main">
		 	<div class = "title">注册新用户</div>
			<input class = "inf1" type = "text"  placeholder = "账号" >
			<input class = "inf2" type = "text"  placeholder = "收货人" >
			<input class = "inf1" type = "text"  placeholder = "邮编" >
			<input class = "inf2" type = "text"  placeholder = "地址" >
			<input class = "inf1" type = "password"  placeholder = "密码" >
			<input class = "inf2" type = "text"  placeholder = "邮箱" >
			<input class = "inf1" type = "password"  placeholder = "确认密码" >
			<input class = "inf2" type = "text"  placeholder = "联系方式" >
			<input class = "submit" type = "button" value="立即注册">
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
register.js'></script>

</body>
</html><?php }} ?>