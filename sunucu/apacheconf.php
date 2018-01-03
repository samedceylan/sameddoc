<VirtualHost *:80>

    DocumentRoot /var/www/sonsmslifecell/public
    ServerName sonsms.lifecell.com.tr
    ServerAlias lifecell.com.tr

    ErrorLog /var/www/logs/sonsmslifecell_error_log
    CustomLog /var/www/logs/sonsmslifecell_access_log common

    <Directory "/var/www/sonsmslifecell/public/">
    AllowOverride All
    Order allow,deny
    Allow from all
    </Directory>

</VirtualHost>