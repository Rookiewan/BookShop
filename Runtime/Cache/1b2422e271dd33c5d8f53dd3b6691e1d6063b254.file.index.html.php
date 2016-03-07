<?php /* Smarty version Smarty-3.1.6, created on 2015-08-14 10:59:51
         compiled from "../Tpl/admin\Admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1556755ca9f6042de93-05577350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b2422e271dd33c5d8f53dd3b6691e1d6063b254' => 
    array (
      0 => '../Tpl/admin\\Admin\\index.html',
      1 => 1438792792,
      2 => 'file',
    ),
    'ea210b03652060935e95e5a17cc6d82f19c733bb' => 
    array (
      0 => '../Tpl/admin\\public\\layout.html',
      1 => 1439521008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1556755ca9f6042de93-05577350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55ca9f605c00f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca9f605c00f')) {function content_55ca9f605c00f($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' >
<link href = "<?php echo @ADMIN_CSS_URL;?>
styles.css" rel = "stylesheet" type = "text/css">




<title>智慧百屋后台管理</title>
</head>

<body>
<div id='container'>
  <div class = "header">
  <div class = "header-top">
  	<span>前端：王静雯、后台：陈万芳、文档：林晨光</span>
     <div class = "header-top-right">
	   <ul>
	     <li class = "admin_login"><a href = "<?php echo @__GROUP__;?>
/Admin/login">登录</a></li>
		 <li class = "admin_quit"><a href = "##">退出</a></li>
	   </ul>
	 </div>
	 <div class = "clear"></div>
  </div>
  <div class = "header-bottom">
     <div class = "header-bottom-left">
	    <div class = "logo">
		  <a href = "<?php echo @__GROUP__;?>
/Admin/index">智慧百屋后台管理</a>
		</div>
	 </div>
	 
  </div>
</div>
	<div class='main'>
		<div class='mainLeft'>
			<ul>
				<li class='tabSeleted'><a href='##'>首页</a></li>
				<li><a href='##'>用户管理</a></li>
				<li><a href='##'>图书管理</a></li>
				<li><a href='##'>评价管理</a></li>
			</ul>

		</div>
		<div class='mainRight'>
			<div class='mainIndex'>
				<img src='<?php echo @ADMIN_IMG_URL;?>
head.gif'>
				<div class='welcome'>欢迎您！</div>
				<div class='admin'></div>
			</div>
			<div class='mainUser'>
				
				
			</div>
			<div class='mainBook'>
				
			</div>
			<div class='mainComment'>
				
			</div>
			
		</div>
		<div class='optionBookInfo'>
			<div class='optionTableOuter'>
				<div class='optionCaption'></div>
				<!-- <div class='optionTitle'>
					<div></div>
				</div> -->
				<div class='optionRow'>
					<div>书名</div>
					<div><input type='text' name='bname' placeholder='书名' required='required'></div>
				</div>
				<div class='optionRow'>
					<div>作者</div>
					<div><input type='text' name='bauthor' placeholder='作者' required='required'></div>
				</div>
				<div class='optionRow'>
					<div>类型</div>
					<div>
						<select>
							<option>青春校园</option>
							<option>成功励志</option>
							<option>世界名著</option>
							<option>人文社科</option>
							<option>科学技术</option>
							<option>经济管理</option>
							<option>教材辅导</option>
							<option>文学艺术</option>
							<option>少儿读物</option>
							<option>生活百科</option>
						</select>
					</div>
				</div>
				<div class='optionRow'>
					<div>原价</div>
					<div><input type='number' name='bprice' placeholder='原价'></div>
				</div>
				<div class='optionRow'>
					<div>现价</div>
					<div><input type='number' name='bnowprice' placeholder='现价'></div>
				</div>
				<div class='optionRow'>
					<div>出版社</div>
					<div><input type='text' name='bpublic' placeholder='出版社'></div>
				</div>
				<div class='optionRow'>
					<div>出版时间</div>
					<div><input type='date' name='bpublictime' placeholder='出版时间'></div>
				</div>
				<div class='optionRow'>
					<div>库存</div>
					<div><input type='number' name='bcount' placeholder='库存' required='required'></div>
				</div>
				<div class='optionRow'>
					<div>作者简介</div>
					<div><textarea class='bauthorI'></textarea></div>
				</div>
				<div class='optionRow'>
					<div>内容简介</div>
					<div><textarea class='bcontent'></textarea></div>
				</div>
				<div class='optionRow'>
					<div><input type='submit' class='ok' value='确定'></div>
					<div><input type='submit' class='cancel' value='取消'></div>
				</div>
			</div>
		</div>
	</div>
  
  


  <div class = "footer">
  	<hr>
	<div class = "footer_pic">
		<img src="<?php echo @ADMIN_IMG_URL;?>
footer1.png"><img src="<?php echo @ADMIN_IMG_URL;?>
footer2.png"><img src="<?php echo @ADMIN_IMG_URL;?>
footer3.png"><img src="<?php echo @ADMIN_IMG_URL;?>
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
  <script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.9.1.min.js"></script>
  <script src='<?php echo @ADMIN_JS_URL;?>
ajaxRookie_wan.js'></script>
  
<script src='<?php echo @ADMIN_JS_URL;?>
index.js'></script>

</body>
</html><?php }} ?>