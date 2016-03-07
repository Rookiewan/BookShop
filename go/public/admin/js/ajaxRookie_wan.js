
var URL='/BookShop/go/index.php/';
function g(id){
	return document.getElementById(id);
}
function init(){
	if(sessionStorage){
		var userNick=sessionStorage.getItem('userNick');
		if(userNick!=null){
			$('._login').hide();
			$('._register').hide();
			$('.quit').show();
			$('.buy-user>a').text(userNick);
		}else{
			$('.quit').hide();
		}
	}
}

function sendData(){//url,method,data,datatype,callback
	var url=arguments[0]?arguments[0]:'';
	var method=arguments[1]?arguments[1]:'get';
	var data=arguments[2]?arguments[2]:'';
	var datatype=arguments[3]?arguments[3]:'text';
	var callback=arguments[4]?arguments[4]:'callback';
	url=URL+url;
	$.ajax({
		url:url,
		type:method,
		data:data,
		datatype:datatype,
		success:callback
	});
}

function showAlert(data){
	fillToBody($('#mask'));
	var _alert=$('#alertTips');
	var _alertContent=$('.alertContent');
	$('#mask').css('display','block');
	_alert.css('display','block');
	autoCenter(_alert);

	_alertContent.text(data);
	
}
function autoCenter(el){
	var alertW=el.width();
	var alertH=el.height();

	var left=(document.body.clientWidth-alertW)/2;
	var top=document.body.scrollTop+alertH;
	el.css({
		'left': left+'px',
		'top' : top+'px'
	});
}
function fillToBody(el){
	var documentX=$(document).width();
	var documentY=$(document).height();

	el.css({
		'width':documentX+'px',
		'height':documentY+'px'
	});
}

var isDraging = false;
var mouseOffsetX = 0;
var mouseOffsetY = 0;

$(document).ready(function(){
	init();/*
	$('.buy-cart').click({
		showAlert('12312');
		if(sessionStorage){
			var userNick=sessionStorage.getItem('userNick');
			if(userNick==null){
				showAlert('请先登录在进行操作！');
				return;
			}else{
				showAlert('12312');
			}
		}
	});*/
	/*$('.buy-cart').click(function(){
		if(sessionStorage){
			var userNick=sessionStorage.getItem('userNick');
			if(userNick==null){
				showAlert('请先登录在进行操作！');
				return;
			}else{
				window.location.href=URL+'Book/cart';
			}
		}
	});
	$('.buy-user').click(function(){
		if(sessionStorage){
			var userNick=sessionStorage.getItem('userNick');
			if(userNick==null){
				showAlert('请先登录在进行操作！');
				return;
			}else{
				window.location.href=URL+'Ucenter/usercenter';
			}
		}
	});*/

	$('.closeAlert').click(function(){
		$('#alertTips').css('display','none');
		$('#mask').css('display','none');
	});
	/*$('.quit').click(function(){
		if(sessionStorage){
			sessionStorage.removeItem('userNick');
			sessionStorage.removeItem('uid');
			window.location.href=URL+'User/login';
		}
	});*/
	/*var temp_j;
	for(var i=0;i<10;i++){
		temp_j=0;
		for(var j=i*10;j<i*10+10;j++){
			temp_j++;
			$('.rank').eq(j).text(temp_j+'.');
		}
		
	}*/
	$('#alertTitle').mousedown(function(e){
		var e = e || window.event;
		var alertT = g('alertTips');
		mouseOffsetX = e.pageX - alertT.offsetLeft;
		mouseOffsetY = e.pageY - alertT.offsetTop;
		isDraging = true;
	});

	$(document).mousemove(function(e){
		var e = e || window.event;

		if(isDraging===true){
			var mouseX = e.pageX;
			var mouseY = e.pageY;

			var moveX = 0;
			var moveY = 0;

			moveX = mouseX - mouseOffsetX;
			moveY = mouseY - mouseOffsetY;

			var pageWidth  = $(window).width();
			var pageHeight = $(document).height();


			var maxX = pageWidth  - g('alertTips').offsetWidth - 20;
			var maxY = pageHeight - g('alertTips').offsetHeight;

			moveX =Math.min(maxX,Math.max(0,moveX));
			moveY =Math.min(maxY,Math.max(0,moveY));

			var alertT = g('alertTips');

			alertT.style.left = moveX + 'px';
			alertT.style.top  = moveY + 'px';
		}

		
	});

	$(document).mouseup(function(){
		isDraging = false;
	});
	
});