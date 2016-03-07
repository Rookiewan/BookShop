<?php
return array(
	//'配置项'=>'配置值'
	//可以设置路由的模式，但是并没有实际影响
	//通过函数U()体现差别
	'URL_MODEL'	  =>0,
	// 项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
	'APP_GROUP_LIST'        => 'home,admin',
	// 默认分组
	'DEFAULT_GROUP'         => 'home' ,
	//修改模板引擎为Smarty
    'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'bookshop',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => '946637',          // 密码
    

    'DB_PORT'               => '',        // 端口
    'DB_PREFIX'             => 'bs_',    // 数据库表前缀
    'SHOW_PAGE_TRACE'   => true,   // 显示页面Trace信息
    'TMPL_CACHE_ON'   => false,  // 默认开启模板编译缓存 false 的话每次都重新编译模板
    'ACTION_CACHE_ON'  => false,  // 默认关闭Action 缓存
    'HTML_CACHE_ON'   => false,   // 默认关闭静态缓存

);
?>