# No '(no title)'
* Contributors: magicoli69
* Donate link: https://www.paypal.com/paypalme/magicoli
* Tags: title, no-title, admin, edit
* Requires at least: 4.5
* Tested up to: 5.8.1
* Requires PHP: 5.6
* Stable tag: 1.0
* License: GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html

Show an excerpt instead of '(no title)' in admin lists for posts without title.


## Description

This plugin is intended for websites publishing posts without title, to avoid a long list of '(no title') in admin screen, which makes searches very difficult.

Only in admin posts list, and only if the post title is empty, show firsts words of the content instead.

This plugin leaves the post unchanged and does not replace the actual title, so the post would display as intended on posts and archives.

Inspired by a solution on https://wordpress.stackexchange.com/questions/189671/show-excerpt-if-no-title-in-admin-view

I added a filter to replace line breaks with spaces, to avoid collapsing words when the content starts with short lines.


## Installation

No settings needed. Once activated, the list will replace '(no title)' with an excerpt in admin lists.


## Changelog

### 1.0
* Simple and stupid. It just works.
