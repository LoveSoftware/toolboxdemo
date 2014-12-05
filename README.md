#PHP Tools Demo Code

This is the demo code for the talk I gave at PHPLondon.

Its a vagrant box with PHP 5.6, Apache 2, Xdebug and XHPROF installed.

''''
vagrant up
vagrant ssh
''''

On the VM the code is checked out to /vagrant. The vagrant host updater plugin will add
toolboxdemo.com to your hosts file. You can access the demo api using toolboxdemo.com.

Interesting reads:

Lorna Mitchell's article on Charles Proxy: http://techportal.inviqa.com/2013/03/05/manipulating-http-with-charles-proxy/

Tailored Xdebug Install instructions (paste in your PHPinfo, produces step by step guide based on your system!): http://xdebug.org/wizard.php

Xdebug Remote Debugging Documentation: http://xdebug.org/docs/remote

Maintained version of XHPROF: https://github.com/phacility/xhprof

Lorenzo Alberton's great XHPROF article: http://techportal.inviqa.com/2009/12/01/profiling-with-xhprof/

Lorna Mitchell's follow up: http://techportal.inviqa.com/2013/10/01/profiling-php-applications-with-xhgui/

Introduction to JMeter video tutorial (from Blazemeter, JMeter as a service): http://blazemeter.com/blog/jmeter-tutorial-video-series
