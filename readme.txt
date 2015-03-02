=== Plugin Name ===
Contributors: Amos Lee
Donate link: 
Tags: widget, menus
Requires at least: 3.4
Tested up to: 3.9.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display diffrent banner images in page and taxonomy terms，为每个页面或分类显示一个banner背景图。

== Description ==

= For English user =

Display diffrent banner images in page and taxonomy terms。

**this plugin must work with `"piklist plugin"`，before install，you must install and active `"piklist plugin"` first。**


** usage **
------------------------------------

add the following code in header.php

`<?php if ( function_exists ("the_banner_images") ) { the_banner_images(); } ?>`

then upload  **banner image** in page edit or category edit screen



= 中文用户 =

为每个页面或分类显示一个banner背景图。

**此插件依赖于`"pilist"`插件，安装此插件前，必须先安装并启用`"piklist"`插件**


** 使用方法 **
------------------------------------

把下面的代码添加到 header.php

`<?php if ( function_exists ("the_banner_images") ) { the_banner_images(); } ?>`

然后在页面和分类编辑界面上传 **banner image**


== Installation ==

= For English user =
1. Upload `wizhi-banner-images` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add `<?php if ( function_exists ("the_banner_images") ) { the_banner_images(); } ?>` to header.php

= 中文用户 =
1. 上传插件到`/wp-content/plugins/` 目录
2. 在插件管理菜单激活插件
3. 把 `<?php if ( function_exists ("the_banner_images") ) { the_banner_images(); } ?>` 代码添加到header.php

== Frequently Asked Questions ==


== Screenshots ==

Screenshots is here：[http://www.wpzhiku.com/wizhi-submenus/](http://www.wpzhiku.com/wizhi-submenus/)


== Changelog ==

= 1.1 =
* Add l10n support

= 1.0 =
* The first released