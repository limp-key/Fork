<?php

namespace Embranchment\Config;

use \Embranchment\Config\ParsingProjectConfig;
use \Embranchment\Config\CollectionConfig;

class CollectionConfig {

    /*
     * Start collection configs in project.config.json
     */
    public static function Start() {

	CollectionConfig::ProjectState();
	
	CollectionConfig::Debug();
	
	CollectionConfig::TimeZone();
    }

    /*
     * Show(Hide) fork errors or show 'Project building' template
     */
    public static function ProjectState() {

	$State = ParsingProjectConfig::Show('Project State');
	
	if ($State == 'Build') {

	    $Template = ParsingProjectConfig::Show('Build Template');
	    
	    include __DIR__.'/../../../../../../pantry/'.$Template;

	    exit;
	}
	
    }

    /*
     * Show(Hide) php errors
     */
    public static function Debug() {

	$Debug = ParsingProjectConfig::Show('Debug');
	
	error_reporting(E_ALL);
	
	ini_set('error_prepend_string','<span style="font-size:18px;color:#010019;font-family:Helvetica;opacity:0.8;">');
	ini_set('error_append_string', '</span>');
	
	ini_set('display_errors', $Debug);
    }
    
    /*
     * Changes default time zone to specified in project.conf.json file
     */
    public static function TimeZone() {

	$TimeZone = ParsingProjectConfig::Show('Time Zone');

	ini_set('date.timezone', $TimeZone);
    }
}
