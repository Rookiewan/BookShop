function show(index){
	  for(var i=1;i<11;i++){
	  	if(i==index){
			$('#cagorie'+i).css('display','block');
			var cagorieURL=URL+'Book/cagorie/btype/'+$('.info-style').eq(i-1).text();
			$('#cagorie'+i).find('a').each(function(){
				$(this).attr('href',cagorieURL+'/s/'+$(this).text()+'/pn/1');
			});
		}else{
			$('#cagorie'+i).css('display','none');
		}
	  }
	  
}
//为你推荐JS
function showrecommend(index){
	  for(var i=1;i<6;i++){
	  	if(i==index){
			$('#recommend'+i).css('display','block');
		}else{
			$('#recommend'+i).css('display','none');
		}
	  }	  
}
//读者推荐JS
function showfavorite(index){
  for(var i=1;i<4;i++){
	  	if(i==index){
			$('#favorite'+i).css('display','block');
		}else{
			$('#favorite'+i).css('display','none');
		}
	  }	  
}
//热销书单JS
function showOnsale1(index){
	 for(var i=1;i<6;i++){
	  	if(i==index){
			$('#onsale'+i).css('display','block');
		}else{
			$('#onsale'+i).css('display','none');
		}
	  }	 
}
function showOnsale2(index){
	 for(var i=6;i<11;i++){
	  	if(i==index){
			$('#onsale'+i).css('display','block');
		}else{
			$('#onsale'+i).css('display','none');
		}
	  }	 
}


window.onload=function(){
	
	$('#cagorie1,#cagorie2,#cagorie3,#cagorie4,#cagorie5,#cagorie6,#cagorie7,#cagorie78,#cagorie9,#cagorie10').hover(
		function(){},
		function(){
			$('#'+this.id).css('display','none');
		}
	);
	$('.content').hover(
		function(){},
		function(){
			for(var i=1;i<8;i++){
				$('#cagorie'+i).css('display','none');
	    	 }
		}
	);
	$('#onsale1,#onsale2,#onsale3,#onsale4,#onsale5').hover(
		function(){},
		function(){
			$('#'+this.id).css('display','none');
			$('#onsale1').css('display','block');
		}
	);
	$('#onsale6,#onsale7,#onsale8,#onsale9,#onsale10').hover(
		function(){},
		function(){
			$('#'+this.id).css('display','none');
			$('#onsale10').css('display','block');
		}
	);
	
	$('#s1,#s2,#s3,#s4,#s5').hover(
		function(){
			$('.recommend-header > li').css('border-style','hidden');
			$('#'+this.id).css('border-style','solid');
		}
	);
	
	$('#s6,#s7,#s8').hover(
		function(){
			$('.favorite-header > li').css('border-style','hidden');
			$('#'+this.id).css('border-style','solid');
		}
	);
	
	$('.onsale-header>li').hover(
		function(){
			$('.onsale-header>li').each(function(){
				this.className = 'salestyle1';
			});
			this.className = 'salestyle2';	
		}
	);
	$('.title>li').hover(
		function(){
			$('.title>li').each(function(){
				this.className = 'style2';
			});
			this.className = 'style1';	
		}
	);
	$(function() {
		   Slider.init({
		   target: $('.slider'),
		   time: 6000
		   });
	});

	$(".jqzoom").imagezoom();
	
	$("#thumblist li a").click(function(){
		$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
		$(".jqzoom").attr('src',$(this).find("img").attr("mid"));
		$(".jqzoom").attr('rel',$(this).find("img").attr("big"));
	});

	$('.tb-selected>div>a').click();


	var buyCount=1;
	$('.up__').click(function(){
		buyCount++;
		$('.count>input').val(buyCount);
	});
	$('.down__').click(function(){
		if(buyCount<2) return;
		buyCount--;
		$('.count>input').val(buyCount);
	});

	$('.submitBtn').click(function(){
		if(sessionStorage){

			var uid=sessionStorage.getItem('uid');
			if(uid==null){
				showAlert('您还未登录，请先登录！');
				return;
			}
			uid=parseInt(uid);
			var date=new Date();
			var dateTime=date.toLocaleDateString();
			var content=$('.comment_content').val();
			if($.trim(content)==''){
				showAlert('评价内容不能为空!');
				return;
			}
			var postData={
				'uid':uid,
				'bid':$("input[name='bid']").val(),
				'content':content,
				'time':dateTime,
				'option':'addComment'
			};

			url='Book/bookDetail';
			sendData(url,'post',postData,null,function(data){
				if(data>0){
					showAlert('评论成功！');
					setTimeout(function(){
						window.location.reload();
					},1000);
				}
			});
		}
	});
	getComment($("input[name='bid']").val(),pagenow);
	

	$(document).on('click','.pages a',function(){
		if($(this).hasClass('pagenow')){
			return;
		}
		getComment($("input[name='bid']").val(),$(this).attr('page'));
	});

	$('.buy').click(function(){
		var uid=sessionStorage.getItem('uid');
		if(uid==null){
			showAlert('您还未登录，请先登录！');
			return;
		}
		uid=parseInt(uid);
		var bcount=$("input[name='buycount']").val();
		var countLeft=$('.countLeft').text().replace('库存 ','');
		if(parseInt(bcount)>parseInt(countLeft)){
			showAlert('超过购买数量！');
			return;
		}
		var cart_one="{uid:"+uid+",bid:'"+$("input[name='bid']").val()+"',author:'"+$('.author').eq(0).text()+"',imgurl:'"+$('.tb-selected img').attr('src').replace('small','index')+"',bname:'"+$('.name').text()+"',count:'"+$("input[name='buycount']").val()+"',price:'"+$('.price').text().replace('¥','')+"'}";
		
		setCart(cart_one,$("input[name='bid']").val(),$("input[name='buycount']").val());
		showAlert('添加成功！');
		getCartCount();

	});
	$('.submit_buy').click(function(){
		var uid=sessionStorage.getItem('uid');
		if(uid==null){
			showAlert('您还未登录，请先登录！');
			return;
		}
		uid=parseInt(uid);
		var bcount=1;
		var countLeft=$(this).attr('bcount');
		if(parseInt(bcount)>parseInt(countLeft)){
			showAlert('超过购买数量！');
			return;
		}
		var cart_one="{uid:"+uid+",bid:'"+$(this).attr('bid')+"',author:'"+$(this).attr('author')+"',imgurl:'"+$(this).parent().parent().find('img').attr('src')+"',bname:'"+$(this).parent().parent().find('a').text()+"',count:'"+bcount+"',price:'"+$(this).attr('price')+"'}";
		setCart(cart_one,$("input[name='bid']").val(),$("input[name='buycount']").val());
		showAlert('添加成功！');
		getCartCount();
	});
	$('.search .submit').click(function(){
		searchByKey();
	});
	$('.search .textbox').keydown(function(e){
		var e = e || event;
 		keycode = e.which || e.keyCode;
		if(keycode==13){
			searchByKey();
		}
	});
	getCartCount();


	/*var cagorieURL;
	$('.info-style').click(function(){
		cagorieURL=URL+'Book/cagorie/btype/'+$(this).text()+'/s//pn/1';
		window.location.href=cagorieURL;
	});*/

}
var pagenow=1;

function searchByKey(){
	var key=$('.search .textbox').val();
	if($.trim(key)!=''){
		window.location.href=URL+'Book/search/key/'+key+'/pn/1';
	}else{
		showAlert('搜索内容不能为空!');
	}
}
function getComment(bid,pagenow__){
	var url='Book/bookDetail';
	var postData={
		'bid':bid,
		'pagenow':pagenow__,
		'option':'getComment'
	};
	sendData(url,'post',postData,'json',function(data){
		$('.comment_item').remove();
		$('.pages>ul li').remove();
		var json_comments=$.parseJSON(data).comments;
		var json_pages=$.parseJSON(data).pagenum;
		if(json_comments==null) {
			$("<div class='empty'><span>目前尚未有评论，快来评论一个吧</span></div>").insertBefore('.pages');
			return;
		}
		var IMG_URL='../../../../../go/public/home/images/';
		$.each(json_comments,function(idx,item){
			$("<div class = 'comment_item'><div class = 'user'><img src='"+IMG_URL+item.photo+"'><p>"+item.nickName+"</p><p>"+item.time+"</p></div><div class = 'comment_detail'>"+item.content+"</div></div><div class = 'clear'></div>").insertBefore('.pages');
		});

		
		
		$("<li><a href='##' page='1'><<</a></li>").appendTo('.pages>ul');
		if(parseInt(pagenow__)>1){
			$("<li><a href='##' page='"+(parseInt(pagenow__)-1)+"'><</a></li>").appendTo('.pages>ul');
		}else{
			$("<li><a href='##' page='1'><</a></li>").appendTo('.pages>ul');
		}


		if(parseInt(pagenow__)>2){
			$("<li><a href='##' page='"+(parseInt(pagenow__)-2)+"'>"+(parseInt(pagenow__)-2)+"</a></li>").appendTo('.pages>ul');
			$("<li><a href='##' page='"+(parseInt(pagenow__)-1)+"'>"+(parseInt(pagenow__)-1)+"</a></li>").appendTo('.pages>ul');
		}else if(parseInt(pagenow__)==2){
			$("<li><a href='##' page='1'>1</a></li>").appendTo('.pages>ul');
		}

		$("<li><a href='##' page='"+parseInt(pagenow__)+"' class='pagenow'>"+parseInt(pagenow__)+"</a></li>").appendTo('.pages>ul');

		if((json_pages-parseInt(pagenow__))>1){
			$("<li><a href='##' page='"+(parseInt(pagenow__)+1)+"'>"+(parseInt(pagenow__)+1)+"</a></li>").appendTo('.pages>ul');
			$("<li><a href='##' page='"+(parseInt(pagenow__)+2)+"'>"+(parseInt(pagenow__)+2)+"</a></li>").appendTo('.pages>ul');
		}else if((json_pages-parseInt(pagenow__))==1){
			
			$("<li><a href='##' page='"+(parseInt(pagenow__)+1)+"'>"+(parseInt(pagenow__)+1)+"</a></li>").appendTo('.pages>ul');
		}


		if(parseInt(pagenow__)<json_pages){
			$("<li><a href='##' page='"+(parseInt(pagenow__)+1)+"'>></a></li>").appendTo('.pages>ul');
		}else{
			$("<li><a href='##' page='"+json_pages+"'>></a></li>").appendTo('.pages>ul');
		}

		$("<li><a href='##' page='"+json_pages+"'>>></a></li>").appendTo('.pages>ul');
	});
}

function setCart(cart_one,bid,newcount){
	if(sessionStorage){
		var carts=sessionStorage.getItem('carts');
		
		if(carts==null || carts==''){
			sessionStorage.setItem('carts',cart_one);
		}else{
			carts__='['+carts+']';
			carts__json=eval('('+carts__+')');

			var isNew=false;

			$.each(carts__json,function(idx,item){
				if(item.bid==bid){
					item.count=parseInt(item.count)+parseInt(newcount);
					isNew=true;
					return false;
				}
			});
			carts=JSON.stringify(carts__json);
			carts=carts.replace('[','');
			carts=carts.replace(']','');
			if(isNew){
				sessionStorage.setItem('carts',carts);
			}else{
				carts=carts+','+cart_one;
				sessionStorage.setItem('carts',carts);
			}
		}
		
	}
}

function getCartCount(){
	if(sessionStorage){
		var carts=sessionStorage.getItem('carts');
		if(carts==null){
			$('.buy-cart-count').text('0');
			return;
		}
		carts__='['+carts+']';
		carts__json=eval('('+carts__+')');
		$('.buy-cart-count').text(carts__json.length);
	}
}