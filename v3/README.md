# Setup

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