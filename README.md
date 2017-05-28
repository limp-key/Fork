# limpWork
Framework for PHP

This is framework for PHP. Simply a framework.
What would be the framework for configuring apache2 on a folder www


if apache2 base configurate:

<VirtualHost host(default: localhost):port(default: 80)><br>
&nbsp;&nbsp;&nbsp;ServerAdmin webmaster@localhost<br>
&nbsp;&nbsp;&nbsp;DocumentRoot /path/to/framework/www/<br>
&nbsp;&nbsp;&nbsp;ServerName name(default: localhost)<br>
&nbsp;&nbsp;&nbsp;<Directory '/path/to/framework/www/'><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride all<br>
&nbsp;&nbsp;&nbsp;</Directory><br>
</VirtualHost>
