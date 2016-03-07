$(document).ready(function(){
	$('.submit').click(function(){
		var inputs=$('.main input');
		var postData={
			'nick':inputs[0].value,
			'name':inputs[1].value,
			'zipcode':inputs[2].value,
			'address':inputs[3].value,
			'password':inputs[4].value,
			'mail':inputs[5].value,
			'repassword':inputs[6].value,
			'phone':inputs[7].value
		};
		nickName=postData['nick'];
		var url='User/register';
		if(checkData(postData)){
			sendData(url,'post',postData,null,registerHandle);
		}
	});
});
var nickName=null;
function registerHandle(data){
	if(data>1){
		showAlert('注册成功！');
		if(sessionStorage){
			sessionStorage.setItem('userNick',nickName);
			sessionStorage.setItem('uid',data);
		}
		setTimeout(function(){
			window.location.href=URL+'Index/index';
		},1500);
	}else{
		showAlert(data);
	}
}
function checkData(data){
	if(data['nick'].length>20){
		showAlert('账号太长！');
		return;
	}
	if(data['nick']==''){
		showAlert('账号不能为空！');
		return;
	}
	if(data['password']==''){
		showAlert('密码不能为空！');
		return;
	}
	if(data['password']!=data['repassword']){
		showAlert('两次输入的密码不一致！');
		return;
	}
	return true;
}