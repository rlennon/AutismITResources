############################################
#  AWS how ro create a web-server          #
############################################
Created a new sprint in jira on 18-11-2020.
closed issues in jira could not move from in progress to done.

############################################
How to create a web-server                 # 
############################################
Created a aws web server in ec2.
######################################################################
opened ports http 80, https 443, ssh 22.
installed mariadb-server database.
root user for mariadb 
install maria db
sudo yum install mariadb-server
######################################################################
sudo systemctl start mariadb
sudo systemctl enable mariadb
sudo systemctl start mariadb

sudo systemctl status mariadb
Step 2 — Securing the MariaDB Server

MariaDB includes a security script.

    sudo mysql_secure_installation
Step 3 — Testing the Installation
########################################################################
We can verify our installation and get information about it by connecting with the mysqladmin tool,


    mysqladmin -u root -p version
#########################################################################

WEB SERVER AWS EC2
##########################################################################
