$(document).ready(function(){
	
	$('.submit').click(function(){
		var postData={
			'nick':$('.text')[0].value,
			'password':$('.text')[1].value
		}
		nickName=postData['nick'];
		var url='User/login';
		if(checkData(postData)){
			sendData(url,'post',postData,null,loginHandle);
		}
	});
});
var nickName=null;
function checkData(data){
	if(data['nick']==''){
		showAlert('账号不能为空！');
		return;
	}
	if(data['password']==''){
		showAlert('密码不能为空！');
		return;
	}
	return true;
}

function loginHandle(data){
	if(data>0){
		showAlert('登录成功！');
		if(sessionStorage){
			sessionStorage.setItem('userNick',nickName);
			sessionStorage.setItem('uid',data);
		}
		URL+='Index/index';
		setTimeout(jumpToHome,2000);
		
	}else{
		showAlert(data);
	}
}
function jumpToHome(){
	window.location.href=URL;
}