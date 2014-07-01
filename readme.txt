=== Google Fonts acceleration===
Contributors:cqdaidong
Donate link: http://www.fulihost.com/
Tags: Google,CDN,Font,Common Library,Font Object Library,谷歌字体加速,谷歌公共库加速
Requires at least:1.0
Tested up to: 1.0
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The front-end common library provided by this plug-in, acceleration service of font object library is 35% faster than that of front-end common library, font object library CDN provided by 360 website guard.
== Description ==
The front-end common library provided by this plug-in, acceleration service of font object library is 35% faster than that of front-end common library, font object library CDN provided by 360 website guard.

Why are we faster than 360?
Every time, 360 will ask Google for resources of common library, equivalent to access Google by an agent.
(Procedure: Website, 360 agent access, Google common library)

We directly take Google common library apart and put it in CDN cluster. There is no need to ask Google for common library every time.
(Procedure: your website, Google common library) 

 What shall people do in case of update of Google common library?
We automatically update the resources of Google common library and font object library every three days.

Acknowledgement: Dream Sky CDN beta project

== Installation ==
1. Upload the plugin to / wp-content/plugins / directory
2. Enable it in the plugins list

== Frequently Asked Questions ==
= Fail to accelerate?=
Please confirm whether turn on the plug-in.

== Screenshots ==
 1. Nothing

== Changelog ==

= 1.1 =
* Streamline the code, support all replacement of Google common library or font object library, including the plug-in.

== Upgrade Notice ==

= 1.1=
* This version streamlines code, support all replacement of Google common library or font object library, including the plug-in.



=== Google字体加速===
Contributors:cqdaidong
Donate link: http://www.fulihost.com/
Tags:谷歌,CDN,字体,公共库,字体库,谷歌字体加速,谷歌公共库加速
Requires at least:1.0
Tested up to: 1.0
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

本插件提供的Google公共库,字体库的加速服务远比360网站卫士提供的前端公共库,字体库CDN加速服务快35%
== 描述==
本插件提供的前端公共库,字体库的加速服务远比360网站卫士提供的前端公共库,字体库CDN加速服务快35%。

为什么我们比360更快？
360每次都会向Google请求公共库资源,相当于代理访问google.
（流程：你网站→360代理访问→Google公共库）

我们直接把Google公共库扒下来放在CDN集群里,无需每次都向google请求公共库.
（流程：你网站→Google公共库）

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

= 1.1 =
* 精简代码,支持包括插件在内的全站Google公共库/字体库替换。

== 升级通知 ==
* 此版本精简代码,支持包括插件在内的全站Google公共库/字体库替换。