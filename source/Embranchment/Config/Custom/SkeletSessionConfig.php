<?php

namespace Embranchment\Config\Custom;

class SkeletSessionConfig{

    public static $SessionSaveHandler;

    public static $SessionSavePath;

    public static $SessionUseStrictMode;

    public static $SessionUseCookies;

    public static $SessionCookieSecure;

    public static $SessionUseOnlyCookies;

    public static $SessionName;

    public static $SessionAutoStart;

    public static $SessionCookieLifetime;

    public static $SessionCookiePath;

    public static $SessionCookieDomain;

    public static $SessionCookieHttponly;

    public static $SessionSerializeHandler;

    public static $SessionGCProbability;

    public static $SessionGCDivisor;

    public static $SessionGCMaxlifetime;

    public static $SessionRefererCheck;

    public static $SessionCacheLimiter;

    public static $SessionCacheExpire;

    public static $SessionUseTransSid;

    public static $SessionSidLength;

    public static $SessionTransSidTags;

    public static $SessionTransSidHosts;

    public static $SessionSidBitsPerCharacter;

    public static $SessionUploadProgressEnabled;

    public static $SessionUploadProgressCleanup;

    public static $SessionUploadProgressPrefix;

    public static $SessionUploadProgressName;

    public static $SessionUploadProgressFreq;

    public static $SessionUploadProgressMinFreq;

    public static $SessionLazyWrite;

    # Handler used to store/retrieve data.
    public static function SessionSaveHandler($Parameter = 'files'){

	ini_set('session.save_handler',$Parameter);
	
	return true;
    }

    # Argument passed to save_handler.  In the case of files, this is the path
    # where data files are stored. Note: Windows users have to change this
    # variable in order to use PHP's session functions.
    #
    # The path can be defined as:
    #
    #     session.save_path = "N#/path"
    #
    # where N is an integer.  Instead of storing all the session files in
    # /path, what this will do is use subdirectories N-levels deep, and
    # store the session data in those directories.  This is useful if
    # your OS has problems with many files in one directory, and is
    # a more efficient layout for servers that handle many sessions.
    #
    # NOTE 1: PHP will not create this directory structure automatically.
    #         You can use the script in the ext/session dir for that purpose.
    # NOTE 2: See the section on garbage collection below if you choose to
    #         use subdirectories for session storage
    #
    # The file storage module creates files using mode 600 by default.
    # You can change that by using
    #
    #     session.save_path = "N#MODE#/path"
    #
    # where MODE is the octal representation of the mode. Note that this
    # does not overwrite the process's umask.
    # RPM note : session directory must be owned by process owner
    # for mod_php, see /etc/httpd/conf.d/php.conf
    # for php-fpm, see /etc/php-fpm.d/*conf
    public static function SessionSavePath($Parameter = '/tmp'){

	ini_set('session.save_path',$Parameter);
	
	return true;
    }

    # Whether to use strict session mode.
    # Strict session mode does not accept uninitialized session ID and regenerate
    # session ID if browser sends uninitialized session ID. Strict mode protects
    # applications from session fixation via session adoption vulnerability. It is
    # disabled by default for maximum compatibility, but enabling it is encouraged.
    public static function SessionUseStrictMode($Parameter = 0){

	ini_set('session.use_strict_mode',$Parameter);
	
	return true;
    }

    # Whether to use cookies.
    public static function SessionUseCookies($Parameter = 1){

	ini_set('session.use_cookies',$Parameter);
	
	return true;
    }

    #
    public static function SessionCookieSecure($Parameter = ''){

	ini_set('session.cookie_secure',$Parameter);
	
	return true;
    }

    # This option forces PHP to fetch and use a cookie for storing and maintaining
    # the session id. We encourage this operation as it's very helpful in combating
    # session hijacking when not specifying and managing your own session id. It is
    # not the be-all and end-all of session hijacking defense, but it's a good start.
    public static function SessionUseOnlyCookies($Parameter = 1){

	ini_set('session.use_only_cookies',$Parameter);
	
	return true;
    }

    # Name of the session (used as cookie name).
    public static function SessionName($Parameter = 'PHPSESSID'){

	ini_set('session.name',$Parameter);
	
	return true;
    }

    # Initialize session on request startup.
    public static function SessionAutoStart($Parameter = 0){

	ini_set('session.auto_start',$Parameter);
	
	return true;
    }

    # Lifetime in seconds of cookie or, if 0, until browser is restarted.
    public static function SessionCookieLifetime($Parameter = 0){

	ini_set('session.cookie_lifetime',$Parameter);
	
	return true;
    }

    # The path for which the cookie is valid.
    public static function SessionCookiePath($Parameter = '/'){

	ini_set('session.cookie_path',$Parameter);
	
	return true;
    }

    # The domain for which the cookie is valid.
    public static function SessionCookieDomain($Parameter = ''){

	ini_set('session.cookie_domain',$Parameter);
	
	return true;
    }

    # Whether or not to add the httpOnly flag to the cookie, which makes
    # it inaccessible to browser scripting languages such as JavaScript.
    public static function SessionCookieHttponly($Parameter = ''){

	ini_set('session.cookie_httponly',$Parameter);
	
	return true;
    }

    # Handler used to serialize data.  php is the standard serializer of PHP.
    public static function SessionSerializeHandler($Parameter = 'php'){

	ini_set('session.serialize_handler',$Parameter);
	
	return true;
    }

    # Defines the probability that the 'garbage collection' process is started
    # on every session initialization. The probability is calculated by using
    # gc_probability/gc_divisor. Where session.gc_probability is the numerator
    # and gc_divisor is the denominator in the equation. Setting this value to 1
    # when the session.gc_divisor value is 100 will give you approximately a 1% chance
    # the gc will run on any give request.
    # Default Value: 1
    # Development Value: 1
    # Production Value: 1
    public static function SessionGCProbability($Parameter = 1){

	ini_set('session.gc_probability',$Parameter);
	
	return true;
    }

    # Defines the probability that the 'garbage collection' process is started on every
    # session initialization. The probability is calculated by using the following equation:
    # gc_probability/gc_divisor. Where session.gc_probability is the numerator and
    # session.gc_divisor is the denominator in the equation. Setting this value to 1
    # when the session.gc_divisor value is 100 will give you approximately a 1% chance
    # the gc will run on any give request. Increasing this value to 1000 will give you
    # a 0.1% chance the gc will run on any give request. For high volume production servers,
    # this is a more efficient approach.
    # Default Value: 100
    # Development Value: 1000
    # Production Value: 1000
    public static function SessionGCDivisor($Parameter = 1000){

	ini_set('session.gc_divisor',$Parameter);
	
	return true;
    }

    # After this number of seconds, stored data will be seen as 'garbage' and
    # cleaned up by the garbage collection process.
    public static function SessionGCMaxlifetime($Parameter = 1440){

	ini_set('session.gc_maxlifetime',$Parameter);
	
	return true;
    }

    # NOTE: If you are using the subdirectory option for storing session files
    #       (see session.save_path above), then garbage collection does *not*
    #       happen automatically.  You will need to do your own garbage
    #       collection through a shell script, cron entry, or some other method.
    #       For example, the following script would is the equivalent of
    #       setting session.gc_maxlifetime to 1440 (1440 seconds = 24 minutes):
    #          find /path/to/sessions -cmin +24 -type f | xargs rm
    # Check HTTP Referer to invalidate externally stored URLs containing ids.
    # HTTP_REFERER has to contain this substring for the session to be
    # considered as valid.
    public static function SessionRefererCheck($Parameter = ''){

	ini_set('session.referer_check',$Parameter);
	
	return true;
    }

    # Set to {nocache,private,public,} to determine HTTP caching aspects
    # or leave this empty to avoid sending anti-caching headers.
    public static function SessionCacheLimiter($Parameter = 'nochache'){

	ini_set('session.cache_limiter',$Parameter);
	
	return true;
    }

    # Document expires after n minutes.
    public static function SessionCacheExpire($Parameter = 180){

	ini_set('session.cache_expire',$Parameter);
	
	return true;
    }

    # trans sid support is disabled by default.
    # Use of trans sid may risk your users' security.
    # Use this option with caution.
    # - User may send URL contains active session ID
    #   to other person via. email/irc/etc.
    # - URL that contains active session ID may be stored
    #   in publicly accessible computer.
    # - User may access your site with the same session ID
    #   always using URL stored in browser's history or bookmarks.
    public static function SessionUseTransSid($Parameter = 0){

	ini_set('session.use_trans_sid',$Parameter);
	
	return true;
    }

    # Set session ID character length. This value could be between 22 to 256.
    # Shorter length than default is supported only for compatibility reason.
    # Users should use 32 or more chars.
    # http://php.net/session.sid_length
    # Default Value: 32
    # Development Value: 26
    # Production Value: 26
    public static function SessionSidLength($Parameter = 26){

	ini_set('session.sid_length',$Parameter);
	
	return true;
    }

    # The URL rewriter will look for URLs in a defined set of HTML tags.
    # <form> is special# if you include them here, the rewriter will
    # add a hidden <input> field with the info which is otherwise appended
    # to URLs. <form> tag's action attribute URL will not be modified
    # unless it is specified.
    # Note that all valid entries require a "=", even if no value follows.
    # Default Value: "a=href,area=href,frame=src,form="
    # Development Value: "a=href,area=href,frame=src,form="
    # Production Value: "a=href,area=href,frame=src,form="
    public static function SessionTransSidTags($Parameter = "a=href,area=href,frame=src,form="){

	ini_set('session.trans_sid_tags',$Parameter);
	
	return true;
    }

    # URL rewriter does not rewrite absolute URLs by default.
    # To enable rewrites for absolute pathes, target hosts must be specified
    # at RUNTIME. i.e. use ini_set()
    # <form> tags is special. PHP will check action attribute's URL regardless
    # of session.trans_sid_tags setting.
    # If no host is defined, HTTP_HOST will be used for allowed host.
    # Example value: php.net,www.php.net,wiki.php.net
    # Use "," for multiple hosts. No spaces are allowed.
    # Default Value: ""
    # Development Value: ""
    # Production Value: ""
    public static function SessionTransSidHosts($Parameter = ''){

	ini_set('session.trans_sid_hosts',$Parameter);
	
	return true;
    }

    # Define how many bits are stored in each character when converting
    # the binary hash data to something readable.
    # Possible values:
    #   4  (4 bits: 0-9, a-f)
    #   5  (5 bits: 0-9, a-v)
    #   6  (6 bits: 0-9, a-z, A-Z, "-", ",")
    # Default Value: 4
    # Development Value: 5
    # Production Value: 5
    public static function SessionSidBitsPerCharacter($Parameter = 5){

	ini_set('session.sid_bits_per_characret',$Parameter);
	
	return true;
    }

    # Enable upload progress tracking in $_SESSION
    # Default Value: On
    # Development Value: On
    # Production Value: On
    public static function SessionUploadProgressEnabled($Parameter = 'On'){

	ini_set('session.upload_progress.enabled',$Parameter);
	
	return true;
    }

    # Cleanup the progress information as soon as all POST data has been read
    # (i.e. upload completed).
    # Default Value: On
    # Development Value: On
    # Production Value: On
    public static function SessionUploadProgressCleanup($Parameter = 'On'){

	ini_set('session.upload_progress.cleanup',$Parameter);
	
	return true;
    }

    # A prefix used for the upload progress key in $_SESSION
    # Default Value: "upload_progress_"
    # Development Value: "upload_progress_"
    # Production Value: "upload_progress_"
    public static function SessionUploadProgressPrefix($Parameter = 'upload_progress_'){

	ini_set('session.upload_progress.prefix',$Parameter);
	
	return true;
    }

    # The index name (concatenated with the prefix) in $_SESSION
    # containing the upload progress information
    # Default Value: "PHP_SESSION_UPLOAD_PROGRESS"
    # Development Value: "PHP_SESSION_UPLOAD_PROGRESS"
    # Production Value: "PHP_SESSION_UPLOAD_PROGRESS"
    public static function SessionUploadProgressName($Parameter = 'PHP_SESSION_UPLOAD_PROGRESS'){

	ini_set('session.upload_progress.name',$Parameter);
	
	return true;
    }

    # How frequently the upload progress should be updated.
    # Given either in percentages (per-file), or in bytes
    # Default Value: "1%"
    # Development Value: "1%"
    # Production Value: "1%"
    public static function SessionUploadProgressFreq($Parameter = '1%'){

	ini_set('session.upload_progress.freq',$Parameter);
	
	return true;
    }

    # The minimum delay between updates, in seconds
    # Default Value: 1
    # Development Value: 1
    # Production Value: 1
    public static function SessionUploadProgressMinFreq($Parameter = 1){

	ini_set('session.upload_progress.min_freq',$Parameter);
	
	return true;
    }

    # Only write session data when session data is changed. Enabled by default.
    public static function SessionLazyWrite($Parameter = 'On'){

	ini_set('session.lazy_write',$Parameter);
	
	return true;
    }
}
