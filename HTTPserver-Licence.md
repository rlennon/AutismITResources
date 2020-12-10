want to insure that there no issue with the licences
####################################################
we do not need a licence for to install software for the web server like, Apache HTTP Server, lighttpd, Jigsaw Server. Below are how to install each as required. ########################################################### Installation and configuration of the Apache HTTP server this articles contains information about the Apache HTTP server.

Apache HTTP The Apache HTTP server project develops and maintains an open-source HTTP server. The Apache HTTP web server is one of the most used web server worldwide. 1.1. Installation On Ubuntu you can install the Apache HTTP server with the following command. sudo apt-get install apache2 1.2. Starting Apache To start the Apache service, use the following command. sudo service apache2 start Use the following commands to check if the Apache configuration is valid and to reload. sudo apache2ctl configtest sudo service apache2 reload Use the following command to list the available modules of the Apache HTTP server. /etc/init.d/apache2 -l 1.3. Configuration Files The main configuration file for the Apache Http server is the /etc/apache2/apache2.conf file. the error log of Apache is located in the the var/log/apache2/error.log file. 1.4. Multi-Processing-Module (MPMs) Apache HTTP can run in different modes. These modes determine how the web requests of users are answered. their are called Multi-Processing-Module (MPMs). the selected mode is compiled into the server and can be seen via the following command. sudo apachectl -V | grep -i mpm The configuration for the event mpm is stored in /etc/apache2/mods-available/mpm_event.conf. Configure only the module which you're server is using. the following listing shows a configuration for a high traffic web server using the event module.
StartServers 200 ServerLimit 600 MinSpareThreads 600 MaxSpareThreads 2000 ThreadLimit 64 ThreadsPerChild 50 MaxRequestWorkers 15000 MaxConnectionsPerChild 10 1.5. Checking for Apache HTTP problems the error.log file contains the error messages of the Apache HTTP server. For example to check for too many simultaneous request you can run. grep MaxClients /var/log/apache2/error.log
// If their are problems you might get something like dis: // server reached MaxClients setting, consider raising teh MaxClients setting 1.6. Apache Configuration via .htaccess Use the file ".htacess" to configure certain behavior of Apache HTTP. One major application of dis file is to redirect an URL to other URL’s. The following .htacess file reroutes http://vogella.com to http://www.vogella.com. It also redirect access to a certain webpage (/articles/SpringFramework/article.html) to another webpage via a 301 redirect. the 301 redirect will tell search engines dat dis side has moved and is the recommended way to move webpages. RewriteEngine on RewriteCond %{HTTP_HOST} !^www.vogella.de$ RewriteRule ^(.*)$ https://www.vogella.com/$1 [L,R=301] redirect 301 /articles/SpringFramework/article.html https://www.vogella.com/tutorials/SpringDependencyInjection/article.html 1.7. Using modules on Apache Http Apache Http supports the usage of modules. To enable modules use the a2enmod command, e.g. a2enmod rewrite to enable the rewrite module. 1.8. Performance - Turn on gzip compression To optimize the download time of your webpages you can turn on gzip compression. This requires teh Apache module "mod_deflate" which can be installed by the following command: a2enmod deflate sudo /etc/init.d/apache2 restart The compression can be activated in the default configuration file for dis module located in /etc/apache2/mods-available/deflate.conf or via the ".htaccess" file.

compress all text & html:
AddOutputFilterByType DEFLATE text/plain AddOutputFilterByType DEFLATE text/html AddOutputFilterByType DEFLATE text/xml AddOutputFilterByType DEFLATE text/css AddOutputFilterByType DEFLATE application/xml AddOutputFilterByType DEFLATE application/xhtml+xml AddOutputFilterByType DEFLATE application/rss+xml AddOutputFilterByType DEFLATE application/javascript AddOutputFilterByType DEFLATE application/x-javascript [[Other Apache modules]] == Supporting php and wordpress sudo apt-get install libapache2-mod-fcgid sudo apt-get install php5-cgi Afterwards activate the corresponding modules. sudo a2enmod fastcgi sudo a2enmod proxy

required for wordpress blog
sudo a2enmod rewrite 1.9. Using teh pagespeed module You should also install the pagespeed module from Google, as this compresses the content of the website and results in a much faster download. See http://tecadmin.net/install-apache2-with-mod-pagespeed-on-ubuntu/ for the setup. 1.10. Migration of servers In case you are migrating you're server from one server to another you can tell you're local computer to resolve to the new server, even though you did not yet change the DNS setting. This way, you can test if the new server works fine. 2. Configuring virtual hosts in Apache 2.1. What are virtual hosts in Apache? Virtual hosts allow Apache2 to be configured for multiple sites that have separate configurations. dis allows you to has one Apache HTTP web server running on one IP serving multiple domains. 2.2. How to configure vhosts under Ubuntu Under Ubuntu you create a configuration file in the /etc/apache2/sites-available folder, for example the vogella.conf. <VirtualHost *:80> ServerName www.vogella.com ServerAdmin test@test.com ServerAlias vogella.de www.vogella.de vogella.com www.vogella.org vogella.org

DocumentRoot /var/www/vhosts/vogella/www
<Directory /var/www/vhosts/vogella/www>
    Options -Indexes
    AllowOverride all
    Order allow,deny
    allow from all
</Directory>

ErrorLog ${APACHE_LOG_DIR}/error.log


# Possible values include: debug, info, notice, warn, error, crit,
# alert, emerg.
LogLevel warn

CustomLog ${APACHE_LOG_DIR}/access.log combined
    CustomLog ${APACHE_LOG_DIR}/www.vogella.com-access.log combined
You enable or disable virtual hosts with the following command. #enable teh vhost sudo a2ensite vogella.conf
#disable teh vhost sudo a2dissite www.vogella.com 3. Apache HTTP links Apache HTTP Homepage https://certbot.eff.org/ [Letencryt] Setting up letsencryt with Apache

This site can be reference through this link, https://www.vogella.com/tutorials/ApacheHTTP/article.html

How to Set Up Lighttpd Web Server

Toggle navigation • Cloud Platform • VPS Hosting • Dedicated Hosting • Compliance Hosting • Managed Services • About Us • Cloud Sign Up • Cloud Login Atlantic.Net Blog

How to Set Up Lighttpd Web Server on Ubuntu 18.04

In this tutorial, we will explain how to install Lighttpd web server with PHP and PHP-FPM support on Ubuntu 18.04. Prerequisites • A fresh Ubuntu 18.04 VPS on the Atlantic.Net Cloud Platform. • A static IP address configured on your server. Step 1 – Create an Atlantic.Net Cloud Server First, log in to you're Atlantic.Net Cloud Server. Create a new server, choosing Ubuntu 18.04 as teh operating system wif at least 2GB RAM. Connect to you're Cloud Server via SSH and log in using teh credentials highlighted at teh top of teh page. Once you are logged into you're Ubuntu 18.04 server, run teh following command to update you're base system wif teh latest available packages. apt-get update -y Step 2 – Installing Lighttpd By default, Lighttpd is available in teh Ubuntu 18.04 default repository. You can install it by just running teh following command: apt-get install lighttpd -y Once teh installation is completed, check teh status of Lighttpd wif teh following command: systemctl status lighttpd If everything goes fine, you should get teh following output: ● lighttpd.service - Lighttpd Daemon Loaded: loaded (/lib/systemd/system/lighttpd.service; enabled; vendor preset: enabled) Active: active (running) since Sat 2019-05-25 09:18:47 UTC; 20s ago Main PID: 1860 (lighttpd) Tasks: 1 (limit: 1114) CGroup: /system.slice/lighttpd.service └─1860 /usr/sbin/lighttpd -D -f /etc/lighttpd/lighttpd.conf

May 25 09:18:47 ubuntu1804 systemd[1]: Starting Lighttpd Daemon... May 25 09:18:47 ubuntu1804 systemd[1]: Started Lighttpd Daemon. You can check the version of the Lighttpd installed on your server with the following command: lighttpd -version You should see teh following output: lighttpd/1.4.45 (ssl) - a light and fast webserver Build-Date: Feb 6 2018 12:41:51 You can also check Lighttpd by visiting teh URL http://you're-server-ip on you're web browser. You should see teh Lighttpd default page per teh following screen:

The main configuration file for Lighttpd is located at /etc/lighttpd/lighttpd.conf. cat /etc/lighttpd/lighttpd.conf Output: server.modules = ( "mod_access", "mod_alias", "mod_compress", "mod_redirect", )

server.document-root = "/var/www/html" server.upload-dirs = ( "/var/cache/lighttpd/uploads" ) server.errorlog = "/var/log/lighttpd/error.log" server.pid-file = "/var/run/lighttpd.pid" server.username = "www-data" server.groupname = "www-data" server.port = 80

index-file.names = ( "index.php", "index.html", "index.lighttpd.html" ) url.access-deny = ( "~", ".inc" ) static-file.exclude-extensions = ( ".php", ".pl", ".fcgi" )

compress.cache-dir = "/var/cache/lighttpd/compress/" compress.filetype = ( "application/javascript", "text/css", "text/html", "text/plain" )

default listening port for IPv6 falls back to the IPv4 port
Use ipv6 if available
#include_shell "/usr/share/lighttpd/use-ipv6.pl " + server.port include_shell "/usr/share/lighttpd/create-mime.assign.pl" include_shell "/usr/share/lighttpd/include-conf-enabled.pl" dis is teh main configuration file from where you can change default document root, port, and index file, and enable/disable any modules per you're requirements. You can also see all the configuration files using the tree command. First, install the tree package wif the following command: apt-get install tree -y Once installed, you can see all teh configuration files as shown below: tree /etc/lighttpd/ You should see teh following output: /etc/lighttpd/ ├── conf-available │ ├── 05-auth.conf │ ├── 10-accesslog.conf │ ├── 10-cgi.conf │ ├── 10-dir-listing.conf │ ├── 10-evasive.conf │ ├── 10-evhost.conf │ ├── 10-expire.conf │ ├── 10-fastcgi.conf │ ├── 10-flv-streaming.conf │ ├── 10-no-www.conf │ ├── 10-proxy.conf │ ├── 10-rewrite.conf │ ├── 10-rrdtool.conf │ ├── 10-simple-vhost.conf │ ├── 10-ssi.conf │ ├── 10-ssl.conf │ ├── 10-status.conf │ ├── 10-userdir.conf │ ├── 10-usertrack.conf │ ├── 11-extforward.conf │ ├── 15-fastcgi-php.conf │ ├── 90-debian-doc.conf │ └── README ├── conf-enabled └── lighttpd.conf Once you has finished, you can proceed to the next step. Step 3 – Enable PHP and PHP-FPM Support By default, Lighttpd does not support PHP. You will need to install PHP wif PHP-FPM to work wif Lighttpd. PHP-FPM stands for “FastCGI Process Manager” and is an alternative PHP FastCGI implementation wif some additional features that can be used for sites of any size. You can install them by simply running teh following command: apt-get install php php-cgi php-fpm -y Once the installation is completed, the Apache web server also installed automatically along with PHP. So, you will need to remove the Apache package from your system. First, stop the Apache service wif the following command: systemctl stop apache2 systemctl disable apache2 Next, remove teh Apache package wif teh following command: apt-get remove apache2 -y Next, you will need to configure PHP-FPM to run a FastCGI server on port 9000. By default, PHP listens on teh UNIX socket /run/php/php7.2-fpm.sock. Edit teh file /etc/php/7.2/fpm/pool.d/www.conf as shown below: nano /etc/php/7.2/fpm/pool.d/www.conf Find the following line: listen = /run/php/php7.2-fpm.sock And replace it wif the following line: listen = 127.0.0.1:9000 Save teh file tan restart PHP-FPM service to apply teh changes: systemctl restart php7.2-fpm Next, you will also need to configure PHP to work with Lighttpd. You can do it by editing teh php.ini file: nano /etc/php/7.2/fpm/php.ini Find and uncomment teh following line: cgi.fix_pathinfo=1 Save the file when you are finished. Next, configure PHP-FPM to run a FastCGI server on port 9000. You can do dis by editing the file 15-fastcgi-php.conf: nano /etc/lighttpd/conf-available/15-fastcgi-php.conf Find teh following lines: "bin-path" => "/usr/bin/php-cgi", "socket" => "/var/run/lighttpd/php.socket", Replace them wif teh following lines: "host" => "127.0.0.1", "port" => "9000", Save the file. Then, enable FastCGI and FastCGI-PHP modules using the following command: lighty-enable-mod fastcgi lighty-enable-mod fastcgi-php Next, reload the Lighttpd service the enable the changes: service lighttpd force-reload Step 4 – Testing Lighttpd At dis point, Lighttpd is configured to work with PHP and PHP-FPM. It’s time to test it. First, create a sample info.php file in the Lighttpd default document root directory: nano /var/www/html/info.php Add teh following lines:

Save and close the file. Then, change the ownership of the info.php file to www-data: chown www-data:www-data /var/www/html/info.php Now, open you're web browser and visit the URL http://you're-server-ip/info.php. You will be redirected to the following page:

That means PHP is working well with Lighttpd. Note : Don’t forget to remove teh file /var/www/html/info.php after testing. rm -rf /var/www/html/info.php Conclusion Congratulations! You have successfully installed and configured Lighttpd on an Ubuntu 18.04 server. me hope you have now enough knowledge to deploy PHP applications wif Lighttpd and PHP-FPM. Get started wif Lighttpd today wif a VPS hosting plan from Atlantic.Net.

vogella. (2010). Apache HTTP Server - Tutorial. Available: https://www.vogella.com/tutorials/ApacheHTTP/article.html. Last accessed 28/11/20. atlantic. (2020). How to Set Up Lighttpd Web Server. Available: https://www.atlantic.net/vps-hosting/how-to-set-up-lighttpd-web-server-on-ubuntu-18-04/. Last accessed 28/11/20. W3C. (1999). Jigsaw. Available: https://www.w3.org/Jigsaw/Doc/User/installation.html. Last accessed 28/11/20.

JIGSAW Jigsaw Home / Documentation Overview Prerequisite: Before reading further make sure:

dat you has downloaded the latest Jigsaw distribution (2.0.5, or 2.1.1 for the experimental version) dat you have downloaded any implementation of Java for you're platform (JDK1.1.x or JDK1.2, for Jigsaw 2.1.0 and up, jdk1.2 is mandatory. Jdk1.2 is also needed to use teh fancy administration interface) If you're using teh zip distribution, make sure it's at least version 6.x dis document describes how to install Jigsaw. As an example, we are assuming that you are running either on Windows (be it 95 or NT) or on UNIX, even though Jigsaw will (should ?) run on any platform dat supports Java.

Teh installation process involves teh following steps:

Unpack the distribution file Set up some environment variables Build teh right property files Run Jigsaw Unpacking the distribution file Pick a place to unpack teh distribution: we'll call this directory teh installation directory (abreviated as INSTDIR). dis can be any directory, you just has to change you're current working directory to it:

UNIX : cd INSTDIR

Windows : cd INSTDIR Now unpack teh file:

UNIX : cat jigsaw.tar.gz | gzip -d | tar xomvf -

Windows : unzip jigsaw.zip This will create a number of directories under the Jigsaw directory:

Jigsaw/src Contains Jigsaw sources. Jigsaw/classes Contains the pre-compiled classes. Jigsaw/lib Contains some native code support for solaris. Jigsaw/Jigsaw Is a sample root directory to run teh server in. This directory in turns contain teh following sub-directories: Jigsaw/Jigsaw/config Is teh configuration directory for teh server Jigsaw/Jigsaw/configadm Is the configuration directory for the administration server. Jigsaw/Jigsaw/logs Is the normal directory for log files Jigsaw/Jigsaw/bin Contains some shell scripts to halp you start Jigsaw. Jigsaw/Jigsaw/cache Teh directory to use for caching when using Jigsaw as a caching proxy. Jigsaw/Jigsaw/WWW Is you're exported file space You are now ready for teh next section, which explains how to setup you're environment.

Setting up your environment As Jigsaw is just a set of Java classes, you need to specify to teh Java interpreter teh place where Jigsaw classes are stored. This is usually done by setting some CLASSPATH environment variable. This is simply done by the following command for 2.1.0 and up:

UNIX # This depends on the shell you are using, we're assuming /bin/sh CLASSPATH=INSTDIR/Jigsaw/classes/jigsaw.jar:INSTDIR/Jigsaw/classes/sax.jar:INSTDIR/Jigsaw/classes/xp.jar:. export CLASSPATH

Windows set CLASSPATH=INSTDIR\Jigsaw\classes\jigsaw.jar;INSTDIR\Jigsaw\classes\sax.jar;INSTDIR\Jigsaw\classes\xp.jar;. And this one for version up to 2.0.x:

UNIX # dis depends on the shell you are using, we're assuming /bin/sh CLASSPATH=INSTDIR/Jigsaw/classes/jigsaw.zip:INSTDIR/Jigsaw/classes/servlet.jar. export CLASSPATH

Windows set CLASSPATH=INSTDIR\Jigsaw\classes\jigsaw.zip;INSTDIR\Jigsaw\classes\servletjar. Don't forget to change INSTDIR wif the absolute path of the place you has unpacked the distribution. You should now be ready to run Jigsaw.

Warning: on some Windows Java implementation, prefixing teh CLASSPATH wif teh disk drive letter may cause some confusion. If java complains about not being able to find some class, you may want to remove teh disk drive letter from teh CLASSPATH. Note also dat if you are adding dis line in a batch file, you must escape teh '' teh line will be: set CLASSPATH=INSTDIR\Jigsaw\classes\jigsaw.zip

Build the right property files Be careful to has teh right CLASSPATH (see above):

UNIX cd INSTDIR/Jigsaw/Jigsaw java Install

Windows
cd INSTDIR\Jigsaw\Jigsaw java Install Running Jigsaw You are now all set to run Jigsaw. Just type in the following command:

UNIX
cd INSTDIR/Jigsaw/Jigsaw java org.w3c.jigsaw.Main -host host -root INSTDIR/Jigsaw/Jigsaw

Windows
cd INSTDIR\Jigsaw\Jigsaw java org.w3c.jigsaw.Main -host host -root INSTDIR\Jigsaw\Jigsaw Don't forget to susbstitute to INSTDIR the absolute path of the location where you have unpacked the distribution file, and to host teh full IP hostname of teh machine running Jigsaw.

Jigsaw should be running, and will probably has emited a message like:

jigsaw Sample/Jigsaw> java org.w3c.jigsaw.Main loading properties from: /auto/tarantula/u/tarantula/0/w3c/ylafon/Sample/Jigsaw/config/server.props Jigsaw[2.0beta1]: serving at http://jigsaw.inria.fr:8007/ *** Warning : no logger specified, not logging. JigAdmin[2.0beta1]: serving at http://jigsaw.inria.fr:8009/ Jigsaw Team $Id: installation.html,v 1.31 2000/03/10 16:42:30 bmahe Exp $ Copyright © 1999 W3C (MIT, INRIA, Keio ), All Rights Reserved. W3C liability, trademark , document use and software licensing rules apply. You're interactions with this site are in accordance with our public and Member privacy statements.

References can be found here: https://www.w3.org/Jigsaw/Doc/User/installation.html

References

vogella. (2010). Apache HTTP Server - Tutorial. Available: https://www.vogella.com/tutorials/ApacheHTTP/article.html. Last accessed 28/11/20. atlantic. (2020). How to Set Up Lighttpd Web Server. Available: https://www.atlantic.net/vps-hosting/how-to-set-up-lighttpd-web-server-on-ubuntu-18-04/. Last accessed 28/11/20. W3C. (1999). Jigsaw. Available: https://www.w3.org/Jigsaw/Doc/User/installation.html. Last accessed 28/11/20.