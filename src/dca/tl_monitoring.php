<?php

/* PHP version 5
 * @copyright  inszenium 2018
 * @author     Kirsten Roschanski
 * @package    MonitoringContaoManager
 * @license    LGPL
 * @filesource 
 */

// Palettes 
$GLOBALS['TL_DCA']['tl_monitoring']['palettes']['default'] = str_replace
(
    '{test_legend}',
    '{manager_legend:hide},managerURL;{test_legend}',
    $GLOBALS['TL_DCA']['tl_monitoring']['palettes']['default']
);


// Fields 
$GLOBALS['TL_DCA']['tl_monitoring']['fields']['managerURL'] = array
(
		'label'                 => &$GLOBALS['TL_LANG']['tl_monitoring']['managerURL'],
		'exclude'               => true,
		'inputType'             => 'text',
        'flag'                  => 6,
		'eval'                  => array('maxlength'=>128, 'rgxp'=>'url', 'tl_class'=>'w50'),
		'sql'                   => "varchar(128) NOT NULL default ''",
);


/*
 * Show managerURL id
 */
$GLOBALS['TL_DCA']['tl_monitoring']['list']['label']['fields'][] = 'managerURL';
