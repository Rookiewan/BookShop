<?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 11:09:35
         compiled from "../Tpl/home\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:375255c2c906e58df4-36755937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '077691865e5c4174a9e7fca43a7d73e21867960a' => 
    array (
      0 => '../Tpl/home\\Index\\index.html',
      1 => 1454133025,
      2 => 'file',
    ),
    'c4865507a796473fe02d38cbc004832b2d6455e4' => 
    array (
      0 => '../Tpl/home\\public\\layout.html',
      1 => 1454133027,
      2 => 'file',
    ),
    '1e3c5fb0116615cfb45ec441269e58651b041892' => 
    array (
      0 => '../Tpl/home\\public\\sideleft.html',
      1 => 1454133027,
      2 => 'file',
    ),
    'acf77979f77bf1aa23704304f97faeafad686825' => 
    array (
      0 => '../Tpl/home\\public\\sideright.html',
      1 => 1454133027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '375255c2c906e58df4-36755937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55c2c907d8288',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c2c907d8288')) {function content_55c2c907d8288($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' >
<link href = "<?php echo @CSS_URL;?>
styles.css" rel = "stylesheet" type = "text/css">


<link href = "<?php echo @CSS_URL;?>
slider.css" rel = "stylesheet" type = "text/css">


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
    <div class = "main-left">
	   <div class = "main-left-top">

	     <?php /*  Call merged included template "public/sideleft.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('public/sideleft.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '375255c2c906e58df4-36755937');
content_56ad7aef24b37($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "public/sideleft.html" */?>
		 <div class="slider">
		   <div class="slider-container">
              <div class="slider-wrapper">
                 <div class="slide"> <img src="<?php echo @IMG_URL;?>
img1.jpg" alt="jQuery Slider with CSS Transitions"> </div>
                 <div class="slide"> <img src="<?php echo @IMG_URL;?>
img2.jpg" alt="jQuery Slider with CSS Transitions"> </div>
                 <div class="slide"> <img src="<?php echo @IMG_URL;?>
img3.jpg" alt="jQuery Slider with CSS Transitions"> </div>
              </div>
           </div>
        </div>
		
	    <div class = "new-book">
		  <h3>新书上架</h3>
		  <div>
		  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newBooks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		     <div class = "book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg" title='<?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
'>
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" title='<?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			 
		  </div>
	    </div>
	  </div>
	  
	  <div class = "main-left-bottom">
	  <div class = "recommend">
	  	<h3 class = "recommend-title">为你推荐</h3>
		<ul class = "recommend-header">
			<li id = "s1" onmouseover="showrecommend(1)" >文艺</li>
			<li id = "s2" onmouseover="showrecommend(2)" >小说</li>
			<li id = "s3" onmouseover="showrecommend(3)">励志</li>
			<li id = "s4" onmouseover="showrecommend(4)">社科</li>
			<li id = "s5" onmouseover="showrecommend(5)">经管</li>
		</ul>
		<hr/>
	  <div id = "recommend1">
	  	<div class = "layer">
	  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			 
		</div>
		<div class = "layer">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			
		</div>
	  </div>
	  <div id = "recommend2">
	  	<div class = "layer">
	  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			
		</div>
		<div class = "layer">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			
		</div>
	  </div>
	  <div id = "recommend3">
	  	<div class = "layer">
	  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			
		</div>
		<div class = "layer">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			
		</div>
	  </div>
	  <div id = "recommend4">
	  	<div class = "layer">
	  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			
		</div>
	    <div class = "layer">
	    	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			
		</div>
	  </div>
	  <div id = "recommend5">
	  	<div class = "layer">
	  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			
		</div>
		<div class = "layer">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assortBook3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="book recommend_book">
			    <img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
				<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
				<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
			 </div>
			<?php } ?>
			
		</div>
	  </div>	
	  </div>
	  
	  
	  <div class = "favorite">
	  	<h3 class = "recommend-title">读者推荐</h3>
		<ul class = "favorite-header">
			<li id = "s6" onmouseover="showfavorite(1)">好评最多</li>
			<li id = "s7" onmouseover="showfavorite(2)">最受关注</li>
			<li id = "s8" onmouseover="showfavorite(3)">人气收藏</li>
		</ul>
		<hr/>
		<div id = "favorite1">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodCommentBook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		 	<div class = "favorite-book">
				<img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<div class = "book describe">
					<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
					<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
					<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
					<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
					<br/>
					<p><?php echo $_smarty_tpl->tpl_vars['v']->value['bcontent'];?>
</p>
				</div>
			</div>
			<?php } ?>
			
		</div>
		<div id = "favorite2">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['popBook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		 	<div class = "favorite-book">
				<img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<div class = "book describe">
					<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
					<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
					<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
					<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
					<br/>
					<p><?php echo $_smarty_tpl->tpl_vars['v']->value['bcontent'];?>
</p>
				</div>
			</div>
			<?php } ?>
		 	
		</div>
		<div id = "favorite3">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['collectionBook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		 	<div class = "favorite-book">
				<img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<div class = "book describe">
					<a href = "<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
					<a href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class = "author"><?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
</a>
					<a class = "new_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
</a>
					<a class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
</a>
					<br/>
					<p><?php echo $_smarty_tpl->tpl_vars['v']->value['bcontent'];?>
</p>
				</div>
			</div>
			<?php } ?>
		 	
		</div>
	  </div>  
	  
	  
	</div>
	</div>
	<!---------main-left----------end----------->
	
	<?php /*  Call merged included template "public/sideright.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('public/sideright.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '375255c2c906e58df4-36755937');
content_56ad7aef879c6($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "public/sideright.html" */?>
	<!--------main-right--------end-------------->
  </div>
  <!-------mian-----------end--------------->
  
  


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
</html><?php }} ?><?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 11:09:35
         compiled from "../Tpl/home\public\sideleft.html" */ ?>
<?php if ($_valid && !is_callable('content_56ad7aef24b37')) {function content_56ad7aef24b37($_smarty_tpl) {?>
<div class = "content" >
		    <div class = "content-header">图书分类</div>
			<div class = "content-info">
			   <ul class = "side-li">
			      <li onmouseover="show(1)" ><div class = "info-style" >青春校园</div></li>
                  <li onmouseover="show(2)" ><div class = "info-style" >成功励志</div></li>
                  <li onmouseover="show(3)" ><div class = "info-style" >世界名著</div></li>
                  <li onmouseover="show(4)" ><div class = "info-style" >人文社科</div></li>
				  <li onmouseover="show(5)" ><div class = "info-style" >科学技术</div></li>
				  <li onmouseover="show(6)" ><div class = "info-style" >经济管理</div></li>
				  <li onmouseover="show(7)" ><div class = "info-style" >教材辅导</div></li>
				  <li onmouseover="show(8)" ><div class = "info-style" >文学艺术</div></li>
				  <li onmouseover="show(9)" ><div class = "info-style" >少儿读物</div></li>
				  <li onmouseover="show(10)" ><div class = "info-style">生活百科</div></li>
			   </ul>
			   
			   <ul class="hiden-box">
			      <li id = "cagorie1" class="cagorie">
				     <div class = "sub-nav">
						 <h3>青春文学</h3>
						 <div class="a-box">
						     <a href="##">校园爱情</a><span>|</span><a href="##">叛逆</a><span>|</span><a href="##">悬疑</a>
						 </div>
					 </div>
			     	</li>
				    <li id = "cagorie2" class="cagorie">
				     <div class = "sub-nav">
						 <h3>成功励志</h3>
						 <div class="a-box">
						     <a href="##">人生哲学</a><span>|</span> <a href="##">心灵与修养</a><span>|</span> <a href="#">性格与习惯</a>
							 <a href="##">人际交往</a><span>|</span> <a href="##">口才演讲</a><span>|</span><a href="##">人际交往</a>
						 </div>
					 </div>
				   </li>
				   <li id = "cagorie3" class="cagorie">
				     <div class = "sub-nav">
						 <h3>世界小说</h3>
						 <div class="a-box">
						     <a href="#">当代小说</a><span>|</span> <a href="#">科幻小说</a><span>|</span> <a href="#">文学评论与鉴赏</a>
						 </div>
						  <h3>名人传记</h3>
						 <div class="a-box">
						     <a href="#">中国名人</a><span>|</span> <a href="#">国外名人</a><span>|</span> <a href="#">中小学课外读物</a>
						 </div>
					 </div>
				   </li>
				   <li id = "cagorie4" class="cagorie">
				     <div class = "sub-nav">
						 <h3>历史</h3>
						 <div class="a-box">
						     <a href="#">中国史</a><span>|</span> <a href="#">世界史</a><span>|</span> <a href="#">史家名著</a>
							 <a href="#">文物考古</a><span>|</span> <a href="#">历史地理</a>
						 </div>
						 <h3>文化</h3>
						 <div class="a-box">
						     <a href="#">中国文化</a><span>|</span> <a href="#">文化随笔</a><span>|</span> <a href="#">各国文化</a>
							 <a href="#">地域文化</a><span>|</span> <a href="#">神秘文化</a>
						 </div>
						 <h3>政治|军事</h3>
						 <div class="a-box">
						     <a href="#">中国政治</a><span>|</span> <a href="#">党政读物</a><span>|</span> <a href="#">领袖著作</a>
							 <a href="#">时事政治</a><span>|</span> <a href="#">军事技术</a>
						 </div>
					 </div>
				   </li>
				   <li id = "cagorie5" class="cagorie">
				     <div class = "sub-nav">
						 <h3>科普读物</h3>
						 <div class="a-box">
						     <a href="#">宇宙知识</a><span>|</span> <a href="#">生物世界</a><span>|</span> <a href="#">生态环境</a>
							 <a href="#">百科知识</a><span>|</span> <a href="#">科学世界</a>
						 </div>
					 </div>
				   </li>
				   <li id = "cagorie6" class="cagorie">
				     <div class = "sub-nav">
						 <h3>投资理财</h3>
						 <div class="a-box">
						     <a href="#">证券股票</a><span>|</span> <a href="#">投资指南</a><span>|</span> <a href="#">理财技巧</a>
							 <a href="#">经济学理论</a>
						 </div>
					 </div>
				   </li>
				   <li id = "cagorie7" class="cagorie">
				     <div class = "sub-nav">
						 <h3>中小学教辅</h3>
						 <div class="a-box">
						     <a href="#">小学升初中</a><span>|</span> <a href="#">小学通用</a><span>|</span> <a href="#">中考</a>
							 <a href="#">高中通用</a><span>|</span> <a href="#">英语专项</a><span>|</span><a href="#">学习方法</a>
						 </div>
					 </div>
				   </li>
				    <li id = "cagorie8" class="cagorie">
				     <div class = "sub-nav">
						 <h3>青春文学</h3>
						 <div class="a-box">
						     <a href="#">偶像明星</a><span>|</span> <a href="#">校园爱情</a><span>|</span><a href="#">青春读物</a>
						 </div>
					 </div>
			     	</li>
					 <li id = "cagorie9" class="cagorie">
				     <div class = "sub-nav">
						 <h3>幼儿启蒙</h3>
						 <div class="a-box">
						     <a href="#">动漫卡通</a><span>|</span> <a href="#">益智游戏</a><span>|</span><a href="#">科普百科</a>
						 </div>
					 </div>
			     	</li>
					 <li id = "cagorie10" class="cagorie">
				     <div class = "sub-nav">
						 <h3>生活百科</h3>
						 <div class="a-box">
						     <a href="#">家庭家居</a><span>|</span> <a href="#">旅游</a><span>|</span><a href="#">美食</a>
						 </div>
					 </div>
			     	</li>
			   </ul>
			</div>
	     </div><?php }} ?><?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 11:09:35
         compiled from "../Tpl/home\public\sideright.html" */ ?>
<?php if ($_valid && !is_callable('content_56ad7aef879c6')) {function content_56ad7aef879c6($_smarty_tpl) {?><div class = "main-right">
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