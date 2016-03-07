$(document).ready(function(){

	var as=$('#tab>a');
	var asL=as.length;
	as[0].style.backgroundColor='#0082FD';
	$('#tab>a').click(function(){
		for(var i=0;i<asL;i++){
			as[i].style.backgroundColor='#4cb1ca';
		}
		$(this).css('background-color','#0082FD');
	});
	getPersonalInfo();
	getBookRecord();

	$('.pInfo,.updInfo').click(function(){
		getPersonalInfo();
	});
	$('.buyRecord').click(function(){
		$('.recordContainer').empty();
		getBookRecord();
	});

	$('.updPersonalInfo').click(function(){
		var updInfo=$('.updInfoInput');
		var unick =updInfo.eq(0).val();
		if(unick==''){
			showAlert('账号不能为空！');
			return;
		}
		var postData={
			'uid':sessionStorage.getItem('uid'),
			'unick':unick,
			'uname':updInfo.eq(1).val(),
			'umail':updInfo.eq(2).val(),
			'uphone':updInfo.eq(3).val(),
			'uzipcode':updInfo.eq(4).val(),
			'uaddress':updInfo.eq(5).val(),
			'type':'info'
		};
		url='User/updInfo';
		sendData(url,'post',postData,null,function(data){
			if(data==1){
				showAlert('修改信息成功！');
			}
		});
	});
	$('.updPassword').click(function(){
		var uid=sessionStorage.getItem('uid');
		if(uid==null){
			showAlert('请先登陆!');
			return;
		}
		var password=$("input[type='password']").eq(0).val();
		var repassword=$("input[type='password']").eq(1).val();
		if(password=='' || repassword=='' || password!=repassword){
			showAlert('两次输入的密码不一致！');
			return;
		}
		var postData={
			'uid':uid,
			'upassword':password,
			'repassword':repassword,
			'type':'pwd'
		};
		url='User/updInfo';
		sendData(url,'post',postData,null,function(data){
			if(data==1 || data==0){
				showAlert('修改密码成功！');
				$("input[type='password']").eq(0).val('');
				$("input[type='password']").eq(1).val('');
			}else{
				showAlert('修改密码失败！');
			}
		});
	});


	
});


function getPersonalInfo(){
	var uid=sessionStorage.getItem('uid');
	if(uid==null){
		showAlert('请先登陆!');
		return;
	}

	url='Ucenter/getInfo/uid/'+uid;
	sendData(url,null,null,'json',function(data){
		if(data==-1){
			showAlert('查新信息失败！');
		}else{
			var json_personalInfo=$.parseJSON(data).personalInfo;

			$('.pInfo-left img').attr('src','../../public/home/images/'+json_personalInfo.uphoto);
			$('.username').text(json_personalInfo.unick);
			$('.infoMail').eq(1).text(json_personalInfo.umail);
			$('.infoName').eq(1).text(json_personalInfo.uname);
			$('.infoPhone').eq(1).text(json_personalInfo.uphone);
			$('.infoAddress').eq(1).text(json_personalInfo.uaddress);
			$('.infoZipcode').eq(1).text(json_personalInfo.uzipcode);


			var updInfo=$('.updInfoInput');
			updInfo.eq(0).val(json_personalInfo.unick);
			updInfo.eq(1).val(json_personalInfo.uname);
			updInfo.eq(2).val(json_personalInfo.umail);
			updInfo.eq(3).val(json_personalInfo.uphone);
			updInfo.eq(4).val(json_personalInfo.uzipcode);
			updInfo.eq(5).val(json_personalInfo.uaddress);
		}
	});
}

function getBookRecord(){
	var uid=sessionStorage.getItem('uid');
	if(uid==null){
		showAlert('请先登陆!');
		return;
	}
	url='Book/getBuyRecord/uid/'+uid;
	sendData(url,null,null,'json',function(data){
		var json_record=$.parseJSON(data).buyBookRecord;
		$("<div class='recordRow-th'><div class='bookName'>书名</div><div class='bookCount'>数量</div><div class='bookPrice'>单价</div><div class='bookTotalPrice'>总金额</div><div class='bookBuyTime'>购买时间</div><div class='bookState'>状态</div></div>").appendTo('.recordContainer');
		if(json_record=='error'){
			return;
		}
		$.each(json_record,function(idx,item){
			var stateText,
				stateClass;
			switch(item.state) {
				case '0':
					stateText = '未发货<a href="javascript:;" cid="' + item.cartid + '">取消订单</a>';
					stateClass = 'undelivery';
					break;
				case '1':
					stateText = '已发货';
					stateClass = 'delivery';
					break;
				case '2':
					stateText = '已完成';
					stateClass = 'finish';
					break;
				default:
			}

			$("<div class='recordRow'><div class='bookName'>"+item.bname+"</div><div class='bookCount'>"+item.count+"</div><div class='bookPrice'>"+item.price+"</div><div class='bookTotalPrice'>"+parseFloat(parseInt(item.count)*parseFloat(item.price)).toFixed(2)+"</div><div class='bookBuyTime'>"+item.time+"</div><div class='bookState " + stateClass + "'>"+stateText+"</div></div>").appendTo('.recordContainer');
			
		});
		$('.recordRow').on({
			mouseenter: function() {
				var a = $(this).find('a');
				a.css('right', '0');
			},
			mouseleave: function() {
				var a = $(this).find('a');
				a.css('right', '-100%');
			}
		});
		$('.recordRow a').on('click', function() {
			var _this = $(this);
			if(confirm('是否取消订单 ?')) {
				var cid = $(this).attr('cid');
				url='admin/Admin/delOrderByCid/cid/' + cid;
				sendData(url,null,null,'json',function(data){
					if(data>0){
						showAlert('取消成功!');
						_this.parents('.recordRow').remove();
						setTimeout(function(){
							$('#alertTips').css('display','none');
							$('#mask').css('display','none');
						},1500);
					}
				});
			}
		});
	});
}