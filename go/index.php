<?php
	header("content-type:text/html;charset=utf-8");
	//应用路径
	define('APP_PATH', '../');
	//开启debug模式
	define('APP_DEBUG', true);

	//调试函数
	function show_bug($msg,$color="green"){
		echo "<pre style='color:".$color.";'>";
		var_dump($msg);
		echo "</pre>";
	}
	define('SITE_URL', 'http://localhost/BookShop/');
	//define('SITE_URL', 'http://www.rookiewan.wang/BookShop/');
	//前台图片 CSS JS 路径
	define('CSS_URL', SITE_URL.'go/public/home/css/');
	define('IMG_URL', SITE_URL.'go/public/home/images/');
	define('JS_URL', SITE_URL.'go/public/home/js/');

	//后台图片 CSS JS 路径
	define('ADMIN_CSS_URL', SITE_URL.'go/public/admin/css/');
	define('ADMIN_IMG_URL', SITE_URL.'go/public/admin/images/');
	define('ADMIN_JS_URL', SITE_URL.'go/public/admin/js/');
	include'../../ThinkPHP/ThinkPHP.php';
?>