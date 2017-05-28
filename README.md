# limpWork
Framework for PHP

This is framework for PHP. Simply a framework.
What would be the framework for configuring apache2 on a folder www


if apache2 base configurate:

<VirtualHost host(default: localhost):port(default: 80)><br>
&#09;ServerAdmin webmaster@localhost<br>
&#09;DocumentRoot /path/to/framework/www/<br>
&#09;ServerName name(default: localhost)<br>
&#09;<Directory '/path/to/framework/www/'><br>
&#09;&#09;AllowOverride all<br>
&#09;</Directory><br>
</VirtualHost>
