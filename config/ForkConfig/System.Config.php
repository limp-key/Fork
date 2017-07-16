<?php

namespace Fork\Config;

use \Fork\Bin\Config;

class System extends SkeletSystemConfig{

    public $precision = 14;
    
    public $output_buffering = 4096;


    #public $output_handler = '';

    #public $url_rewriter.tags = '';

    #public $url_rewriter.hosts = '';
    

    public $zlib_output_compression = 'Off';

    public $zlib_output_compression_level = -1;

    #public $zlib.output_handler = '';

    
    public $implicit_flush = 'Off';

    #public $unserialize_callback_func = '';
    
    public $serialize_precision = -1;

    #public $open_basedir = '';

    #public $disable_functions = array('pcntl_alarm','pcntl_fork','pcntl_waitpid','pcntl_wait','pcntl_wifexited','pcntl_wifstopped','pcntl_wifsignaled','pcntl_wifcontinued','pcntl_wexitstatus','pcntl_wtermsig','pcntl_wstopsig','pcntl_signal','pcntl_signal_get_handler','pcntl_signal_dispatch','pcntl_get_last_error','pcntl_strerror','pcntl_sigprocmask','pcntl_sigwaitinfo','pcntl_sigtimedwait','pcntl_exec','pcntl_getpriority','pcntl_setpriority','pcntl_async_signals');
    
    #public $disable_classes = '';

    #public $highlight_string  = '#DD0000';
    #public $highlight_comment = '#FF9900';
    #public $highlight_keyword = '#007700';
    #public $highlight_default = '#0000BB';
    #public $highlight_html    = '#000000';

    #public $ignore_user_abort = 'On';

    #public $realpath_cache_size = '4096k';

    #public $realpath_cache_ttl = 120;

    public $zend_enable_gc = 'On';

    #public $zend_multibyte = 'Off';

    #public $zend_script_encoding = '';

    public $expose_php = 'Off';

    public $max_execution_time = 30;


    public $max_input_time = 60;

    #public $max_input_nesting_level = 64;

    #public $ max_input_vars = 1000;

    public $memory_limit = '128M';


    public $error_reporting = 'E_ALL';

    public $display_errors = 'On';

    public $display_startup_errors = 'On';

    public $log_errors = 'On';


    public $log_errors_max_len = 1024;

    public $ignore_repeated_errors = 'Off';

    public $ignore_repeated_source = 'Off';

    public $report_memleaks = 'On';

    public $track_errors = 'On';

    #public $xmlrpc_errors = 0;

    #public $xmlrpc_error_number = 0;

    public $html_errors = 'On';

    #public $docref_root = "/phpmanual/"

    #public $docref_ext = '_html';

    #public $error_prepend_string = "<span style='color: $ff0000'>";

    #public $error_append_string = "</span>";

    #public $error_log = 'php_errors_log';

    #public $error_log = 'syslog';

    #public $arg_separator_output = "&amp;";

    #public $arg_separator_input = ";&";

    public $variables_order = "GPCS";

    public $request_order = "GP";

    public $register_argc_argv = 'Off';

    public $auto_globals_jit = 'On';

    #public $enable_post_data_reading = 'Off';

    public $post_max_size = '50M';

    public $auto_prepend_file = '';

    public $auto_append_file = '';
    
    public $default_mimetype = "text/html";

    public $default_charset = "UTF-8";

    #public $internal_encoding = '';

    #public $input_encoding = '';

    #public $output_encoding = '';

    #public $include_path = "_:/usr/share/php";

    public $doc_root = '';
    
    public $user_dir = '';

    #public $ extension_dir = "_/";
    
    #public $ sys_temp_dir = "/tmp";

    public $enable_dl = 'Off';

    #public $cgi_force_redirect = 1;

    #public $cgi_nph = 1;

    #public $cgi_redirect_status_env = '';

    #public $cgi_fix_pathinfo = 1;

    #public $cgi_discard_path = 1;

    #public $fastcgi_impersonate = 1;

    #public $fastcgi_logging = 0;

    #public $cgi_rfc2616_headers = 0;

    #public $cgi_check_shebang_line = 1;

    public $file_uploads = 'On';

    #public $upload_tmp_dir = '';

    public $upload_max_filesize = '50M';

    public $max_file_uploads = 20;

    public $allow_url_fopen = 'On';

    public $allow_url_include = 'Off';

    #public $from = "john@doe_com";

    #public $user_agent = "PHP";

    public $default_socket_timeout = 60;

    #public $auto_detect_line_endings = 'Off';

    public $cli_server_color = 'On';

    #public $date_timezone = '';

    #public $date_default_latitude = '31_7667';

    #public $date_default_longitude = '35_2333';

    #public $date_sunrise_zenith = '90_583333';

    #public $date_sunset_zenith = '90_583333';

    #public $filter_default = 'unsafe_raw';

    #public $filter_default_flags = '';

    #public $iconv_input_encoding = '';

    #public $iconv_internal_encoding = '';

    #public $iconv_output_encoding = '';

    #public $intl_default_locale = '';
    #public $intl_error_level = 'E_WARNING';
    #public $intl_use_exceptions = 0;

    #public $sqlite3_extension_dir = '';

    #public $pcre_backtrack_limit = 100000;

    #public $pcre_recursion_limit = 100000;

    #public $pcre_jit=1;

    #public $pdo_odbc_connection_pooling='strict';

    #public $pdo_odbc_db2_instance_name = '';

    public $pdo_mysql_cache_size = 2000;


    public $pdo_mysql_default_socket = '';

    #public $phar_readonly = 'On';
    
    #public $phar_require_hash = 'On';

    #public $phar_cache_list = '';
    

    public $SMTP = 'localhost';

    public $smtp_port = 25;

    #public $sendmail_path = '';

    #public $mail_force_extra_parameters = '';

    public $mail_add_x_header = 'On';

    #public $mail_log = '';

    #public $mail_log = 'syslog';

    public $sql_safe_mode = 'Off';

    #public $odbc_default_db    =  Not yet implemented

    #public $odbc_default_user  =  Not yet implemented

    #public $odbc_default_pw    =  Not yet implemented

    #public $odbc_default_cursortype = '';

    public $odbc_allow_persistent = 'On';

    public $odbc_check_persistent = 'On';

    public $odbc_max_persistent = -1;

    public $odbc_max_links = -1;

    public $odbc_defaultlrl = 4096;

    public $odbc_defaultbinmode = 1;

    #public $birdstep_max_links = -1;

    public $ibase_allow_persistent = 1;

    public $ibase_max_persistent = -1;

    public $ibase_max_links = -1;

    #public $ibase_default_db = '';

    #public $ibase_default_user = '';

    #public $ibase_default_password = '';

    #public $ibase_default_charset = '';

    public $ibase_timestampformat = "%Y-%m-%d %H:%M:%S";

    public $ibase_dateformat = "%Y-%m-%d";

    public $ibase_timeformat = "%H:%M:%S";

    public $mysqli_max_persistent = -1;

    #public $mysqli_allow_local_infile = 'On';

    public $mysqli_allow_persistent = 'On';

    public $mysqli_max_links = -1;

    public $mysqli_cache_size = 2000;

    public $mysqli_default_port = 3306;

    public $mysqli_default_socket = '';

    public $mysqli_default_host = '';

    public $mysqli_default_user = '';

    public $mysqli_default_pw = '';

    public $mysqli_reconnect = 'Off';

    public $mysqlnd_collect_statistics = 'On';

    public $mysqlnd_collect_memory_statistics = 'Off';

    #public $mysqlnd_debug = '';

    #public $mysqlnd_log_mask = 0;

    #public $mysqlnd_mempool_default_size = 16000;

    #public $mysqlnd_net_cmd_buffer_size = 2048;

    #public $mysqlnd_net_read_buffer_size = 32768;

    #public $mysqlnd_net_read_timeout = 31536000;

    #public $mysqlnd_sha256_server_public_key = '';

    #public $oci8_privileged_connect = 'Off';

    #public $oci8_max_persistent = -1;

    #public $oci8_persistent_timeout = -1;

    #public $oci8_ping_interval = 60;

    #public $oci8_connection_class = '';

    #public $oci8_events = 'Off';

    #public $oci8_statement_cache_size = 20;

    #public $oci8_default_prefetch = 100;

    #public $oci8_old_oci_close_semantics = 'Off';

    public $pgsql_allow_persistent = 'On';

    public $pgsql_auto_reset_persistent = 'Off';

    public $pgsql_max_persistent = -1;

    public $pgsql_max_links = -1;

    public $pgsql_ignore_notice = 0;

    public $pgsql_log_notice = 0;

    public $bcmath_scale = 0;

    public $session_save_handler = files;

    #public $session_save_path = "/var/lib/php/sessions";

    public $session_use_strict_mode = 0;

    public $session_use_cookies = 1;

    #public $session_cookie_secure = '';

    public $session_use_only_cookies = 1;

    public $session_name = 'PHPSESSID';

    public $session_auto_start = 0;

    public $session_cookie_lifetime = 0;

    public $session_cookie_path = '/';

    public $session_cookie_domain = '';
    
    public $session_cookie_httponly = '';
    
    public $session_serialize_handler = 'php';

    public $session_gc_probability = 0;

    public $session_gc_divisor = 1000;

    public $session_gc_maxlifetime = 2592000;

    public $session_referer_check = '';

    public $session_cache_limiter = 'nocache';

    public $session_cache_expire = 180;

    public $session_use_trans_sid = 0;

    public $session_sid_length = 26;

    public $session_trans_sid_tags = "a=href,area=href,frame=src,form=";

    #public $session_trans_sid_hosts = '';

    public $session_sid_bits_per_character = 5;

    #public $session_upload_progress_enabled = 'On';

    #public $session_upload_progress_cleanup = 'On';

    #public $session_upload_progress_prefix = "upload_progress_";

    #public $session_upload_progress_name = "PHP_SESSION_UPLOAD_PROGRESS";

    #public $session_upload_progress_freq =  "1%";

    #public $session_upload_progress_min_freq = "1";

    #public $session_lazy_write = 'On';

    public $zend_assertions = -1;

    #public $assert_active = 'On';

    #public $assert_exception = 'On';

    #public $assert_warning = 'On';

    #public $assert_bail = 'Off';

    #public $assert_callback = 0;

    #public $assert_quiet_eval = 0;

    #public $mbstring_language = Japanese;

    #public $mbstring_internal_encoding = '';

    #public $mbstring_http_input = '';

    #public $mbstring_http_output = '';

    #public $mbstring_encoding_translation = 'Off'

    #public $mbstring_detect_order = 'auto';

    #public $mbstring_substitute_character = 'none';

    #public $mbstring_func_overload = 0;

    #public $mbstring_strict_detection = 'On';

    #public $mbstring_http_output_conv_mimetype= '';

    #public $tidy_default_config = '/usr/local/lib/php/default_tcfg';

    public $tidy_clean_output = 'Off';

    public $soap_wsdl_cache_enabled = 1;

    public $soap_wsdl_cache_dir = "/tmp";

    public $soap_wsdl_cache_ttl = 86400;

    public $soap_wsdl_cache_limit = 5;

    #public $sysvshm_init_mem = 10000;

    public $ldap_max_links = -1;

    #public $mcrypt_algorithms_dir= '';

    #public $mcrypt_modes_dir= '';

    #public $opcache_enable=1;

    #public $opcache_enable_cli=1;

    #public $opcache_memory_consumption=128;

    #public $opcache_interned_strings_buffer=8;

    #public $opcache_max_accelerated_files=10000;

    #public $opcache_max_wasted_percentage=5;

    #public $opcache_use_cwd=1;

    #public $opcache_validate_timestamps=1;

    #public $opcache_revalidate_freq=2;

    #public $opcache_revalidate_path=0;

    #public $opcache_save_comments=1;

    #public $opcache_fast_shutdown=0;

    #public $opcache_enable_file_override=0;

    #public $opcache_optimization_level='0xffffffff';

    #public $opcache_inherited_hack=1;

    #public $opcache_dups_fix=0;

    #public $opcache_blacklist_filename='';

    #public $opcache_max_file_size=0;

    #public $opcache_consistency_checks=0;

    #public $opcache_force_restart_timeout=180;

    #public $opcache_error_log= '';

    #public $opcache_log_verbosity_level=1;

    #public $opcache_preferred_memory_model= '';

    #public $opcache_protect_memory=0;

    #public $opcache_restrict_api= '';

    #public $opcache_mmap_base= '';

    #public $opcache_file_cache= '';

    #public $opcache_file_cache_only=0;

    #public $opcache_file_cache_consistency_checks=1;

    #public $opcache_file_cache_fallback=1;

    #public $opcache_huge_code_pages=1;

    #public $opcache_validate_permission=0;

    #public $opcache_validate_root=0;
}
