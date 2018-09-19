<?php

/* PHP version 5
 * @copyright  inszenium 2018
 * @author     Kirsten Roschanski
 * @package    MonitoringContaoManager
 * @license    LGPL
 * @filesource 
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace inszenium\MonitoringContaoManager;


/* Class Hooks
 *
 * Implementation of hooks.
 * @copyright  inszenium 2018
 * @author     Kirsten Roschanski
 * @package    MonitoringContaoManager
 */
class Hooks extends \Backend {
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}


	/**
	 * Modify the header
	 * @param  $arrHeaderFields  the headerfields given from list->sorting
	 * @param  DataContainer $dc a DataContainer Object
	 * @return Array The manipulated headerfields
	 */
	public function monitoringFormatList($arrRow, \DataContainer $dc, $arrFormatedColumns) {		 
	    $intUnfinishedTasksIndex = array_search("managerURL", $GLOBALS['TL_DCA']['tl_monitoring']['list']['label']['fields']);
	    
	    if ($intUnfinishedTasksIndex !== FALSE) {
	        if ($arrRow['managerURL'] != '' ) {
	            $arrFormatedColumns[$intUnfinishedTasksIndex] = '
	            <a href="'.$arrRow['managerURL'].'" target="_blank" title="ContaoManager">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-272 399 49.9 44.1">
					    <path d="M-268.723 399.17c-1.875 0-3.25 1.5-3.25 3.25v37.25c0 1.874 1.5 3.25 3.25 3.25h7.75c-4.125-4.5-5.25-10.75-6.625-17.25-1.75-8-3.5-15.5.875-22.376 1-1.625 2.25-3 3.625-4.25l-5.624.125zm34.625 0c2.125 2.124 3.875 4.874 5.125 8.25l-13.375 2.874c-1.5-2.875-3.75-5.25-8-4.25-2.375.5-4 1.875-4.75 3.375-.875 1.873-1.25 3.873.75 13.623 2.125 9.75 3.25 11.5 4.875 12.875 1.25 1.124 3.25 1.624 5.625 1.124 4.375-.875 5.5-4 5.625-7.125l13.375-2.876c.375 7-1.875 12.376-5.625 16.126h5.125c1.875 0 3.25-1.5 3.25-3.25v-37.25c0-1.876-1.5-3.25-3.25-3.25l-8.75-.25z" fill="#f47c00"></path>
					</svg>
	            </a>
	            ';
	        }	        
	    }

		return $arrFormatedColumns;
	}	
	
}
