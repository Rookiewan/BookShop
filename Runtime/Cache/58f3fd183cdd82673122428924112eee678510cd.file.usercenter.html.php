<?php /* Smarty version Smarty-3.1.6, created on 2016-01-27 16:17:59
         compiled from "../Tpl/home\Ucenter\usercenter.html" */ ?>
<?php /*%%SmartyHeaderCode:2024256a87d37acba68-02042013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58f3fd183cdd82673122428924112eee678510cd' => 
    array (
      0 => '../Tpl/home\\Ucenter\\usercenter.html',
      1 => 1438830829,
      2 => 'file',
    ),
    'c4865507a796473fe02d38cbc004832b2d6455e4' => 
    array (
      0 => '../Tpl/home\\public\\layout.html',
      1 => 1439519532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2024256a87d37acba68-02042013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a87d37cdc54',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a87d37cdc54')) {function content_56a87d37cdc54($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' >
<link href = "<?php echo @CSS_URL;?>
styles.css" rel = "stylesheet" type = "text/css">


<link href = "<?php echo @CSS_URL;?>
usercenter.css" rel = "stylesheet" type = "text/css">


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
		 <div id='tab'>
		 	<a href="#pInfo" class='pInfo'>个人信息</a>
		 	<a href="#buyRecord" class='buyRecord'>购买记录</a>
		 	<a href="#updInfo" class='updInfo'>修改信息</a>
		 	<div id='pInfo'>
		 		<div class='pInfo-left'>
		 			<img src="<?php echo @IMG_URL;?>
heads/zhengyi.gif">
		 			<span class='username'></span>
		 		</div>
		 		<div class='pInfo-right'>
		 			<div class='infoContainer'>
		 				<div class='infoRow'>
		 					<div class='infoMail'>邮箱：</div>
		 					<div class='infoMail'></div>
		 				</div>
		 				<div class='infoRow'>
		 					<div class='infoName'>收货人：</div>
		 					<div class='infoName'></div>
		 				</div>
		 				<div class='infoRow'>
		 					<div class='infoPhone'>电话：</div>
		 					<div class='infoPhone'></div>
		 				</div>
		 				<div class='infoRow'>
		 					<div class='infoAddress'>地址：</div>
		 					<div class='infoAddress'></div>
		 				</div>
		 				<div class='infoRow'>
		 					<div class='infoZipcode'>邮编：</div>
		 					<div class='infoZipcode'></div>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 	<div id='buyRecord'>
		 		<div class='recordContainer'>
		 			
		 		</div>
		 	</div>
		 	<div id='updInfo'>
		 		<div class='updInfo-left'>
		 			<div class='updInfoContainer'>
		 				<div class='updInfoRow'>
		 					<div class='updInfo-Row'>
		 						<div class='updInfoNick'>账号：</div>
		 						<div><input type='text' placeholder='账号' class='updInfoInput' value=''></div>
		 					</div>
		 					<div class='updInfo-Row'>
		 						<div class='updInfoName'>姓名：</div>
		 						<div><input type='text' placeholder='收货人' class='updInfoInput' value=''></div>
		 					</div>
		 				</div>
		 				<div class='updInfoRow'>
		 					<div class='updInfo-Row'>
								<div class='updInfoMail'>邮箱：</div>
		 						<div><input type='text' placeholder='邮箱' class='updInfoInput' value=''></div>
		 					</div>
		 					<div class='updInfo-Row'>
		 						<div class='updInfoPhone'>手机：</div>
		 						<div><input type='text' placeholder='联系方式' class='updInfoInput' value=''></div>
		 					</div>
		 				</div>
		 				<div class='updInfoRow'>
		 					<div class='updInfo-Row'>
		 						<div class='updInfoZipcode'>邮编：</div>
		 						<div><input type='text' placeholder='邮编' class='updInfoInput' value=''></div>
		 					</div>
		 					<div class='updInfo-Row'>
		 						<div class='updInfoAddress'>地址：</div>
		 						<div><input type='text' placeholder='地址' class='updInfoInput' value=''></div>
		 					</div>
		 				</div>
		 				<div class='updInfoRow'>
		 					<button class='updBtn updPersonalInfo'>修改</button>
		 				</div>
		 			</div>
		 		</div>
		 		<div class='updInfo-right'>
		 			<div class='updPwdContainer'>
		 				<div class='updPwdRow'>
		 					<div>新密码：</div>
		 					<div><input type='password' class='updInfoInput'></div>
		 				</div>
		 				<div class='updPwdRow'>
		 					<div>重复密码：</div>
		 					<div><input type='password' class='updInfoInput'></div>
		 				</div>
		 				
		 			</div>
		 			<button class='updBtn updPassword'>修改</button>
		 		</div>
		 	</div>
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
  
  
	<script src="<?php echo @JS_URL;?>
userCenter.js"></script>

</body>
</html><?php }} ?>