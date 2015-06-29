=== Pareto Security ===
Contributors: te_taipo
Donate link: http://hokioisec7agisc4.onion 

Tags: authentication bypass, CRLF, CSRF, cross-site scripting, database security, exploit, firewall security, hack, hacked, hacker, injection, local file inclusion, malware, phishing, rfi, remote file inclusion, scrapers, secure, secure login, security, SQL Injection, vulnerability, WAF, website security, wordpress, wordpress security, xss
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 1.0.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WordPress core security class: A Web Application Firewall to protect your Wordpress web portal

== Description ==

= Pareto Security Features =

Wordpress has been plagued in recent times by plugins that bring with them security vulnerabilities. Users depend on 3rd party developers to check all user inputs and to escape all outputs from their plugin code, however in many many cases this is not done correctly leading to vulnerabilities and often websites being attacked, malware code installed, and in worst cases, entire servers taken over.

Pareto Security class acts as a central security hub checking all inputs from users against a set of rules and against a blacklist. Any user inputs that break these rules are prevented from completing their action.

This acts as a temporary shield during that period of time between when a vulnerability is discovered in Wordpress or 3rd party plugins, and when they are patched, and, when you update your Wordpress website.

Features:

* Full web application firewall preventing attacks from reaching Wordpress codex
* The most powerful input security plugin on Wordpress for protecting your Wordpress *.php files
* Automatically secures your Wordpress repository against unsecured inputs common in Wordpress 3rd party plugins
* No customisation needed, works silently in the background
* Protects against malicious database injections
* Using a form of heuristic rules and blacklists, processes and checks all user inputs, the REQUEST_URI, QUERY_STRING, _GET, _POST, _COOKIE and browser user-agents to detect known security threats.
* Pareto Security is 100% free
* Prevents uploading of backdoors
* Locks down server error and information messages that can be used to assist attackers
* Scans inputs from content submitted by visitors in comments and posts.
* Block known bad crawlers.
* Checks against malicious Request Types
* Pareto Security is multi-site ready
* Works silently in the background blocking attacks

== Installation ==

* <strong>Automated Setup Steps</strong>

1. Upload `/pareto-security/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where can I get more information? =

Using the Tor Browser, visit http://hokioisec7agisc4.onion/?p=25 for more information, including support requests

= How can I contribute to the cause =

Donations via Bitcoin to 1LHiMXedmtyq4wcYLedk9i9gkk8A8Hk7qX

= Do you have an email contact? =

Email me at hokioi-security@protonmail.ch

== Changelog ==

= 1.0.4 =
* Fixed a bug in $this->getDir()

= 1.0.3 =
* Added settings to wp-admin/settings.

= 1.0.2 =
* Made Wordpress plugin compatible.

= 1.0.0 =
* Converted from osC_Sec to Pareto_Security.php

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.