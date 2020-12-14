=== Embed Iframe ===
Contributors: brajesh
Tags: iframe, embed, page, post, plugin
Requires at least: 1.3
Tested up to: 5.6
Requires PHP: 5.3
Stable tag: trunk
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Allows the insertion of code to display an external webpage within an iframe.

== Description ==

Embed Iframe is a plugin that will let you embed iframe - an HTML tag that allows a webpage to be displayed inline with the current page, in a WordPress post. Although an iframe can lead to a complicated website, it can be very effective when used appropriately.

== Installation ==

1. Download [EmbedIframe plugin](http://downloads.wordpress.org/plugin/embed-iframe.zip)
1. Unzip
1. Copy to your '/wp-content/plugins' directory
1. Activate plugin

You can find full details of installing a plugin on the [plugin installation page](https://wordpress.org/support/article/managing-plugins/)

== Usage ==

Use following tag to insert another page in post using iframe

`[iframe url width height]`

e.g.

`[iframe http://www.example.com 400 500]`

== Frequently Asked Questions ==

= Is there any limitation? =

You cannot embed a URL which carries **X-Frame-Options** header with the value **DENY**.

== Changelog ==
 
= 1.0 =
* Initial release

= 1.1 =
* PHP7 compatability

= 1.2 =
* Security related changes