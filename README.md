# Setup Website on Ubuntu 

## Download and install Virtual Box 

https://www.virtualbox.org/wiki/Downloads 

## Download Ubuntu ISO 

https://ubuntu.com/download/desktop 


## Create Virtual Machine in Virtual Box


1. Open VirtualBox and select New
2. Choose your guest OS (Ubuntu Linux)
3. Set your RAM on 2048 GB or more
5. Default Settings for everything else
6. Finish the installation as normal install.
7. On VirtualBox main window, select START and pick your MEDIA SOURCE. In your case, select the .iso on your desktop.
8. Install Guest Additions

## Setup Ubuntu with Lamp Stack
1. Skip all the intro stuff of the Ubuntu installation menu 
2. Start Terminal and execute all the following statements
		
		sudo apt update && sudo apt upgrade -y

		sudo apt install tasksel vim mc -y 

		sudo tasksel install lamp-server 

		sudo apt install php-xml

		service apache2 restart
3. Check if you now have the /var/www/html/

## Start the Webpage
1. Extract the folder with the code and paste it into the /var/www/html/
3. Remove index.html file from /var/www/html/
2. Open page in browser http://localhost/Webprojekt/
3. You should see the Startpage

## Rewrite apache
1. sudo a2enmod rewrite
2. sudo nano /etc/apache2/apache2.conf

find

	<Directory /var/www/>
		Options Indexes FollowSymLinks
		AllowOverride None
		Require all granted
	</Directory>


change to

	AllowOverride All


3. service apache2 restart

### Webpage erstellt von Tim Scheit, Jannik Nitsche, Lena Siegle