<?php
/**
 * Pump Tools for multiple applications
 */
Autoloader::add_core_namespace('Extend');

Autoloader::add_classes(array(
	//Models
	'Pump\\Model\\Model_JobSchedule' 	   			=> __DIR__.'/classes/model/jobschedule.php',
	'Pump\\Model\\Model_JobScheduleStatus' 			=> __DIR__.'/classes/model/jobschedulestatus.php',
	
	//Tasks
	'Pump\\Tasks\\Base' 	 	        			=> __DIR__.'/tasks/base.php',
	'Pump\\Tasks\\Job' 			 					=> __DIR__.'/tasks/job.php',
	'Pump\\Tasks\\Test' 			 				=> __DIR__.'/tasks/test.php',

	//Exceptions
	'Pump\\Tasks\\Scan_Exception' 			 		=> __DIR__.'/tasks/job.php',
));


/* End of file bootstrap.php */