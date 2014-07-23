html-capturer-chrome-extension
==============================

Automatically save web pages as you browse the web

REQUIREMENTS
============
1. A running apache server with PHP installed.
2. Google Chrome browser / Chromium installed.

INSTRUCTIONS
============
1. Download all the files included in "src" as well as "localserver"
2. Put the recv.php file in a folder named "capturer", put the folder in the htdocs (see eventPage.js).
3. Make a folder named "Captured", put it in the same folder as recv.php (see recv.php).
4. Open chrome://extensions/ in your browser, tick "Developer mode".
5. Load all files inside "src" as chrome extension, by clicking "load extensions" in chrome://extensions/ .
6. Done. Captured webpages can be found inside htdocs/capturer/Captured .

adapted from http://craiget.com/automatically-save-html-of-every-page-you-visit/ by @craiget
