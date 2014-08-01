=== Google字体加速===
Contributors:cqdaidong
Donate link: http://www.fulihost.com/
Tags:谷歌,CDN,字体,公共库,字体库
Requires at least:1.1
Tested up to: 1.3
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

本插件提供的Google公共库,字体库的加速服务远比360网站卫士提供的前端公共库,字体库CDN加速服务快35%
== 描述==
本插件提供的前端公共库,字体库的加速服务远比360网站卫士提供的前端公共库,字体库CDN加速服务快35%。

为什么我们比360更快？
360每次都会向Google请求公共库资源,相当于代理访问google.
（流程：网站请求→360代理访问→Google公共库）

我们直接把Google公共库扒下来放在CDN集群里,无需每次都向google请求公共库.
（流程：网站请求→Google公共库）

 Google公共库更新了怎么办？
我们每三天自动更新一次Google公共库和字体库资源。

鸣谢:梦想天空CDN公测项目

== 安装==

上传插件到/wp-content/plugins/目录
在插件列表中启用它

==常见问题==
=加速失败？=
请确认是否开启本插件。

==截图==
没有

==更新日志==

= 1.4 =
* 精简代码,支持包括插件在内的全站Google公共库/字体库替换。

== 升级通知 ==

= 1.4=
* 修复了1.3版本登陆界面和后台字体没有替换的问题，更换前端库地址。
