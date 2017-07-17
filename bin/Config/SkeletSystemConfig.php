<?php

namespace Fork\Bin\Config;

class SkeletSystemConfig{

    public $precision ;
    
    public $output_buffering ;


    public $output_handler;

    public $url_rewriter_tags;

    public $url_rewriter_hosts;
    

    public $zlib_output_compression;

    public $zlib_output_compression_level;

    public $zlib_output_handler;

    
    public $implicit_flush;

    public $unserialize_callback_func;
    
    public $serialize_precision;

    public $open_basedir;

    public $disable_functions;
    
    public $disable_classes;

    public $ignore_user_abort;

    public $realpath_cache_size;

    public $realpath_cache_ttl;

    public $zend_enable_gc;

    public $zend_multibyte;

    public $zend_script_encoding;

    public $expose_php;

    public $max_execution_time;

    public $max_input_time;

    public $max_input_nesting_level;

    public $max_input_vars;

    public $memory_limit;

    public $error_reporting;

    public $display_errors;

    public $display_startup_errors;

    public $log_errors;

    public $log_errors_max_len;

    public $ignore_repeated_errors;

    public $ignore_repeated_source;

    public $report_memleaks;

    public $track_errors;

    public $xmlrpc_errors;

    public $xmlrpc_error_number;

    public $html_errors;

    public $error_prepend_string;

    public $error_append_string;

    public $error_log;

    public $error_log;

    public $arg_separator_output;

    public $arg_separator_input;

    public $variables_order;

    public $request_order;

    public $register_argc_argv;

    public $auto_globals_jit;

    public $enable_post_data_reading;

    public $post_max_size;

    public $auto_prepend_file;

    public $auto_append_file;
    
    public $default_mimetype;

    public $default_charset;

    public $internal_encoding;

    public $input_encoding;

    public $output_encoding;

    public $include_path;

    public $doc_root;
    
    public $user_dir;

    public $extension_dir;
    
    public $sys_temp_dir;

    public $enable_dl;

    public $cgi_force_redirect;

    public $cgi_nph;

    public $cgi_redirect_status_env;

    public $cgi_fix_pathinfo;

    public $cgi_discard_path;

    public $fastcgi_impersonate;

    public $fastcgi_logging;

    public $cgi_rfc2616_headers;

    public $cgi_check_shebang_line;

    public $file_uploads;

    public $upload_tmp_dir;

    public $upload_max_filesize;

    public $max_file_uploads;

    public $allow_url_fopen;

    public $allow_url_include;

    public $from;

    public $user_agent;

    public $default_socket_timeout;

    public $auto_detect_line_endings;

    public $cli_server_color;

    public $date_timezone;

    public $date_default_latitude;

    public $date_default_longitude;

    public $date_sunrise_zenith;

    public $date_sunset_zenith;

    public $filter_default;

    public $filter_default_flags;

    public $iconv_input_encoding;

    public $iconv_internal_encoding;

    public $iconv_output_encoding;

    public $intl_default_locale;
    
    public $intl_error_level;
    
    public $intl_use_exceptions;

    public $sqlite3_extension_dir;

    public $pcre_backtrack_limit;

    public $pcre_recursion_limit;

    public $pcre_jit;

    public $pdo_odbc_connection_pooling;

    public $pdo_odbc_db2_instance_name;

    public $pdo_mysql_cache_size;


    public $pdo_mysql_default_socket;

    public $phar_readonly;
    
    public $phar_require_hash;

    public $phar_cache_list;
    

    public $SMTP;

    public $smtp_port;

    public $sendmail_path;

    public $mail_force_extra_parameters;

    public $mail_add_x_header;

    public $mail_log;

    public $mail_log;

    public $sql_safe_mode;

    public $odbc_default_db;

    public $odbc_default_user;

    public $odbc_default_pw;

    public $odbc_default_cursortype;

    public $odbc_allow_persistent;

    public $odbc_check_persistent;

    public $odbc_max_persistent;

    public $odbc_max_links;

    public $odbc_defaultlrl;

    public $odbc_defaultbinmode;

    public $birdstep_max_links;

    public $ibase_allow_persistent;

    public $ibase_max_persistent;

    public $ibase_max_links;

    public $ibase_default_db;

    public $ibase_default_user;

    public $ibase_default_password;

    public $ibase_default_charset;

    public $ibase_timestampformat;

    public $ibase_dateformat;

    public $ibase_timeformat;

    public $mysqli_max_persistent;

    public $mysqli_allow_local_infile;

    public $mysqli_allow_persistent;

    public $mysqli_max_links;

    public $mysqli_cache_size;

    public $mysqli_default_port;

    public $mysqli_default_socket;

    public $mysqli_reconnect;

    public $mysqlnd_collect_statistics;

    public $mysqlnd_collect_memory_statistics;

    public $mysqlnd_debug;

    public $mysqlnd_log_mask;

    public $mysqlnd_mempool_default_size;

    public $mysqlnd_net_cmd_buffer_size;

    public $mysqlnd_net_read_buffer_size;

    public $mysqlnd_net_read_timeout;

    public $mysqlnd_sha256_server_public_key;

    public $oci8_privileged_connect;

    public $oci8_max_persistent;

    public $oci8_persistent_timeout;

    public $oci8_ping_interval;

    public $oci8_connection_class;

    public $oci8_events;

    public $oci8_statement_cache_size;

    public $oci8_default_prefetch;

    public $oci8_old_oci_close_semantics;

    public $pgsql_allow_persistent;

    public $pgsql_auto_reset_persistent;

    public $pgsql_max_persistent;

    public $pgsql_max_links;

    public $pgsql_ignore_notice;

    public $pgsql_log_notice;

    public $bcmath_scale;

    public $session_save_handler;

    public $session_save_path;

    public $session_use_strict_mode;

    public $session_use_cookies;

    public $session_cookie_secure;

    public $session_use_only_cookies;

    public $session_name;

    public $session_auto_start;

    public $session_cookie_lifetime;

    public $session_cookie_path;

    public $session_cookie_domain;
    
    public $session_cookie_httponly;
    
    public $session_serialize_handler;

    public $session_gc_probability;

    public $session_gc_divisor;

    public $session_gc_maxlifetime;

    public $session_referer_check;

    public $session_cache_limiter;

    public $session_cache_expire;

    public $session_use_trans_sid;

    public $session_sid_length;

    public $session_trans_sid_tags;

    public $session_trans_sid_hosts;

    public $session_sid_bits_per_character;

    public $session_upload_progress_enabled;

    public $session_upload_progress_cleanup;

    public $session_upload_progress_prefix;

    public $session_upload_progress_name;

    public $session_upload_progress_freq;

    public $session_upload_progress_min_freq;

    public $session_lazy_write;

    public $zend_assertions;

    public $assert_active;

    public $assert_exception;

    public $assert_warning;

    public $assert_bail;

    public $assert_callback;

    public $assert_quiet_eval;

    public $mbstring_language;

    public $mbstring_internal_encoding;

    public $mbstring_http_input;

    public $mbstring_http_output;

    public $mbstring_encoding_translation = 'Off'

    public $mbstring_detect_order;

    public $mbstring_substitute_character;

    public $mbstring_func_overload;

    public $mbstring_strict_detection;

    public $mbstring_http_output_conv_mimetype;

    public $tidy_default_config;

    public $tidy_clean_output;

    public $soap_wsdl_cache_enabled;

    public $soap_wsdl_cache_dir;

    public $soap_wsdl_cache_ttl;

    public $soap_wsdl_cache_limit;

    public $sysvshm_init_mem;

    public $ldap_max_links;

    public $mcrypt_algorithms_dir;

    public $mcrypt_modes_dir;
    

    public function __construct(){
	
	$this->Precision($this->precision);
	
	$this->OutputBuffering($this->output_buffering);
	
	$this->OutputHandler($this->output_handler);
	
	$this->UrlRewriterTags($this->$url_rewriter_tags);

	$this->UrlRewriterHosts($this->$url_rewriter_hosts);

	$this->ZLibOutputCompression($this->$zlib_output_compression);

	$this->ZLibOutputCompression($this->$zlib_output_compression_level);

	$this->ZLibOutputHandler($this->$zlib_output_handler);	

	$this->ImplicitFlush($this->$implicit_flush);

	#$this->$unserialize_callback_func = '';

	$this->$serialize_precision = -1;

	#$this->$open_basedir = '';

	#$this->DisableFunction($this->disable_functions); #array

	#$this->$disable_classes = '';

	#$this->$highlight_string  = #DD0000
	#$this->$highlight_comment = #FF9900
	#$this->$highlight_keyword = #007700
	#$this->$highlight_default = #0000BB
	#$this->$highlight_html    = #000000

	#$this->$ignore_user_abort = On

	#$this->$realpath_cache_size = 4096k

	#$this->$realpath_cache_ttl = 120

	$this->$zend_enable_gc = 'On';

	#$this->$zend_multibyte = Off

	#$this->$zend_script_encoding =

	$this->$expose_php = 'Off';

	$this->$max_execution_time = 30;

	$this->$max_input_time = 60;

	#$this->$max_input_nesting_level = 64

	#$this->$ max_input_vars = 1000

	$this->$memory_limit = '128M';

	$this->$error_reporting = 'E_ALL';

	$this->$display_errors = 'On';

	$this->$display_startup_errors = 'On';

	$this->$log_errors = 'On';

	$this->$log_errors_max_len = 1024;

	$this->$ignore_repeated_errors = 'Off';

	$this->$ignore_repeated_source = 'Off';

	$this->$report_memleaks = 'On';

	$this->$track_errors = 'On';

	#$this->$xmlrpc_errors = 0

	#$this->$xmlrpc_error_number = 0

	$this->$html_errors = 'On';

	#$this->$docref_root = "/phpmanual/"

	#$this->$docref_ext = _html

	#$this->$error_prepend_string = "<span style='color: #$this->$ff0000'>"

	#$this->$error_append_string = "</span>"

	#$this->$error_log = php_errors_log

	#$this->$error_log = syslog

	#$this->$arg_separator_output = "&amp#$this->$"

	#$this->$arg_separator_input = "#$this->$&"

	$this->$variables_order = "GPCS";

	$this->$request_order = "GP";

	$this->$register_argc_argv = 'Off';

	$this->$auto_globals_jit = 'On';

	#$this->$enable_post_data_reading = Off

	$this->$post_max_size = '50M';

	$this->$auto_prepend_file = '';

	$this->$auto_append_file = '';

	$this->$default_mimetype = "text/html";

	$this->$default_charset = "UTF-8";

	#$this->$internal_encoding =

	#$this->$input_encoding =

	#$this->$output_encoding =

	#$this->$include_path = "_:/usr/share/php";

	$this->$doc_root = '';

	$this->$user_dir = '';

	#$this->$ extension_dir = "_/";

	#$this->$ sys_temp_dir = "/tmp";

	$this->$enable_dl = 'Off';

	#$this->$cgi_force_redirect = 1;

	#$this->$cgi_nph = 1;

	#$this->$cgi_redirect_status_env =

	#$this->$cgi_fix_pathinfo = 1;

	#$this->$cgi_discard_path = 1;

	#$this->$fastcgi_impersonate = 1;

	#$this->$fastcgi_logging = 0;

	#$this->$cgi_rfc2616_headers = 0;

	#$this->$cgi_check_shebang_line = 1;

	$this->$file_uploads = 'On';

	#$this->$upload_tmp_dir = '';

	$this->$upload_max_filesize = '50M';

	$this->$max_file_uploads = 20;

	$this->$allow_url_fopen = 'On';

	$this->$allow_url_include = 'Off';

	#$this->$from = "john@doe_com";

	#$this->$user_agent = "PHP";

	$this->$default_socket_timeout = 60;

	#$this->$auto_detect_line_endings = Off

	$this->$cli_server_color = 'On';

	#$this->$date_timezone =

	#$this->$date_default_latitude = 31_7667

	#$this->$date_default_longitude = 35_2333

	#$this->$date_sunrise_zenith = 90_583333

	#$this->$date_sunset_zenith = 90_583333

	#$this->$filter_default = unsafe_raw

	#$this->$filter_default_flags =

	#$this->$iconv_input_encoding =

	#$this->$iconv_internal_encoding =

	#$this->$iconv_output_encoding =

	#$this->$intl_default_locale =

	#$this->$intl_error_level = E_WARNING

	#$this->$intl_use_exceptions = 0

	#$this->$sqlite3_extension_dir =

	#$this->$pcre_backtrack_limit=100000

	#$this->$pcre_recursion_limit=100000

	#$this->$pcre_jit=1

	#$this->$pdo_odbc_connection_pooling=strict

	#$this->$pdo_odbc_db2_instance_name

	$this->$pdo_mysql_cache_size = 2000;

	$this->$pdo_mysql_default_socket = '';

	#$this->$phar_readonly = On

	#$this->$phar_require_hash = On

	#$this->$phar_cache_list =

	$this->$SMTP = 'localhost';

	$this->$smtp_port = 25;

	#$this->$sendmail_path =

	#$this->$mail_force_extra_parameters =

	$this->$mail_add_x_header = 'On';

	#$this->$mail_log =

	#$this->$mail_log = syslog

	$this->$sql_safe_mode = 'Off';

	#$this->$odbc_default_db    =  Not yet implemented

	#$this->$odbc_default_user  =  Not yet implemented

	#$this->$odbc_default_pw    =  Not yet implemented

	#$this->$odbc_default_cursortype

	$this->$odbc_allow_persistent = 'On';

	$this->$odbc_check_persistent = 'On';

	$this->$odbc_max_persistent = -1;

	$this->$odbc_max_links = -1;

	$this->$odbc_defaultlrl = 4096;

	$this->$odbc_defaultbinmode = 1;

	#$this->$birdstep_max_links = -1;

	$this->$ibase_allow_persistent = 1;

	$this->$ibase_max_persistent = -1;

	$this->$ibase_max_links = -1;

	#$this->$ibase_default_db = '';

	#$this->$ibase_default_user = '';

	#$this->$ibase_default_password = '';

	#$this->$ibase_default_charset = '';

	$this->$ibase_timestampformat = "%Y-%m-%d %H:%M:%S";

	$this->$ibase_dateformat = "%Y-%m-%d";

	$this->$ibase_timeformat = "%H:%M:%S";

	$this->$mysqli_max_persistent = -1;

	#$this->$mysqli_allow_local_infile = 'On';

	$this->$mysqli_allow_persistent = 'On';

	$this->$mysqli_max_links = -1;

	$this->$mysqli_cache_size = 2000;

	$this->$mysqli_default_port = 3306;

	$this->$mysqli_default_socket = '';

	$this->$mysqli_default_host = '';

	$this->$mysqli_default_user = '';

	$this->$mysqli_default_pw = '';

	$this->$mysqli_reconnect = 'Off';

	$this->$mysqlnd_collect_statistics = 'On';

	$this->$mysqlnd_collect_memory_statistics = 'Off';

	#$this->$mysqlnd_debug = '';

	#$this->$mysqlnd_log_mask = 0;

	#$this->$mysqlnd_mempool_default_size = 16000;

	#$this->$mysqlnd_net_cmd_buffer_size = 2048;

	#$this->$mysqlnd_net_read_buffer_size = 32768;

	#$this->$mysqlnd_net_read_timeout = 31536000;

	#$this->$mysqlnd_sha256_server_public_key = '';

	#$this->$oci8_privileged_connect = 'Off';

	#$this->$oci8_max_persistent = -1;

	#$this->$oci8_persistent_timeout = -1;

	#$this->$oci8_ping_interval = 60;

	#$this->$oci8_connection_class = '';

	#$this->$oci8_events = 'Off';

	#$this->$oci8_statement_cache_size = 20;

	#$this->$oci8_default_prefetch = 100;

	#$this->$oci8_old_oci_close_semantics = 'Off';

	$this->$pgsql_allow_persistent = 'On';

	$this->$pgsql_auto_reset_persistent = 'Off';

	$this->$pgsql_max_persistent = -1;

	$this->$pgsql_max_links = -1;

	$this->$pgsql_ignore_notice = 0;

	$this->$pgsql_log_notice = 0;

	$this->$bcmath_scale = 0;

	$this->$session_save_handler = files;

	#$this->$session_save_path = "/var/lib/php/sessions"

	$this->$session_use_strict_mode = 0;

	$this->$session_use_cookies = 1;

	#$this->$session_cookie_secure =

	$this->$session_use_only_cookies = 1;

	$this->$session_name = 'PHPSESSID';

	$this->$session_auto_start = 0;

	$this->$session_cookie_lifetime = 0;

	$this->$session_cookie_path = '/';

	$this->$session_cookie_domain = '';

	$this->$session_cookie_httponly = '';

	$this->$session_serialize_handler = 'php';

	$this->$session_gc_probability = 0;

	$this->$session_gc_divisor = 1000;

	$this->$session_gc_maxlifetime = 2592000;

	$this->$session_referer_check = '';

	$this->$session_cache_limiter = nocache;

	$this->$session_cache_expire = 180;

	$this->$session_use_trans_sid = 0;

	$this->$session_sid_length = 26;

	$this->$session_trans_sid_tags = "a=href,area=href,frame=src,form=";

	#$this->$session_trans_sid_hosts=""

	$this->$session_sid_bits_per_character = 5;

	#$this->$session_upload_progress_enabled = On

	#$this->$session_upload_progress_cleanup = On

	#$this->$session_upload_progress_prefix = "upload_progress_"

	#$this->$session_upload_progress_name = "PHP_SESSION_UPLOAD_PROGRESS"

	#$this->$session_upload_progress_freq =  "1%"

	#$this->$session_upload_progress_min_freq = "1"

	#$this->$session_lazy_write = On

	$this->$zend_assertions = -1;

	#$this->$assert_active = On

	#$this->$assert_exception = On

	#$this->$assert_warning = On

	#$this->$assert_bail = Off

	#$this->$assert_callback = 0

	#$this->$assert_quiet_eval = 0

	#$this->$mbstring_language = Japanese

	#$this->$mbstring_internal_encoding =

	#$this->$mbstring_http_input =

	#$this->$mbstring_http_output =

	#$this->$mbstring_encoding_translation = Off

	#$this->$mbstring_detect_order = auto

	#$this->$mbstring_substitute_character = none

	#$this->$mbstring_func_overload = 0

	#$this->$mbstring_strict_detection = On

	#$this->$mbstring_http_output_conv_mimetype=

	#$this->$tidy_default_config = /usr/local/lib/php/default_tcfg

	$this->$tidy_clean_output = 'Off';

	$this->$soap_wsdl_cache_enabled = 1;

	$this->$soap_wsdl_cache_dir = "/tmp";

	$this->$soap_wsdl_cache_ttl = 86400;

	$this->$soap_wsdl_cache_limit = 5;

	#$this->$sysvshm_init_mem = 10000;

	$this->$ldap_max_links = -1;

	#$this->$mcrypt_algorithms_dir=

	#$this->$mcrypt_modes_dir=
    }


    ; The number of significant digits displayed in floating point numbers.
      ; http://php.net/precision
					    precision = 14

    ; Output buffering is a mechanism for controlling how much output data
    ; (excluding headers and cookies) PHP should keep internally before pushing that
    ; data to the client. If your application's output exceeds this setting, PHP
; will send that data in chunks of roughly the size you specify.
; Turning on this setting and managing its maximum buffer size can yield some
; interesting side-effects depending on your application and web server.
; You may be able to send headers and cookies after you've already sent output
    ; through print or echo. You also may see performance benefits if your server is
    ; emitting less packets due to buffered output versus PHP streaming the output
    ; as it gets it. On production servers, 4096 bytes is a good setting for performance
    ; reasons.
      ; Note: Output buffering can also be controlled via Output Buffering Control
    ;   functions.
	; Possible Values:
			   ;   On = Enabled and buffer is unlimited. (Use with caution)
    ;   Off = Disabled
    ;   Integer = Enables the buffer and sets its maximum size in bytes.
		  ; Note: This directive is hardcoded to Off for the CLI SAPI
    ; Default Value: Off
    ; Development Value: 4096
    ; Production Value: 4096
    ; http://php.net/output-buffering
		  output_buffering = 4096

    ; You can redirect all of the output of your scripts to a function.  For
    ; example, if you set output_handler to "mb_output_handler", character
    ; encoding will be transparently converted to the specified encoding.
      ; Setting any output handler automatically turns on output buffering.
	; Note: People who wrote portable scripts should not depend on this ini
    ;   directive. Instead, explicitly set the output handler using ob_start().
			    ;   Using this ini directive may cause problems unless you know what script
    ;   is doing.
	; Note: You cannot use both "mb_output_handler" with "ob_iconv_handler"
    ;   and you cannot use both "ob_gzhandler" and "zlib.output_compression".
	; Note: output_handler must be empty if this is set 'On' !!!!
    ;   Instead you must use zlib.output_handler.
	; http://php.net/output-handler
				     ;output_handler =

					 ; URL rewriter function rewrites URL on the fly by using
    ; output buffer. You can set target tags by this configuration.
      ; "form" tag is special tag. It will add hidden input tag to pass values.
	; Refer to session.trans_sid_tags for usage.
	  ; Default Value: "form="
    ; Development Value: "form="
    ; Production Value: "form="
    ;url_rewriter.tags

    ; URL rewriter will not rewrites absolute URL nor form by default. To enable
    ; absolute URL rewrite, allowed hosts must be defined at RUNTIME.
			    ; Refer to session.trans_sid_hosts for more details.
			      ; Default Value: ""
    ; Development Value: ""
    ; Production Value: ""
    ;url_rewriter.hosts

    ; Transparent output compression using the zlib library
    ; Valid values for this option are 'off', 'on', or a specific buffer size
    ; to be used for compression (default is 4KB)
    ; Note: Resulting chunk size may vary due to nature of compression. PHP
    ;   outputs chunks that are few hundreds bytes each as a result of
    ;   compression. If you prefer a larger chunk size for better
    ;   performance, enable output_buffering in addition.
		     ; Note: You need to use zlib.output_handler instead of the standard
    ;   output_handler, or otherwise the output will be corrupted.
			; http://php.net/zlib.output-compression
					 zlib.output_compression = Off

    ; http://php.net/zlib.output-compression-level
								   ;zlib.output_compression_level = -1

    ; You cannot specify additional output handlers if zlib.output_compression
    ; is activated here. This setting does the same as output_handler but in
    ; a different order.
      ; http://php.net/zlib.output-handler
												    ;zlib.output_handler =

													; Implicit flush tells PHP to tell the output layer to flush itself
    ; automatically after every output block.  This is equivalent to calling the
    ; PHP function flush() after each and every call to print() or echo() and each
    ; and every HTML block.  Turning this option on has serious performance
    ; implications and is generally recommended for debugging purposes only.
      ; http://php.net/implicit-flush
													; Note: This directive is hardcoded to On for the CLI SAPI
    implicit_flush = Off

    ; The unserialize callback function will be called (with the undefined class'
; name as parameter), if the unserializer finds an undefined class
; which should be instantiated. A warning appears if the specified function is
; not defined, or if the function doesn't include/implement the missing class.
						 ; So only set this entry, if you really want to implement such a
	; callback-function.
	  unserialize_callback_func =

	      ; When floats & doubles are serialized store serialize_precision significant
	; digits after the floating point. The default value ensures that when floats
	; are decoded with unserialize, the data will remain the same.
					; The value is also used for json_encode when encoding double values.
					  ; If -1 is used, then dtoa mode 0 is used which automatically select the best
	; precision.
	  serialize_precision = -1

	; open_basedir, if set, limits all file operations to the defined directory
	; and below.  This directive makes most sense if used in a per-directory
	; or per-virtualhost web server configuration file.
	  ; http://php.net/open-basedir
				;open_basedir =

				    ; This directive allows you to disable certain functions for security reasons.
				      ; It receives a comma-delimited list of function names.
					; http://php.net/disable-functions
				    disable_functions =

					; This directive allows you to disable certain classes for security reasons.
					  ; It receives a comma-delimited list of class names.
					    ; http://php.net/disable-classes
					disable_classes =

					    ; Colors for Syntax Highlighting mode.  Anything that's acceptable in
; <span style="color: ???????"> would work.
; http://php.net/syntax-highlighting
;highlight.string  = #DD0000
;highlight.comment = #FF9900
;highlight.keyword = #007700
;highlight.default = #0000BB
;highlight.html    = #000000

; If enabled, the request will be allowed to complete even if the user aborts
; the request. Consider enabling it if executing long requests, which may end up
; being interrupted by the user or a browser timing out. PHP's default behavior
	; is to disable this feature.
	  ; http://php.net/ignore-user-abort
					    ;ignore_user_abort = On

	; Determines the size of the realpath cache to be used by PHP. This value should
	; be increased on systems where PHP opens many files to reflect the quantity of
	; the file operations performed.
	  ; http://php.net/realpath-cache-size
								 ;realpath_cache_size = 16k

	; Duration of time, in seconds for which to cache realpath information for a given
	; file or directory. For systems with rarely changing files, consider increasing this
	; value.
	  ; http://php.net/realpath-cache-ttl
											;realpath_cache_ttl = 120

	; Enables or disables the circular reference collector.
	  ; http://php.net/zend.enable-gc
													      zend.enable_gc = On

	; If enabled, scripts may be written in encodings that are incompatible with
	; the scanner.  CP936, Big5, CP949 and Shift_JIS are the examples of such
	; encodings.  To use this feature, mbstring extension must be enabled.
					   ; Default: Off
	;zend.multibyte = Off

	; Allows to set the default encoding for the scripts.  This value will be used
	; unless "declare(encoding=...)" directive appears at the top of the script.
	  ; Only affects if zend.multibyte is set.
	    ; Default: ""
	;zend.script_encoding =

	    ;;;;;;;;;;;;;;;;;
	; Miscellaneous ;
	;;;;;;;;;;;;;;;;;

	; Decides whether PHP may expose the fact that it is installed on the server
	; (e.g. by adding its signature to the Web server header).  It is no security
	; threat in any way, but it makes it possible to determine whether you use PHP
	; on your server or not.
	  ; http://php.net/expose-php
	    expose_php = On

	;;;;;;;;;;;;;;;;;;;
	; Resource Limits ;
	;;;;;;;;;;;;;;;;;;;

	; Maximum execution time of each script, in seconds
	; http://php.net/max-execution-time
			 ; Note: This directive is hardcoded to 0 for the CLI SAPI
	max_execution_time = 30

	; Maximum amount of time each script may spend parsing request data. It's a good
; idea to limit this time on productions servers in order to eliminate unexpectedly
; long running scripts.
; Note: This directive is hardcoded to -1 for the CLI SAPI
; Default Value: -1 (Unlimited)
; Development Value: 60 (60 seconds)
; Production Value: 60 (60 seconds)
; http://php.net/max-input-time
max_input_time = 60

; Maximum input variable nesting level
; http://php.net/max-input-nesting-level
;max_input_nesting_level = 64

; How many GET/POST/COOKIE input variables may be accepted
; max_input_vars = 1000

; Maximum amount of memory a script may consume (128MB)
; http://php.net/memory-limit
memory_limit = 128M

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; Error handling and logging ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

; This directive informs PHP of which errors, warnings and notices you would like
; it to take action for. The recommended way of setting values for this
; directive is through the use of the error level constants and bitwise
; operators. The error level constants are below here for convenience as well as
; some common settings and their meanings.
; By default, PHP is set to take action on all errors, notices and warnings EXCEPT
; those related to E_NOTICE and E_STRICT, which together cover best practices and
; recommended coding standards in PHP. For performance reasons, this is the
; recommend error reporting setting. Your production server shouldn't be wasting
	; resources complaining about best practices and coding standards. That's what
; development servers and development settings are for.
; Note: The php.ini-development file has this setting as E_ALL. This
; means it pretty much reports everything which is exactly what you want during
; development and early testing.
;
; Error Level Constants:
; E_ALL             - All errors and warnings (includes E_STRICT as of PHP 5.4.0)
; E_ERROR           - fatal run-time errors
; E_RECOVERABLE_ERROR  - almost fatal run-time errors
; E_WARNING         - run-time warnings (non-fatal errors)
; E_PARSE           - compile-time parse errors
; E_NOTICE          - run-time notices (these are warnings which often result
;                     from a bug in your code, but it's possible that it was
	;                     intentional (e.g., using an uninitialized variable and
	    ;                     relying on the fact it is automatically initialized to an
	    ;                     empty string)
	; E_STRICT          - run-time notices, enable to have PHP suggest changes
	;                     to your code which will ensure the best interoperability
	;                     and forward compatibility of your code
	; E_CORE_ERROR      - fatal errors that occur during PHP's initial startup
; E_CORE_WARNING    - warnings (non-fatal errors) that occur during PHP's
	;                     initial startup
	; E_COMPILE_ERROR   - fatal compile-time errors
	; E_COMPILE_WARNING - compile-time warnings (non-fatal errors)
	; E_USER_ERROR      - user-generated error message
	; E_USER_WARNING    - user-generated warning message
	; E_USER_NOTICE     - user-generated notice message
	; E_DEPRECATED      - warn about code that will not work in future versions
	;                     of PHP
	; E_USER_DEPRECATED - user-generated deprecation warnings
	;
	; Common Values:
			     ;   E_ALL (Show all errors, warnings and notices including coding standards.)
	;   E_ALL & ~E_NOTICE  (Show all errors, except for notices)
	;   E_ALL & ~E_NOTICE & ~E_STRICT  (Show all errors, except for notices and coding standards warnings.)
	;   E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR  (Show only errors)
	; Default Value: E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED
	; Development Value: E_ALL
	; Production Value: E_ALL & ~E_DEPRECATED & ~E_STRICT
	; http://php.net/error-reporting
			     error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT

	; This directive controls whether or not and where PHP will output errors,
							; notices and warnings too. Error output is very useful during development, but
	; it could be very dangerous in production environments. Depending on the code
	; which is triggering the error, sensitive information could potentially leak
	; out of your application such as database usernames and passwords or worse.
	  ; For production environments, we recommend logging errors rather than
	; sending them to STDOUT.
	  ; Possible Values:
					       ;   Off = Do not display any errors
	;   stderr = Display errors to STDERR (affects only CGI/CLI binaries!)
	;   On or stdout = Display errors to STDOUT
	; Default Value: On
	; Development Value: On
	; Production Value: Off
	; http://php.net/display-errors
			   display_errors = Off

	; The display of errors which occur during PHP's startup sequence are handled
; separately from display_errors. PHP's default behavior is to suppress those
	; errors from clients. Turning the display of startup errors on can be useful in
	; debugging configuration problems. We strongly recommend you
	; set this to 'off' for production servers.
	  ; Default Value: Off
	; Development Value: On
	; Production Value: Off
	; http://php.net/display-startup-errors
					    display_startup_errors = Off

	; Besides displaying errors, PHP can also log errors to locations such as a
	; server-specific log, STDERR, or a location specified by the error_log
	; directive found below. While errors should not be displayed on productions
	; servers they should still be monitored and logging is a great way to do that.
	  ; Default Value: Off
	; Development Value: On
	; Production Value: On
	; http://php.net/log-errors
								     log_errors = On

	; Set maximum length of log_errors. In error_log information about the source is
	; added. The default is 1024 and 0 allows to not apply any maximum length at all.
	  ; http://php.net/log-errors-max-len
										  log_errors_max_len = 1024

	; Do not log repeated messages. Repeated errors must occur in same file on same
	; line unless ignore_repeated_source is set true.
	  ; http://php.net/ignore-repeated-errors
												       ignore_repeated_errors = Off

	; Ignore source of message when ignoring repeated messages. When this setting
	; is On you will not log errors with repeated messages from different files or
	; source lines.
	  ; http://php.net/ignore-repeated-source
																ignore_repeated_source = Off

	; If this parameter is set to Off, then memory leaks will not be shown (on
	    ; stdout or in the log). This has only effect in a debug compile, and if
	; error reporting includes E_WARNING in the allowed list
	; http://php.net/report-memleaks
				 report_memleaks = On

	; This setting is on by default.
	  ;report_zend_debug = 0

	; Store the last error/warning message in $php_errormsg (boolean). Setting this value
	; to On can assist in debugging and is appropriate for development servers. It should
	; however be disabled on production servers.
	  ; Default Value: Off
	; Development Value: On
	; Production Value: Off
	; http://php.net/track-errors
			       track_errors = Off

	; Turn off normal error reporting and emit XML-RPC error XML
	; http://php.net/xmlrpc-errors
					      ;xmlrpc_errors = 0

	; An XML-RPC faultCode
	;xmlrpc_error_number = 0

	; When PHP displays or logs an error, it has the capability of formatting the
	; error message as HTML for easier reading. This directive controls whether
	; the error message is formatted as HTML or not.
	  ; Note: This directive is hardcoded to Off for the CLI SAPI
	; Default Value: On
	; Development Value: On
	; Production value: On
	; http://php.net/html-errors
			       html_errors = On

	; If html_errors is set to On *and* docref_root is not empty, then PHP
	; produces clickable error messages that direct to a page describing the error
	; or function causing the error in detail.
	  ; You can download a copy of the PHP manual from http://php.net/docs
					     ; and change docref_root to the base URL of your local copy including the
	; leading '/'. You must also specify the file extension being used including
	; the dot. PHP's default behavior is to leave these settings empty, in which
; case no links to documentation are generated.
; Note: Never use this feature for production boxes.
; http://php.net/docref-root
; Examples
;docref_root = "/phpmanual/"

; http://php.net/docref-ext
;docref_ext = .html

; String to output before an error message. PHP's default behavior is to leave
	; this setting blank.
	  ; http://php.net/error-prepend-string
					     ; Example:
					     ;error_prepend_string = "<span style='color: #ff0000'>"

	; String to output after an error message. PHP's default behavior is to leave
; this setting blank.
; http://php.net/error-append-string
; Example:
;error_append_string = "</span>"

; Log errors to specified file. PHP's default behavior is to leave this value
	; empty.
	  ; http://php.net/error-log
								     ; Example:
								     ;error_log = php_errors.log
	; Log errors to syslog.
	  ;error_log = syslog

	;windows.show_crt_warning
	; Default value: 0
	; Development value: 0
	; Production value: 0

	;;;;;;;;;;;;;;;;;
	; Data Handling ;
	;;;;;;;;;;;;;;;;;

	; The separator used in PHP generated URLs to separate arguments.
	  ; PHP's default setting is "&".
; http://php.net/arg-separator.output
; Example:
;arg_separator.output = "&amp;"

; List of separator(s) used by PHP to parse input URLs into variables.
; PHP's default setting is "&".
	    ; NOTE: Every character in this directive is considered as separator!
	; http://php.net/arg-separator.input
		       ; Example:
		       ;arg_separator.input = ";&"

	; This directive determines which super global arrays are registered when PHP
	; starts up. G,P,C,E & S are abbreviations for the following respective super
	; globals: GET, POST, COOKIE, ENV and SERVER. There is a performance penalty
	; paid for the registration of these arrays and because ENV is not as commonly
	; used as the others, ENV is not recommended on productions servers. You
	; can still get access to the environment variables through getenv() should you
	; need to.
	  ; Default Value: "EGPCS"
	; Development Value: "GPCS"
	; Production Value: "GPCS";
	; http://php.net/variables-order
					      variables_order = "GPCS"

	; This directive determines which super global data (G,P & C) should be
	; registered into the super global array REQUEST. If so, it also determines
	; the order in which that data is registered. The values for this directive
	; are specified in the same manner as the variables_order directive,
							; EXCEPT one. Leaving this value empty will cause PHP to use the value set
	; in the variables_order directive. It does not mean it will leave the super
	; globals array REQUEST empty.
	  ; Default Value: None
	; Development Value: "GP"
	; Production Value: "GP"
	; http://php.net/request-order
								request_order = "GP"

	; This directive determines whether PHP registers $argv & $argc each time it
	; runs. $argv contains an array of all the arguments passed to PHP when a script
	; is invoked. $argc contains an integer representing the number of arguments
	; that were passed when the script was invoked. These arrays are extremely
	; useful when running scripts from the command line. When this directive is
	; enabled, registering these variables consumes CPU cycles and memory each time
	; a script is executed. For performance reasons, this feature should be disabled
	; on production servers.
	  ; Note: This directive is hardcoded to On for the CLI SAPI
	; Default Value: On
	; Development Value: Off
	; Production Value: Off
	; http://php.net/register-argc-argv
										register_argc_argv = Off

	; When enabled, the ENV, REQUEST and SERVER variables are created when they're
; first used (Just In Time) instead of when the script starts. If these
; variables are not used within a script, having this directive on will result
; in a performance gain. The PHP directive register_argc_argv must be disabled
; for this directive to have any affect.
; http://php.net/auto-globals-jit
auto_globals_jit = On

; Whether PHP will read the POST data.
; This option is enabled by default.
; Most likely, you won't want to disable this option globally. It causes $_POST
	; and $_FILES to always be empty; the only way you will be able to read the
	; POST data will be through the php://input stream wrapper. This can be useful
												     ; to proxy requests or to process the POST data in a memory efficient fashion.
												       ; http://php.net/enable-post-data-reading
												     ;enable_post_data_reading = Off

	; Maximum size of POST data that PHP will accept.
	  ; Its value may be 0 to disable the limit. It is ignored if POST data reading
	; is disabled through enable_post_data_reading.
	  ; http://php.net/post-max-size
																 post_max_size = 8M

	; Automatically add files before PHP document.
	  ; http://php.net/auto-prepend-file
																		 auto_prepend_file =

																		     ; Automatically add files after PHP document.
																		       ; http://php.net/auto-append-file
																		     auto_append_file =

																			 ; By default, PHP will output a media type using the Content-Type header. To
	; disable this, simply set it to be empty.
			;
	; PHP's built-in default media type is set to text/html.
; http://php.net/default-mimetype
default_mimetype = "text/html"

; PHP's default character set is set to UTF-8.
	  ; http://php.net/default-charset
																			 default_charset = "UTF-8"

	; PHP internal character encoding is set to empty.
	  ; If empty, default_charset is used.
		      ; http://php.net/internal-encoding
																					   ;internal_encoding =

																					       ; PHP input character encoding is set to empty.
																						 ; If empty, default_charset is used.
																							     ; http://php.net/input-encoding
																					       ;input_encoding =

																						   ; PHP output character encoding is set to empty.
																						     ; If empty, default_charset is used.
																								 ; See also output_buffer.
																								   ; http://php.net/output-encoding
																						   ;output_encoding =

																						       ;;;;;;;;;;;;;;;;;;;;;;;;;
	; Paths and Directories ;
	;;;;;;;;;;;;;;;;;;;;;;;;;

	; UNIX: "/path1:/path2"
	;include_path = ".:/php/includes"
	;
	; Windows: "\path1;\path2"
	;include_path = ".;c:\php\includes"
	;
	; PHP's default setting for include_path is ".;/path/to/php/pear"
; http://php.net/include-path

; The root of the PHP pages, used only if nonempty.
; if PHP was not compiled with FORCE_REDIRECT, you SHOULD set doc_root
; if you are running php as a CGI under any web server (other than IIS)
; see documentation for security issues.  The alternate is to use the
; cgi.force_redirect configuration below
; http://php.net/doc-root
doc_root =

; The directory under which PHP opens the script using /~username used only
; if nonempty.
; http://php.net/user-dir
user_dir =

; Directory in which the loadable extensions (modules) reside.
; http://php.net/extension-dir
; extension_dir = "./"
; On windows:
; extension_dir = "ext"

; Directory where the temporary files should be placed.
; Defaults to the system default (see sys_get_temp_dir)
; sys_temp_dir = "/tmp"

; Whether or not to enable the dl() function.  The dl() function does NOT work
; properly in multithreaded servers, such as IIS or Zeus, and is automatically
; disabled on them.
; http://php.net/enable-dl
enable_dl = Off

; cgi.force_redirect is necessary to provide security running PHP as a CGI under
; most web servers.  Left undefined, PHP turns this on by default.  You can
; turn it off here AT YOUR OWN RISK
; **You CAN safely turn this off for IIS, in fact, you MUST.**
; http://php.net/cgi.force-redirect
;cgi.force_redirect = 1

; if cgi.nph is enabled it will force cgi to always sent Status: 200 with
; every request. PHP's default behavior is to disable this feature.
	  ;cgi.nph = 1

	; if cgi.force_redirect is turned on, and you are not running under Apache or Netscape
	; (iPlanet) web servers, you MAY need to set an environment variable name that PHP
	; will look for to know it is OK to continue execution.  Setting this variable MAY
	; cause security issues, KNOW WHAT YOU ARE DOING FIRST.
				 ; http://php.net/cgi.redirect-status-env
		     ;cgi.redirect_status_env =


;cgi.fix_pathinfo=1

;cgi.discard_path=1

;fastcgi.impersonate = 1

	  ;fastcgi.logging = 0
			     ;cgi.rfc2616_headers = 0
						    ;cgi.check_shebang_line=1
									    file_uploads = On

											   ;upload_tmp_dir =

											       upload_max_filesize = 2M

	max_file_uploads = 20

    

    #[Session]

    public function SessionSaveHandler($Parameter = 'files'){

	ini_set('session.save_handler',$Parameter);
	
	return true;
    }

    public function SessionSavePath($Parameter = ''){

	ini_set('session.save_path',$Parameter);
	
	return true;
    }

    public function SessionUseCookies($Parameter = '1'){

	ini_set('session.use_cookies',$Parameter);
	
	return true;
    }


    public function SessionName($Parameter = 'PHPSESSID'){

	ini_set('session.save_path',$Parameter);
	
	return true;
    }

    public function SessionAutoStart($Parameter = '0'){

	ini_set('session.auto_start',$Parameter);
	
	return true;
    }

    public function SessionCookieLifeTime($Parameter = '0'){

	ini_set('session.cookie_lifetime',$Parameter);
	
	return true;
    }

	public function SessionCookiePath($Parameter = '/var/'){

	    ini_set('session.cookie_path',$Parameter);
	    
	    return true;
	}

	public function SessionCookieDomain($Parameter = ''){

	    ini_set('session.cookie_domain',$Parameter);
	    
	    return true;
	}

	public function SessionSerializeHandler($Parameter = 'php'){

	    ini_set('session.serialize_handler',$Parameter);
	    
	    return true;
	}

	public function SessionGCProbability($Parameter = '1'){

	    ini_set('session.gc_probability',$Parameter);
	    
	    return true;
	}

	public function SessionGCMaxlifetime($Parameter = '1440'){

	    ini_set('session.co',$Parameter);
	    
	    return true;
	}

	
	session.save_handler = files
	
	;session.save_path = "/tmp"

			     session.use_strict_mode = 0

						       session.use_cookies = 1

									     ;session.cookie_secure =

										 session.use_only_cookies = 1

													    session.name = PHPSESSID

															   session.auto_start = 0
																		session.cookie_lifetime = 0
																					  session.cookie_path = /
																								session.cookie_domain =
																								    session.cookie_httponly =
																									session.serialize_handler = php
							    session.gc_probability = 1

																															     session.gc_divisor = 1000
																	  session.gc_maxlifetime = 1440


																																					   session.referer_check =

																																					       
																																					       session.cache_limiter = nocache
	
																																		       session.cache_expire = 180

																																				      session.use_trans_sid = 0

																																								
	session.sid_length = 26


session.trans_sid_tags = "a=href,area=href,frame=src,form="


	;session.trans_sid_hosts=""


				 session.sid_bits_per_character = 5


								  ;session.upload_progress.enabled = On

												     ;session.upload_progress.cleanup = On


																	;session.upload_progress.prefix = "upload_progress_"

														  ;session.upload_progress.name = "PHP_SESSION_UPLOAD_PROGRESS"


																									  ;session.upload_progress.freq =  "1%"

																													   ;session.upload_progress.min_freq = "1"
																											       ;session.lazy_write = On
}
