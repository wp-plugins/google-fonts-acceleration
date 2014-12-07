<?php
/*
	Plugin Name:谷歌字体与Gravatar头像加速
	Plugin URI: http://www.iGeekLab.com
	Description:本插件可针对面对中国大陆地区用户的网站调用的Google公共库服务和Gravatar头像服务进行替换加速。（本插件由iGeekLab.com开发维护,加速服务器端由梦想互联(屌鸡)提供技术支持,如需使用360网站卫士加速版本请到iGeekLAB.com下载。）
	Version: 1.6
	Author: cqdaidong
	Author URI: http://www.iGeekLab.com
*/

/*Google公共库加速*/
function igeeklab_cdn_callback($buffer) {
	return str_replace('googleapis.com', 'ifdream.net', $buffer);
}
function igeeklab_buffer_start() {
	ob_start("igeeklab_cdn_callback");
}
function igeeklab_buffer_end() {
	ob_end_flush();
}
add_action('init', 'igeeklab_buffer_start');
add_action('shutdown', 'igeeklab_buffer_end');

/*gravatar头像加速*/
function igeekLab_get_cdn_avatar($avatar) {
	$avatar = str_replace(array( "0.gravatar.com", "1.gravatar.com",), "gravatar0.ifdream.net", $avatar);
	$avatar = str_replace(array("www.gravatar.com", "2.gravatar.com","secure.gravatar.com"), "gravatar1.ifdream.net", $avatar);
	return $avatar;
}
add_filter('get_avatar', 'igeekLab_get_cdn_avatar');
?>