precision = 14

output_buffering = 4096


;output_handler =

;url_rewriter.tags

;url_rewriter.hosts

zlib.output_compression = Off

;zlib.output_compression_level = -1

;zlib.output_handler =

implicit_flush = Off

unserialize_callback_func =

serialize_precision = -1

;open_basedir =

disable_functions = pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_get_handler,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,pcntl_async_signals,

disable_classes =

;highlight.string  = #DD0000
;highlight.comment = #FF9900
;highlight.keyword = #007700
;highlight.default = #0000BB
;highlight.html    = #000000

;ignore_user_abort = On

;realpath_cache_size = 4096k

;realpath_cache_ttl = 120

zend.enable_gc = On

;zend.multibyte = Off

;zend.script_encoding =

expose_php = Off

max_execution_time = 30


max_input_time = 60

;max_input_nesting_level = 64

; max_input_vars = 1000

memory_limit = 128M


error_reporting = E_ALL

display_errors = On

display_startup_errors = On

log_errors = On


log_errors_max_len = 1024

ignore_repeated_errors = Off

ignore_repeated_source = Off

report_memleaks = On

track_errors = On

;xmlrpc_errors = 0

;xmlrpc_error_number = 0

html_errors = On


;docref_root = "/phpmanual/"

;docref_ext = .html

;error_prepend_string = "<span style='color: #ff0000'>"

;error_append_string = "</span>"

;error_log = php_errors.log

;error_log = syslog

;arg_separator.output = "&amp;"

;arg_separator.input = ";&"

variables_order = "GPCS"

request_order = "GP"

register_argc_argv = Off

auto_globals_jit = On

;enable_post_data_reading = Off

post_max_size = 50M

auto_prepend_file =

auto_append_file =

default_mimetype = "text/html"

default_charset = "UTF-8"

;internal_encoding =

;input_encoding =

;output_encoding =

;include_path = ".:/usr/share/php"

doc_root =

user_dir =

; extension_dir = "./"


; sys_temp_dir = "/tmp"

enable_dl = Off


;cgi.force_redirect = 1

;cgi.nph = 1

;cgi.redirect_status_env =

;cgi.fix_pathinfo=1

;cgi.discard_path=1

;fastcgi.impersonate = 1

;fastcgi.logging = 0

;cgi.rfc2616_headers = 0

;cgi.check_shebang_line=1

file_uploads = On

;upload_tmp_dir =


upload_max_filesize = 50M

max_file_uploads = 20

allow_url_fopen = On


allow_url_include = Off


;from="john@doe.com"

;user_agent="PHP"


default_socket_timeout = 60


;auto_detect_line_endings = Off



;extension=php_bz2.dll
;extension=php_curl.dll
;extension=php_fileinfo.dll
;extension=php_ftp.dll
;extension=php_gd2.dll
;extension=php_gettext.dll
;extension=php_gmp.dll
;extension=php_intl.dll
;extension=php_imap.dll
;extension=php_interbase.dll
;extension=php_ldap.dll
;extension=php_mbstring.dll
;extension=php_exif.dll      ; Must be after mbstring as it depends on it
;extension=php_mysqli.dll
;extension=php_oci8_12c.dll  ; Use with Oracle Database 12c Instant Client
;extension=php_openssl.dll
;extension=php_pdo_firebird.dll
;extension=php_pdo_mysql.dll
;extension=php_pdo_oci.dll
;extension=php_pdo_odbc.dll
;extension=php_pdo_pgsql.dll
;extension=php_pdo_sqlite.dll
;extension=php_pgsql.dll
;extension=php_shmop.dll

;extension=php_snmp.dll

;extension=php_soap.dll
;extension=php_sockets.dll
;extension=php_sqlite3.dll
;extension=php_tidy.dll
;extension=php_xmlrpc.dll
;extension=php_xsl.dll


cli_server.color = On


;date.timezone =

;date.default_latitude = 31.7667

;date.default_longitude = 35.2333

;date.sunrise_zenith = 90.583333

;date.sunset_zenith = 90.583333

;filter.default = unsafe_raw

;filter.default_flags =


;iconv.input_encoding =


;iconv.internal_encoding =


;iconv.output_encoding =

;intl.default_locale =
;intl.error_level = E_WARNING
;intl.use_exceptions = 0

;sqlite3.extension_dir =


;pcre.backtrack_limit=100000


;pcre.recursion_limit=100000


;pcre.jit=1


;pdo_odbc.connection_pooling=strict

;pdo_odbc.db2_instance_name

pdo_mysql.cache_size = 2000


pdo_mysql.default_socket=

;phar.readonly = On

;phar.require_hash = On

;phar.cache_list =


SMTP = localhost

smtp_port = 25

;sendmail_path =

;mail.force_extra_parameters =

mail.add_x_header = On

;mail.log =

;mail.log = syslog

sql.safe_mode = Off


;odbc.default_db    =  Not yet implemented

;odbc.default_user  =  Not yet implemented

;odbc.default_pw    =  Not yet implemented

;odbc.default_cursortype

odbc.allow_persistent = On

odbc.check_persistent = On

odbc.max_persistent = -1

odbc.max_links = -1


odbc.defaultlrl = 4096

odbc.defaultbinmode = 1

;birdstep.max_links = -1


ibase.allow_persistent = 1

ibase.max_persistent = -1

ibase.max_links = -1

;ibase.default_db =

;ibase.default_user =

;ibase.default_password =

;ibase.default_charset =

ibase.timestampformat = "%Y-%m-%d %H:%M:%S"

ibase.dateformat = "%Y-%m-%d"

ibase.timeformat = "%H:%M:%S"

mysqli.max_persistent = -1

;mysqli.allow_local_infile = On

mysqli.allow_persistent = On

mysqli.max_links = -1

mysqli.cache_size = 2000

mysqli.default_port = 3306

mysqli.default_socket =

mysqli.default_host =

mysqli.default_user =

mysqli.default_pw =

mysqli.reconnect = Off

mysqlnd.collect_statistics = On

mysqlnd.collect_memory_statistics = Off

;mysqlnd.debug =

;mysqlnd.log_mask = 0

;mysqlnd.mempool_default_size = 16000

;mysqlnd.net_cmd_buffer_size = 2048

;mysqlnd.net_read_buffer_size = 32768

;mysqlnd.net_read_timeout = 31536000

;mysqlnd.sha256_server_public_key =

;oci8.privileged_connect = Off

;oci8.max_persistent = -1

;oci8.persistent_timeout = -1

;oci8.ping_interval = 60

;oci8.connection_class =

;oci8.events = Off

;oci8.statement_cache_size = 20

;oci8.default_prefetch = 100

;oci8.old_oci_close_semantics = Off

pgsql.allow_persistent = On

pgsql.auto_reset_persistent = Off

pgsql.max_persistent = -1

pgsql.max_links = -1

pgsql.ignore_notice = 0

pgsql.log_notice = 0

bcmath.scale = 0

session.save_handler = files

;session.save_path = "/var/lib/php/sessions"

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

session.gc_probability = 0

session.gc_divisor = 1000

session.gc_maxlifetime = 2592000

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

zend.assertions = -1

;assert.active = On

;assert.exception = On

;assert.warning = On

;assert.bail = Off

;assert.callback = 0

;assert.quiet_eval = 0

;mbstring.language = Japanese

;mbstring.internal_encoding =

;mbstring.http_input =

;mbstring.http_output =

;mbstring.encoding_translation = Off

;mbstring.detect_order = auto

;mbstring.substitute_character = none

;mbstring.func_overload = 0

;mbstring.strict_detection = On

;mbstring.http_output_conv_mimetype=

;tidy.default_config = /usr/local/lib/php/default.tcfg

tidy.clean_output = Off

soap.wsdl_cache_enabled=1

soap.wsdl_cache_dir="/tmp"

soap.wsdl_cache_ttl=86400

soap.wsdl_cache_limit = 5

;sysvshm.init_mem = 10000

ldap.max_links = -1

;mcrypt.algorithms_dir=

;mcrypt.modes_dir=

;opcache.enable=1

;opcache.enable_cli=1

;opcache.memory_consumption=128

;opcache.interned_strings_buffer=8

;opcache.max_accelerated_files=10000

;opcache.max_wasted_percentage=5

;opcache.use_cwd=1

;opcache.validate_timestamps=1

;opcache.revalidate_freq=2

;opcache.revalidate_path=0

;opcache.save_comments=1

;opcache.fast_shutdown=0

;opcache.enable_file_override=0

;opcache.optimization_level=0xffffffff

;opcache.inherited_hack=1

;opcache.dups_fix=0

;opcache.blacklist_filename=

;opcache.max_file_size=0

;opcache.consistency_checks=0

;opcache.force_restart_timeout=180

;opcache.error_log=

;opcache.log_verbosity_level=1

;opcache.preferred_memory_model=

;opcache.protect_memory=0

;opcache.restrict_api=

;opcache.mmap_base=

;opcache.file_cache=

;opcache.file_cache_only=0

;opcache.file_cache_consistency_checks=1

;opcache.file_cache_fallback=1

;opcache.huge_code_pages=1

;opcache.validate_permission=0

;opcache.validate_root=0