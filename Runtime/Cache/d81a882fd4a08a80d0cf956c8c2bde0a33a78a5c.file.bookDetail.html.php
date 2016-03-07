<?php /* Smarty version Smarty-3.1.6, created on 2015-08-14 10:32:14
         compiled from "../Tpl/home\Book\bookDetail.html" */ ?>
<?php /*%%SmartyHeaderCode:87055c2c90fc06ad3-86084617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81a882fd4a08a80d0cf956c8c2bde0a33a78a5c' => 
    array (
      0 => '../Tpl/home\\Book\\bookDetail.html',
      1 => 1438491061,
      2 => 'file',
    ),
    'c4865507a796473fe02d38cbc004832b2d6455e4' => 
    array (
      0 => '../Tpl/home\\public\\layout.html',
      1 => 1439519532,
      2 => 'file',
    ),
    'acf77979f77bf1aa23704304f97faeafad686825' => 
    array (
      0 => '../Tpl/home\\public\\sideright.html',
      1 => 1438825375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87055c2c90fc06ad3-86084617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55c2c9106b074',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c2c9106b074')) {function content_55c2c9106b074($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' >
<link href = "<?php echo @CSS_URL;?>
styles.css" rel = "stylesheet" type = "text/css">


<link href = "<?php echo @CSS_URL;?>
detail.css" rel = "stylesheet" type = "text/css">


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
	 
	 <div class = "header-bottom-right">
	    <div class = "search">
		   <input type = "text" name="" class ="textbox" placeholder="Search">
		   <input type = "submit" name = "" class = "submit" value ="">
		</div>
		<div class = "icon"><img src="<?php echo @IMG_URL;?>
cart.png"></div>
	    <div class = "cart buy-cart"><a href = "##">购物车(<span class='buy-cart-count'>0</span>)</a></div>
		<div class = "icon"><img src="<?php echo @IMG_URL;?>
tag.png"></div>
		<div class = "cart buy-user"><a href = "##">我的账户</a></div>
	 </div>
	 <div class = "clear"></div>
  </div>
  </div>
  
  		<div class = "main">
		<!-------------------------main-left------------------begin--------------->
			<div class = "main-left">
				<div>
					<div class="box">
						<div class="tb-booth tb-pic tb-s310"> 
							<a href="<?php echo @IMG_URL;?>
details/02_big.jpg"><img src="<?php echo @IMG_URL;?>
details/02_mid.jpg" rel="<?php echo @IMG_URL;?>
details/02_big.jpg" class="jqzoom" /></a>
						</div>
						<ul class="tb-thumb" id="thumblist">
							<li class="tb-selected">
								<div >
									<a href="#"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bimage'];?>
_small.jpg" mid="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bimage'];?>
_mid.jpg" big="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bimage'];?>
_big.jpg"></a>
								</div>
							</li>
						</ul>
					</div>
					<div class = "intro">
						<div class = "name"><?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bname'];?>
</div>
						<div class = "text">价&nbsp;格<span class = "price">&yen;<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bnowprice'];?>
</span></div>
						<div class = "text">评&nbsp;论<span class = "comment"><?php echo $_smarty_tpl->tpl_vars['commentNum']->value;?>
 条评论</span></div>
						<div class = "text">作&nbsp;者<span class = "author"><?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bauthor'];?>
</span></div>
						<div class = "text">出版社<span class = "publish_house"><?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bpublic'];?>
</span></div>
						<div class = "text">出版时间<span class = "publish_time"><?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bpublictime'];?>
</span></div>
						<div class = "text">所属分类<span class = "cago"><?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['btype'];?>
</span></div>
						<div class = "text">我要买&nbsp;&nbsp;<span class = "count"><span class='down__'>-</span><input name='buycount' type='text' value='1'><span class='up__'>+</span></span><span class='countLeft'>库存 <?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bcount'];?>
</span></div>
						<input type="button" value="加入购物车" class= "buy">
						<input type='hidden' name='bid' value='<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bid'];?>
'>
					</div>
				</div>
				<div class = "clear"></div>
				
				<div class = "book_detail">
					<ul class = "title">
						<li class = "style1" >商品详情</li>
						<li class = "style2" ><a href="#1">商品评论</a></li>
					</ul>
					<div class = "Intro">作者简介<p><?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bauthorI'];?>
</p></div>
					<div class = "Intro">内容简介<p><?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['bcontent'];?>
</p></div>
					<div class = "comment_title" id = "1">商品评论</div>

					
					<div class='pages'>
						<ul>
						</ul>
					</div>
					<div class = "clear"></div>
				</div>
					
				<div class='submitComment'>
					<label>发表评价</label>
					<textarea class='comment_content'></textarea>
					<button type='button' class='submitBtn'>提交评价</button>
				</div>
				
				
				
				
			</div>
			
		<!-------------------------main-left------------------end--------------->
		
		<!-------------------------main-right------------------begin--------------->
			<?php /*  Call merged included template "public/sideright.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('public/sideright.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '87055c2c90fc06ad3-86084617');
content_55cd532e1b391($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "public/sideright.html" */?>
		<!-------------------------main-right------------------end--------------->
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
index.js"></script>

</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.6, created on 2015-08-14 10:32:14
         compiled from "../Tpl/home\public\sideright.html" */ ?>
<?php if ($_valid && !is_callable('content_55cd532e1b391')) {function content_55cd532e1b391($_smarty_tpl) {?><div class = "main-right">
		<div class = "onsale">
			<img src="<?php echo @IMG_URL;?>
sprite2.png">
			<div class = "onsale-title">新书热卖榜</div>
			<div class = "clear"></div>
			<ul class = "onsale-header">
				<li class = "salestyle2" onmouseover="showOnsale1(1)" >总榜</li>
				<li class = "salestyle1" onmouseover="showOnsale1(2)" >青春</li>
				<li class = "salestyle1" onmouseover="showOnsale1(3)" >经济</li>
				<li class = "salestyle1" onmouseover="showOnsale1(4)" >社科</li>
				<li class = "salestyle1" onmouseover="showOnsale1(5)" >小说</li>
			</ul>
			<div class = "clear"></div>
			<div id = "onsale1">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
			<div id = "onsale2">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
			<div id = "onsale3">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
			</div>
			<div id = "onsale4">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
			<div id = "onsale5">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
		</div>
		<div class = "onsale book-onsale">
			<img src="<?php echo @IMG_URL;?>
sprite2.png">
			<div class = "onsale-title">图书畅销榜</div>
			<div class = "clear"></div>
			<ul class = "onsale-header">
				<li class = "salestyle2" onmouseover="showOnsale2(6)" >总榜</li>
				<li class = "salestyle1" onmouseover="showOnsale2(7)" >青春</li>
				<li class = "salestyle1" onmouseover="showOnsale2(8)" >经济</li>
				<li class = "salestyle1" onmouseover="showOnsale2(9)" >社科</li>
				<li class = "salestyle1" onmouseover="showOnsale2(10)" >小说</li>
			</ul>
			<div class = "clear"></div>
			<div id = "onsale6">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
			<div id = "onsale7">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
			<div id = "onsale8">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
			<div id = "onsale9">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
			<div id = "onsale10">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"></div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
		</div>
		<div class = "onsale e-book">
			<img src="<?php echo @IMG_URL;?>
sprite2.png">
			<div class = "onsale-title">电子书榜</div>
			<div class = "clear"></div>
			<div id = "onsale1">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"><?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
</div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<div class = "onsalebook-style1" onmouseover="this.className = 'onsalebook-style2'" onmouseout="this.className = 'onsalebook-style1'">
						<div class="rank"><?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
</div><div class = "onsalebook-title"><a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a></div>
						<div class="pic"><img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg"></div>
						<div class = "detail">
							<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
							<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
							<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
						</div>
					</div>
					<div class = "clear"></div>
				<?php } ?>
				
			</div>
		</div>
	
    </div><?php }} ?>