<?php

namespace Fork\Bin\Config;

class Config{    
    
    // Parameter for framework

    public $ProjectPath = '/path/to/project';

    public $URL = 'http://localhost';

    public $TypeKey = '256';

    public $Key = 'key';

    public $TypeProject = 'production';

    public $Debug = 'false';

    // Time zone UTC+2
    
    public $TimeZone = 'UTC+2';

    public $Locale = 'EN';

    public $Modules = array(
	'Bin' => [
	    'Assembly'
	]
    );

    public function __construct(){
	
	$this->Precision($this->precision);	
	$this->OutputBuffering($this->output_buffering);
	#$this->$output_handler =
	#$this->$url_rewriter.tags =
	#$this->$url_rewriter.hosts =
	$this->$zlib_output_compression = 'Off';
	$this->$zlib_output_compression_level = -1;
	#$this->$zlib.output_handler =	
	$this->$implicit_flush = 'Off';
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
	$this->$memory_limit = 128M;
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
	#$this->$opcache_enable=1
	#$this->$opcache_enable_cli=1
	#$this->$opcache_memory_consumption=128
	#$this->$opcache_interned_strings_buffer=8
	#$this->$opcache_max_accelerated_files=10000
	#$this->$opcache_max_wasted_percentage=5
	#$this->$opcache_use_cwd=1
	#$this->$opcache_validate_timestamps=1
	#$this->$opcache_revalidate_freq=2
	#$this->$opcache_revalidate_path=0
	#$this->$opcache_save_comments=1
	#$this->$opcache_fast_shutdown=0
	#$this->$opcache_enable_file_override=0
	#$this->$opcache_optimization_level=0xffffffff
	#$this->$opcache_inherited_hack=1
	#$this->$opcache_dups_fix=0
	#$this->$opcache_blacklist_filename=
	#$this->$opcache_max_file_size=0
	#$this->$opcache_consistency_checks=0
	#$this->$opcache_force_restart_timeout=180
	#$this->$opcache_error_log=
	#$this->$opcache_log_verbosity_level=1
	#$this->$opcache_preferred_memory_model=
	#$this->$opcache_protect_memory=0
	#$this->$opcache_restrict_api=
	#$this->$opcache_mmap_base=
	#$this->$opcache_file_cache=
	#$this->$opcache_file_cache_only=0
	#$this->$opcache_file_cache_consistency_checks=1
	#$this->$opcache_file_cache_fallback=1
	#$this->$opcache_huge_code_pages=1
	#$this->$opcache_validate_permission=0
	#$this->$opcache_validate_root=0
    }
    
    public function Config(){
	
    }

    public function System(){
	
    }
    
    
}
