<?php

namespace Config;

class SkeletCgiConfig{
    
    public static $CgiForceRedirect;

    public static $CgiNph;

    public static $CgiRedirectStatusEnv;

    public static $CgiFixPathinfo;

    public static $CgiDiscardPath;

    public static $FastcgiImpersonate;

    public static $FastcgiLogging;

    public static $CgiRfc2616Headers;

    public static $CgiCheckShebangLine;

    # cgi.force_redirect is necessary to provide security running PHP as a CGI under
    # most web servers.  Left undefined, PHP turns this on by default.  You can
    # turn it off here AT YOUR OWN RISK
    # **You CAN safely turn this off for IIS, in fact, you MUST.**
    public static function CgiForceRedirect($Parameter = 1){

	ini_set('cgi.force_redirect',$Parameter);
	
	return true;
    }

    # if cgi.nph is enabled it will force cgi to always sent Status: 200 with
    # every request. PHP's default behavior is to disable this feature.
    public static function CgiNPH($Parameter = 1){

	ini_set('cgi.nph',$Parameter);
	
	return true;
    }

    # if cgi.force_redirect is turned on, and you are not running under Apache or Netscape
    # (iPlanet) web servers, you MAY need to set an environment variable name that PHP
    # will look for to know it is OK to continue execution.  Setting this variable MAY
    # cause security issues, KNOW WHAT YOU ARE DOING FIRST.
    public static function CgiRedirectStatusEnv($Parameter = ''){

	ini_set('cgi.redirect_status_env',$Parameter);
	
	return true;
    }
    
    # cgi.fix_pathinfo provides *real* PATH_INFO/PATH_TRANSLATED support for CGI.  PHP's
    # previous behaviour was to set PATH_TRANSLATED to SCRIPT_FILENAME, and to not grok
    # what PATH_INFO is.  For more information on PATH_INFO, see the cgi specs.  Setting
    # this to 1 will cause PHP CGI to fix its paths to conform to the spec.  A setting
    # of zero causes PHP to behave as before.  Default is 1.  You should fix your scripts
    # to use SCRIPT_FILENAME rather than PATH_TRANSLATED.
    public static function CgiFixPathinfo($Parameter = 1){

	ini_set('cgi.fix_pathinfo',$Parameter);
	
	return true;
    }
    
    # if cgi.discard_path is enabled, the PHP CGI binary can safely be placed outside
    # of the web tree and people will not be able to circumvent .htaccess security.
    public static function CgiDiscardPath($Parameter = 1){

	ini_set('cgi.discard_path',$Parameter);
	
	return true;
    }

    # FastCGI under IIS (on WINNT based OS) supports the ability to impersonate
    # security tokens of the calling client.  This allows IIS to define the
    # security context that the request runs under.  mod_fastcgi under Apache
    # does not currently support this feature (03/17/2002)
    # Set to 1 if running under IIS.  Default is zero.
    public static function FastcgiImpersonate($Parameter = 1){

	ini_set('fastcgi.impersonate',$Parameter);
	
	return true;
    }

    # Disable logging through FastCGI connection. PHP's default behavior is to enable
    # this feature.
    public static function FastcgiLogging($Parameter = 0){

	ini_set('fastcgi.logging',$Parameter);
	
	return true;
    }

    # cgi.rfc2616_headers configuration option tells PHP what type of headers to
    # use when sending HTTP response code. If set to 0, PHP sends Status: header that
    # is supported by Apache. When this option is set to 1, PHP will send
    # RFC2616 compliant header.
    # Default is zero.
    public static function Cgirfc2616Headers($Parameter = 0){
	
	ini_set('cgi.rfc2616_headers',$Parameter);
	
	return true;
    }

    # cgi.check_shebang_line controls whether CGI PHP checks for line starting with #!
    # (shebang) at the top of the running script. This line might be needed if the
    # script support running both as stand-alone script and via PHP CGI<. PHP in CGI
    # mode skips this line and ignores its content if this directive is turned on.
    public static function CgiCheckShebangLine($Parameter = 1){
	
	ini_set('cgi.check_shebang_line',$Parameter);
	
	return true;
    }
}
