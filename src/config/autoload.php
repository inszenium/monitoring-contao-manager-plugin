<?php

/* PHP version 5
 * @copyright  inszenium 2018
 * @author     Kirsten Roschanski
 * @package    MonitoringContaoManager
 * @license    LGPL
 * @filesource 
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'inszenium\MonitoringContaoManager',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'inszenium\MonitoringContaoManager\Hooks' => 'system/modules/MonitoringContaoManager/classes/MonitoringContaoManager/Hooks.php',
));
