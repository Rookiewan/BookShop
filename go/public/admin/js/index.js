$(document).ready(function(){

	var adminName=sessionStorage.getItem('adminName');
	if(adminName!=null){
		$('.admin_login').css('display','none');
		$('.mainIndex').find('.admin').text(adminName);
	}else{
		$('.admin_quit').css('display','none');
		$('.mainIndex').find('.admin').text('非法用户！请先登录！');
	}

	var navA=$('.mainLeft').find('a');
	navA.click(function(){
		var optionName=$(this).text();
		var this_li=$(this).parent();
		if(adminName!=null){
			if(optionName=='首页'){
				selectTab('mainIndex',this_li);
			}else if(optionName=='用户管理'){
				getUserInfo();
				selectTab('mainUser',this_li);
			}else if(optionName=='图书管理'){
				getBookInfo();
				selectTab('mainBook',this_li);
			}else if(optionName=='订单管理'){
				getOrderInfo();
				selectTab('mainOrder',this_li);
			}else if(optionName=='评价管理'){
				getCommentInfo();
				selectTab('mainComment',this_li);
			}
		}else{
			showAlert('请先登录！');
		}
		
	});
	$(document).on('click','.boption .bupd',function(){
		bUpdBid=$(this).parent().siblings('.bid').text();
		url='admin/Admin/getBookByBid/bid/'+bUpdBid;

		boption=true;
		sendData(url,null,null,'json',function(data){
			var bookInfoByBid_json=$.parseJSON(data).bookInfoByBid;
			$("input[name='bname']").val(bookInfoByBid_json.bname);
			$("input[name='bauthor']").val(bookInfoByBid_json.bauthor);
			$('.optionTableOuter select').val(bookInfoByBid_json.btype);
			$("input[name='bprice']").val(bookInfoByBid_json.bprice);
			$("input[name='bnowprice']").val(bookInfoByBid_json.bnowprice);
			$("input[name='bpublic']").val(bookInfoByBid_json.bpublic);
			$("input[name='bpublictime']").val(bookInfoByBid_json.bpublictime);
			$("input[name='bcount']").val(bookInfoByBid_json.bcount);
			$('.optionRow .bauthorI').val(bookInfoByBid_json.bauthorI);
			$('.optionRow .bcontent').val(bookInfoByBid_json.bcontent);
		});

		var top=$(this).offset().top;
		$('.optionBookInfo').css('top',top+'px');
		$('.optionCaption').text('修改图书');
		$('.optionBookInfo').slideDown(1000);
	});
	$(document).on('click','.boption .bDel',function(){
		var bid=$(this).parent().siblings('.bid').text();
		if(confirm('是否删除此图书？')){
			url='admin/Admin/delBook/bid/'+bid;
			sendData(url,null,null,'text',function(data){
				if(data==1){
					showAlert('删除成功！');
					getBookInfo();
				}else{
					showAlert('删除失败！');
				}
			});
		}
	});
	$('.cancel').click(function(){
		$('.optionBookInfo').css('display','none');
	});
	$(document).on('click','.addBook',function(){
		$("input[name='bname']").val('');
		$("input[name='bauthor']").val('');
		$('.optionTableOuter select').val('');
		$("input[name='bprice']").val('');
		$("input[name='bnowprice']").val('');
		$("input[name='bpublic']").val('');
		$("input[name='bpublictime']").val('');
		$("input[name='bcount']").val('');
		$('.optionRow .bauthorI').val('');
		$('.optionRow .bcontent').val('');

		var top=$(this).offset().top;
		$('.optionBookInfo').css('top',top+'px');
		$('.optionCaption').text('新增图书');
		$('.optionBookInfo').slideDown(1000);
	});

	$('.ok').click(function(){
		if(boption){
			addOrUpdBook('upd');
		}else{
			addOrUpdBook('add');
		}
		
	});
	$("input[name='bprice']").blur(function(){
		$("input[name='bnowprice']").val($(this).val());
	});
	$('.admin_quit').click(function(){
		sessionStorage.removeItem('adminName');
		showAlert('退出成功！');
		setTimeout(function(){
			window.location.href=URL+'admin/Admin/login';
		},1500);
	});

	
	$(document).on('click','.resetPwd',function(){
		var uid=$(this).parent().siblings('.uid').text();
		if(confirm('将该用户的密码重设为 123456 ？')){
			url='admin/Admin/resetPwd/uid/'+uid;
			sendData(url,null,null,'text',function(data){
				if(data==1 || data==0){
					showAlert('重置成功！');
					getUserInfo();
				}else{
					showAlert('重置失败!');
				}
			});
		}
	});
	$(document).on('click','.uDel',function(){
		var uid=$(this).parent().siblings('.uid').text();
		if(confirm('是否删除该用户？')){
			url='admin/Admin/delUser/uid/'+uid;
			sendData(url,null,null,'text',function(data){
				if(data==1){
					showAlert('删除成功！');
					getUserInfo();
				}else{
					showAlert('删除失败!');
				}
			});
		}
	});
	$(document).on('click','.cDel',function(){
		var cid=$(this).parent().siblings('.cid').text();
		if(confirm('是否删除该条评价？')){
			url='admin/Admin/delComment/cid/'+cid;
			sendData(url,null,null,'text',function(data){
				if(data==1){
					showAlert('删除成功！');
					getCommentInfo();
				}else{
					showAlert('删除失败!');showAlert
				}
			});
		}
	});
});

var boption=false;
var bUpdBid;

function selectTab(tabName,li){
	$('.mainLeft').find('li').each(function(){
		$(this).removeClass('tabSeleted');
	});
	li.addClass('tabSeleted');
	$('.mainRight>div').each(function(){
		$(this).css('display','none');
	});
	$('.'+tabName).css('display','table');
}

function getUserInfo(){
	url='admin/Admin/getUserInfo';
	sendData(url,null,null,'json',function(data){
		var userInfo_json=$.parseJSON(data).userInfo;
		$('.mainUser').empty();
		$("<div class='tableCaption'>用户管理</div><div class='tableTitle'><div class='uid'>id</div><div class='unick'>账号</div><div class='upassword'>密码</div><div class='uname'>收货人</div><div class='umail'>邮箱</div><div class='uaddress'>地址</div><div class='uphone'>电话</div><div class='uoption'>操作</div></div>").appendTo('.mainUser');
		$.each(userInfo_json,function(idx,item){
			$("<div class='tableRow'><div class='uid'>"+parseInt(item.uid)+"</div><div class='unick'>"+item.unick+"</div><div class='upassword'>"+item.upassword+"</div><div class='uname'>"+item.uname+"</div><div class='umail'>"+item.umail+"</div><div class='uaddress'>"+item.uaddress+"</div><div class='uphone'>"+item.uphone+"</div><div class='uoption'><a href='##' class='resetPwd'>重置</a><a href='##' class='uDel'>删除</a></div></div>").appendTo('.mainUser');
		});
	});
}

function getBookInfo(){
	url='admin/Admin/getBookInfo';
	sendData(url,null,null,'json',function(data){
		var bookInfo_json=$.parseJSON(data).bookInfo;
		$('.mainBook').empty();
		$("<button class='addBook'>添加新书</button><div class='tableCaption'>图书管理</div><div class='tableTitle'><div class='bid'>id</div><div class='bname'>书名</div><div class='bauthor'>作者</div><div class='btype'>书籍分类</div><div class='bpublic'>出版社</div><div class='bcount'>库存</div><div class='boption'>操作</div></div>").appendTo('.mainBook');
		$.each(bookInfo_json,function(idx,item){
			$("<div class='tableRow'><div class='bid'>"+item.bid+"</div><div class='bname'>"+item.bname+"</div><div class='bauthor'>"+item.bauthor+"</div><div class='btype'>"+item.btype+"</div><div class='bpublic'>"+item.bpublic+"</div><div class='bcount'>"+item.bcount+"</div><div class='boption'><a href='##' class='bupd'>修改</a><a href='##' class='bDel'>删除</a></div></div>").appendTo('.mainBook');
		});
	});
}
function getCommentInfo(){
	url='admin/Admin/getCommentInfo';
	sendData(url,null,null,'json',function(data){
		var commentInfo_json=$.parseJSON(data).commentInfo;
		$('.mainComment').empty();
		$("<div class='tableCaption'>评价管理</div><div class='tableTitle'><div class='bid'>id</div><div class='bname'>书名</div><div class='content'>评论内容</div><div class='unick'>账号</div><div class='time'>评论时间</div><div class='coption'>操作</div></div>").appendTo('.mainComment');
		$.each(commentInfo_json,function(idx,item){
			$("<div class='tableRow'><div class='cid'>"+item.cid+"</div><div class='bname'>"+item.bname+"</div><div class='content'>"+item.content+"</div><div class='unick'>"+item.unick+"</div><div class='time'>"+item.time+"</div><div class='coption'><a href='##' class='cDel'>删除</a></div></div>").appendTo('.mainComment');
		});
	});
}
function getOrderInfo() {
	url = 'admin/Admin/getOrderInfo';
	sendData(url, null, null, 'json', function(data) {
		var orderInfo_json=$.parseJSON(data).buyBookOrder;
		$('.mainOrder').empty();
		$("<div class='tableCaption'>订单管理</div><div class='tableTitle'><div class='uname'>购买者</div><div class='bname'>书名</div><div class='count'>数量</div><div class='price'>单价</div><div class='sum'>总金额</div><div class='bcount'>库存</div><div class='time'>下单时间</div><div class='state'>状态</div></div>").appendTo('.mainOrder');
		$.each(orderInfo_json,function(idx,item){
			var stateText,
				stateClass,
				fCurr = '',
				sCurr = '',
				tCurr = '';
			switch(item.state) {
				case '0':
					stateText = '未发货';
					stateClass = 'undelivery';
					fCurr = 'curr';
					break;
				case '1':
					stateText = '已发货';
					stateClass = 'delivery';
					sCurr = 'curr';
					break;
				case '2':
					stateText = '已完成';
					stateClass = 'finish';
					tCurr = 'curr';
					break;
				default:
			}

			$("<div class='tableRow'><div class='unick'>"+(item.unick == null ? '该用户已删除' : item.unick)+"</div><div class='bname'>"+item.bname+"</div><div class='count'>"+item.count+"</div><div class='price'>"+item.price+"</div><div class='sum'>"+ (item.count * item.price) +"</div><div class='bcount'>" + item.bcount + "</div><div class='time'>" + item.time + "</div><div class='state " + stateClass + "'>" + stateText + "<div class='rowOpt'><a href='javascript:;'>修改状态<ul class='states'><li class='undelivery " + fCurr + "'>未发货</li><li class='delivery " + sCurr + "'>已发货</li><li class='finish " + tCurr + " '>已完成</li></ul></a><a href='javascript:;' cid=" + item.cartid + ">删除订单</a></div></div></div>").appendTo('.mainOrder');
		});
		$('.tableRow').on({
			mouseenter: function(e) {
				var opts = $(this).find('.state>.rowOpt');
				opts.css('right', $(this).outerWidth() - (e.pageX - $(this).offset().left) - 100 + 'px');
			},
			mouseleave: function() {
				var opts = $(this).find('.state>.rowOpt');
				opts.css('right', '-250%');
				opts.find('ul').stop().slideUp(300);
			}
		});
		$('.tableRow .state>.rowOpt>a').on('click', function(e) {
			var _this = $(this);
			if(e.target == this) {
				_this.find('ul').stop().slideToggle(300);
			}
			
		});
		$('.tableRow .state>.rowOpt>a>ul li').on('click', function() {
			if($(this).hasClass('curr')) {
				return false;
			}
			var cid = $(this).parents('.rowOpt').find('a').eq(1).attr('cid');
			if(confirm('将状态更新为 ' + $(this).text() + ' ?')) {
				url='admin/Admin/changeStateByCid/cid/' + cid + '/state/' + $(this).index();
				sendData(url,null,null,'json',function(data){
					if(data > 0){
						showAlert('更改成功!');
						setTimeout(function(){
							$('#alertTips').css('display','none');
							$('#mask').css('display','none');
							getOrderInfo();
						},1500);
					}
				});
			}
		});
		$('.tableRow .state>.rowOpt>a + a').on('click', function() {
			if(confirm('是否删除 ?')) {
				var _this = $(this);
				var cid = _this.attr('cid');

				url='admin/Admin/delOrderByCid/cid/' + cid;
				sendData(url,null,null,'json',function(data){
					if(data>0){
						showAlert('删除成功!');
						setTimeout(function(){
							$('#alertTips').css('display','none');
							$('#mask').css('display','none');
							getOrderInfo();
						},1500);
					}
				});
			}
		});
	});
}

function addOrUpdBook(option){
	var bname=$("input[name='bname']").val();
	if($.trim(bname)==''){
		showAlert('书名不能为空！');
		return;
	}
	var bauthor=$("input[name='bauthor']").val();
	if($.trim(bauthor)==''){
		showAlert('作者不能为空!');
		return;
	}
	var btype=$('.optionTableOuter select').val();
	var bprice=$("input[name='bprice']").val();
	if($.trim(bprice)==''){
		showAlert('价格不能为空 或 类型不对');
		return;
	}
	var bnowprice=$("input[name='bnowprice']").val();
	if($.trim(bnowprice)==''){
		showAlert('价格不能为空 或 类型不对');
		return;
	}
	var bpublic=$("input[name='bpublic']").val();
	if($.trim(bpublic)==''){
		showAlert('出版社不能为空！');
		return;
	}
	var bpublictime=$("input[name='bpublictime']").val();
	if($.trim(bpublictime)==''){
		showAlert('出版时间不能为空！');
		return;
	}
	var bcount=$("input[name='bcount']").val();
	if($.trim(bcount)==''){
		showAlert('库存不能为空 或 类型不对');
		return;
	}
	var bauthorI=$('.optionRow .bauthorI').val();
	if($.trim(bauthorI)==''){
		showAlert('作者简介不能为空!');
		return;
	}
	var bcontent=$('.optionRow .bcontent').val();
	if($.trim(bcontent)==''){
		showAlert('内容简介不能为空！');
		return;
	}

	if(option=='add'){
		var bimage=Math.floor(Math.random()*20)+1;
		bimage=bimage<10?'0'+bimage:bimage;

		url='admin/Admin/addNewBook';
		postData={
			'bname':bname,
			'bauthor':bauthor,
			'btype':btype,
			'bprice':bprice,
			'bnowprice':bnowprice,
			'bpublic':bpublic,
			'bpublictime':bpublictime,
			'bcontent':bcontent,
			'bauthorI':bauthorI,
			'bimage':bimage,
			'bcount':bcount,
			'bisnew':1
		};
		sendData(url,'post',postData,'text',function(data){
			if(data>0){
				showAlert('添加成功!');
				setTimeout(function(){
					$('.optionBookInfo').css('display','none');
					$('#alertTips').css('display','none');
					$('#mask').css('display','none');
					getBookInfo();
				},1500);
			}
		});
	}else if(option=='upd'){
		url='admin/Admin/updBook';
		postData={
			'bid':bUpdBid,
			'bname':bname,
			'bauthor':bauthor,
			'btype':btype,
			'bprice':bprice,
			'bnowprice':bnowprice,
			'bpublic':bpublic,
			'bpublictime':bpublictime,
			'bcontent':bcontent,
			'bauthorI':bauthorI,
			'bimage':bimage,
			'bcount':bcount,
		};
		sendData(url,'post',postData,'text',function(data){
			if(data>0){
				showAlert('修改成功!');
				boption=false;
				setTimeout(function(){
					$('.optionBookInfo').css('display','none');
					$('#alertTips').css('display','none');
					$('#mask').css('display','none');
					getBookInfo();
				},1500);
			}
		});
	}
}