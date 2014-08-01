<?php
/*
	Plugin Name:Google字体加速
	Plugin URI: http://www.fulihost.com
	Description:本插件将自动把您网站所有Google公共库和字体库链接替换为梦想天空CDN提供的前端公共库&字体库链接。我们承诺比360网站卫士提供的前端公共库CDN加速服务快35%！（本插件主要适用中国大陆等Google被封锁国家）
	Version: 1.4
	Author: cqdaidong
	Author URI: http://www.fulihost.com
*/
function spc_cdn_callback($buffer) {
	return str_replace('googleapis.com', 'ajax.ifdream.net', $buffer);
}
function spc_buffer_start() {
	ob_start("spc_cdn_callback");
}
function spc_buffer_end() {
	ob_end_flush();
}
add_action('init', 'spc_buffer_start');
add_action('shutdown', 'spc_buffer_end');
?>