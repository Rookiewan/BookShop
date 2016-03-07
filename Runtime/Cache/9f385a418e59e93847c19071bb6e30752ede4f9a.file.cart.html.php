<?php /* Smarty version Smarty-3.1.6, created on 2016-01-27 16:18:44
         compiled from "../Tpl/home\Book\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:3158456a87d6488fde8-32997429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f385a418e59e93847c19071bb6e30752ede4f9a' => 
    array (
      0 => '../Tpl/home\\Book\\cart.html',
      1 => 1438451637,
      2 => 'file',
    ),
    'c4865507a796473fe02d38cbc004832b2d6455e4' => 
    array (
      0 => '../Tpl/home\\public\\layout.html',
      1 => 1439519532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3158456a87d6488fde8-32997429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a87d64a3a58',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a87d64a3a58')) {function content_56a87d64a3a58($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' >
<link href = "<?php echo @CSS_URL;?>
styles.css" rel = "stylesheet" type = "text/css">


<link href = "<?php echo @CSS_URL;?>
cart.css" rel = "stylesheet" type = "text/css">


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
  
		 <div class = "cart">
		 	<div class = "title">
				<ul>
					<li class = "id">编号</li>
					<li class = "name">商品名称</li>
					<li class = "price">单价</li>
					<li class = "count">数量</li>
					<li class = "action">操作</li>
				</ul>
			</div>
			<!-- <div class="clear"></div>
		 	<div class = "item">
				<div class = "number">1</div>
				<img src="<?php echo @IMG_URL;?>
r1.jpg"/>
				<div class = "book_name">我坚信<br /><div class = "author">作者：</div></div>
				<div class = "price price__">&yen;19.90</div>
				<div class = "countItem"></div>
				<div class = "action">删除</div>
				<input type='hidden' value='bid'>
			</div>
			<div class = "clear"></div>
			
			<div class = "item">
				<div class = "number">2</div>
				<img src="<?php echo @IMG_URL;?>
r1.jpg"/>
				<div class = "book_name">我坚信<br /><div class = "author">作者：</div></div>
				<div class = "price price__">&yen;19.90</div>
				<div class = "countItem"></div>
				<div class = "action">删除</div>
			</div> -->
		 	
			
			<div class = "total_price">商品金额总计：<span class = "total">&yen;39.80</span><br /><input class = "pay" type = "button" value="结算"></div>
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
cart.js'></script>

</body>
</html><?php }} ?>