#Job Scheduler


This is my Job Scheduler package.
It allows you to schedule tasks to be copleted systematically via a cron job.


##Add Package:

	git submodule add git@github.com:andymrussell/fuel-job.git fuel/packages/job


##Basic Usage:
* Add job to the list of packages to load in the config
* Create the file "/fuel/tasks/job.php" and extend the \Job\Task\Job class.

	<?php
	namespace Fuel\Tasks;
	class Job extends \Job\Tasks\Job{}


_________________


##To create a new job:
	oil r job:create "Job\Tasks\Test"

where "job\Tasks\Test" is the path to the class you are scheduling

##To scan for jobs - Schedule this to run via your cron:
	oil r job:scan

