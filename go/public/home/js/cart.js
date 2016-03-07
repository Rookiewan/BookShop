$(document).ready(function(){
	getCart();
	$(document).on('click','.action',function(){
		var bid=$(this).parent().next().val();
		if(confirm('是否删除？')){
			delCartByBid(bid);
			window.location.reload();
		}
	});
	$('.pay').click(function(){
		if(sessionStorage){
			var carts=sessionStorage.getItem('carts');
			carts__='['+carts+']';
			carts__json=eval('('+carts__+')');

			postData={
				'cartBook':carts__json
			}
			url='Book/cart';
			sendData(url,'post',postData,null,function(data){
				if(data==1){
					showAlert('购买成功!');
					delAllCart();
					setTimeout(function(){
						window.location.reload();
					},1500);
				}
			});
		}
	});
});

function getCart(){
	if(sessionStorage){
		var carts=sessionStorage.getItem('carts');
		
		if(carts==null || carts==''){
			$("<div class = 'main'><img src='../../public/home/images/icon_empty.png' /><div class = 'Content'>您的购物车中暂时没有商品，您可以返回<a href='../Index/index' class='toIndex'>首页</a>继续购物</div> </div>").insertBefore('.cart');
			$('.cart').remove();
			//sessionStorage.setItem('carts',cart_one);
		}else{
			carts__='['+carts+']';
			carts__json=eval('('+carts__+')');
			$.each(carts__json,function(idx,item){
				$("<div class='clear'></div><div class = 'item'><div class = 'number'>"+(idx+1)+"</div><img src='"+item.imgurl+"'/><div class = 'book_name'><a href = '/BookShop/go/index.php/Book/bookDetail/bid/" + item.bid + "'>《" + item.bname + "》</a><br /><div class = 'author'>作者："+item.author+"</div></div><div class = 'price price__'>&yen;"+item.price+"</div><div class = 'countItem'>"+item.count+"</div><div class = 'action'>删除</div></div><input type='hidden' value='"+item.bid+"'>").insertBefore('.total_price');
			});
			getTotal();
		}
		
	}
}
function getTotal(){
	var prices=$('.price__');
	var counts=$('.countItem');
	var cartLength=prices.length;
	var total=0;
	for(var i=0;i<cartLength;i++){
		total=parseFloat(parseFloat(total)+parseFloat(prices.eq(i).text().replace('¥',''))*parseInt(counts.eq(i).text())).toFixed(2);
	}
	$('.total').text('¥'+total);
}

function delCartByBid(bid){
	if(sessionStorage){
		var carts=sessionStorage.getItem('carts');
		
		carts__='['+carts+']';
		carts__json=eval('('+carts__+')');

		$.each(carts__json,function(idx,item){
			if(item.bid==bid){
				carts__json.splice(idx,1);
				return false;
			}
		});
		carts=JSON.stringify(carts__json);
		carts=carts.replace('[','');
		carts=carts.replace(']','');
		sessionStorage.setItem('carts',carts);
	}
}
function delAllCart(){
	if(sessionStorage){
		sessionStorage.removeItem('carts');
	}
}