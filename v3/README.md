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
Remove your installation .iso from the virtual optical disk drive before restarting the VM.
Install Guest Additions.



## apache rewrite
1) sudo a2enmod rewrite
2) sudo nano /etc/apache2/apache2.conf

find
```
<Directory /var/www/>
	Options Indexes FollowSymLinks
	AllowOverride None
	Require all granted
</Directory>
```

change to
```
	AllowOverride All
```

3) service apache2 restart

4) Add file .htaccess to DOC_ROOT
with following content

```
RewriteEngine on
RewriteRule ^([a-z]*)?/?([a-z]*)$ index.php?c=$1&a=$2 [QSA]
```

this will transform urls like:  
`/book/detail` to `index.php?c=book&a=detail`  
`/book/detail?id=2` to `index.php?c=book&a=detail&id=2`