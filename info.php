<?php

/**
 *  @module      	Metro UI
 *  @version        see info.php of this module
 *  @author         cms-lab, metro ui by Sergey Pimenov
 *  @copyright      2018-2018 CMS-LAB
 *  @license        http://opensource.org/licenses/MIT
 *  @license terms  see info.php of this addon
 *  @platform       see info.php of this addon
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {	
	include(LEPTON_PATH.'/framework/class.secure.php'); 
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php



$module_directory = 'lib_metro';
$module_name      = 'Metro Library';
$module_function  = 'library';
$module_version   = '4.1.5.0';
$module_platform  = '4.x';
$module_delete	  =  true;
$module_author    = 'cms-lab';
$module_license   = 'http://opensource.org/licenses/MIT';
$module_license_terms   = '-';
$module_description = '<a href="https://metroui.org.ua" target="_blank">Metro UI</a>: Metro 4 is an open source toolkit for developing with HTML, CSS, and JS.';
$module_guid      = 'e520cf74-182b-4b9f-bc90-a4c5c56a1760';
$module_home      = 'http://www.cms-lab.com';

?>