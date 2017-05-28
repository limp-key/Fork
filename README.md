# limpWork
Framework for PHP

This is framework for PHP. Simply a framework.
What would be the framework for configuring apache2 on a folder www


if apache2 base configurate:

<VirtualHost host(default: localhost):port(default: 80)>
ServerAdmin webmaster@localhost
DocumentRoot /path/to/framework/www/
ServerName name(default: localhost)
<Directory '/path/to/framework/www/'>
AllowOverride all
</Directory>
</VirtualHost>
