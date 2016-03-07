<?php /* Smarty version Smarty-3.1.6, created on 2015-08-12 09:21:41
         compiled from "../Tpl/home\Book\cagorie.html" */ ?>
<?php /*%%SmartyHeaderCode:2024055ca9fa5b912a6-58416077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2666bbdf4f819c25bed48f3599e7ae07ad13b68' => 
    array (
      0 => '../Tpl/home\\Book\\cagorie.html',
      1 => 1438825322,
      2 => 'file',
    ),
    'c4865507a796473fe02d38cbc004832b2d6455e4' => 
    array (
      0 => '../Tpl/home\\public\\layout.html',
      1 => 1438829422,
      2 => 'file',
    ),
    '1e3c5fb0116615cfb45ec441269e58651b041892' => 
    array (
      0 => '../Tpl/home\\public\\sideleft.html',
      1 => 1438765271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2024055ca9fa5b912a6-58416077',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55ca9fa5efca9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca9fa5efca9')) {function content_55ca9fa5efca9($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' >
<link href = "<?php echo @CSS_URL;?>
styles.css" rel = "stylesheet" type = "text/css">


<link href = "<?php echo @CSS_URL;?>
cagorite.css" rel = "stylesheet" type = "text/css">


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
  		<?php /*  Call merged included template "public/sideleft.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('public/sideleft.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2024055ca9fa5b912a6-58416077');
content_55ca9fa5cae88($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "public/sideleft.html" */?>
	</div>
	<div class = "main-right">
		<div class = "cagorite">
			<div class = "title"><?php echo $_smarty_tpl->tpl_vars['btype']->value;?>
&nbsp;>&nbsp;<?php echo $_smarty_tpl->tpl_vars['btype_s']->value;?>
</div>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bookTypesInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<div class = "item">
				<img src="<?php echo @IMG_URL;?>
details/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['bimage'];?>
_index.jpg">
				<a class = "book_name" href="<?php echo @__GROUP__;?>
/Book/bookDetail/bid/<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</a>
				<div class = "comment">有<?php echo $_smarty_tpl->tpl_vars['v']->value['commentNum'];?>
条评论</div>
				<div class = "intro"><?php echo $_smarty_tpl->tpl_vars['v']->value['bcontent'];?>
</div>
				<div class = "price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
 <span class = "original_price">&yen;<?php echo $_smarty_tpl->tpl_vars['v']->value['bprice'];?>
 </span>
					<input class = "submit_buy" type="button" author='<?php echo $_smarty_tpl->tpl_vars['v']->value['bauthor'];?>
' bcount='<?php echo $_smarty_tpl->tpl_vars['v']->value['bcount'];?>
' bid='<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
' price='<?php echo $_smarty_tpl->tpl_vars['v']->value['bnowprice'];?>
' value="购买">
				</div>
			</div>
			<?php } ?>
			
		</div>
		<div class = "page_cagorie">
			<ul><?php if ($_smarty_tpl->tpl_vars['pagenum']->value!=''){?>
				<li><a href='<?php echo @__ACTION__;?>
/btype/<?php echo $_smarty_tpl->tpl_vars['btype']->value;?>
/s/<?php echo $_smarty_tpl->tpl_vars['btype_s']->value;?>
/pn/1'><<</a></li>
				<li><a href='<?php echo @__ACTION__;?>
/btype/<?php echo $_smarty_tpl->tpl_vars['btype']->value;?>
/s/<?php echo $_smarty_tpl->tpl_vars['btype_s']->value;?>
/pn/<?php if ($_smarty_tpl->tpl_vars['pagenow']->value>2){?><?php echo $_smarty_tpl->tpl_vars['pagenow']->value-1;?>
<?php }else{ ?>1<?php }?>'><</a></li>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pagenum']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
				<li><a  <?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pagenow']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1==$_tmp2){?> class='pagenow' disabled='disabled'<?php }else{ ?>href='<?php echo @__ACTION__;?>
/btype/<?php echo $_smarty_tpl->tpl_vars['btype']->value;?>
/s/<?php echo $_smarty_tpl->tpl_vars['btype_s']->value;?>
/pn/<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
' <?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
</a></li>
				<?php endfor; endif; ?> 
				<li><a href='<?php echo @__ACTION__;?>
/btype/<?php echo $_smarty_tpl->tpl_vars['btype']->value;?>
/s/<?php echo $_smarty_tpl->tpl_vars['btype_s']->value;?>
/pn/<?php if ($_smarty_tpl->tpl_vars['pagenum']->value-$_smarty_tpl->tpl_vars['pagenow']->value>1){?><?php echo $_smarty_tpl->tpl_vars['pagenow']->value+1;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
<?php }?>'>></a></li>
				<li><a href='<?php echo @__ACTION__;?>
/btype/<?php echo $_smarty_tpl->tpl_vars['btype']->value;?>
/s/<?php echo $_smarty_tpl->tpl_vars['btype_s']->value;?>
/pn/<?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
'>>></a></li>
				<?php }?>
			</ul>
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
		<div id='alertTips'>
			<div class='alertMain'>
				<div class='hostName'>BookShop:
					<i class='closeAlert'>Close</i>
				</div>
				<div class='alertContent'></div>
			</div>
		</div>
	  
  </div>
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
</html><?php }} ?><?php /* Smarty version Smarty-3.1.6, created on 2015-08-12 09:21:41
         compiled from "../Tpl/home\public\sideleft.html" */ ?>
<?php if ($_valid && !is_callable('content_55ca9fa5cae88')) {function content_55ca9fa5cae88($_smarty_tpl) {?>
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
	     </div><?php }} ?>