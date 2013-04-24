=== Events Manager iCalcreator ===
Contributors: ekes
Tags: events, ical

Adds iCalcreator library for Events Manager iCal output extension.

== Description ==

Provides the iCalcreator library http://kigkonsult.se/iCalcreator/index.php
helper functions and a (working) sample replacement template for more rich
compliant iCalendar output from Events Manager.

== Installing ==

First intstall Events Manager plugin (5.3.x is tested).
Then install and enable this plugin.

Copy the template/ical.php file into your theme directory. 
Normally would then mean placing it as:
  wp-content/themes/YOUR_THEME/plugins/events-manager/templates/ical.php

If plugin was checked out of git you will need to download the submodule 
iCalcreator:-

$ git submodule init
$ git submodule update
