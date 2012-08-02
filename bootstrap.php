<?php
/**
 * Job Scheduler
 */

Autoloader::add_classes(array(
	//Models
	'Job\\Model\\Model_JobSchedule' 	   			=> __DIR__.'/classes/model/jobschedule.php',
	'Job\\Model\\Model_JobScheduleStatus' 			=> __DIR__.'/classes/model/jobschedulestatus.php',
	
	//Tasks
	'Job\\Tasks\\Base' 	 	        			=> __DIR__.'/tasks/base.php',
	'Job\\Tasks\\Job' 			 					=> __DIR__.'/tasks/job.php',
	'Job\\Tasks\\Test' 			 				=> __DIR__.'/tasks/test.php',

	//Exceptions
	'Job\\Tasks\\Scan_Exception' 			 		=> __DIR__.'/tasks/job.php',
));


/* End of file bootstrap.php */