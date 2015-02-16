<?php

	/*
	* System Static Texts
	*/ 
    define('CTG','Crowd To Go');
    define('ROOT','/');


    /*
	* System Conditional Values - No Magic Numbers!
	*/ 
	define('RECORD_IS_NOT_EXISTING',0);
	define('MIN_FIRST_NAME',2);
	define('MIN_LAST_NAME',2);

    /*
	* System RegExp Pattern
	*/ 
	define('NAME_PATTERN',"/^(?P<salutation>(Mr|MR|Ms|Miss|Mrs|Dr|Sir|Ma)(\.?))?\s*((?<first>[A-Za-z\-]*?) )?((?<second>[A-Za-z\-]*?) )?((?<third>[A-Za-z\-]*?) )?(?(?!(PHD|MD|3RD|2ND|RN|JR|II|SR|III))(?<last>([A-Za-z](([a-zA-Z\-\']{1,2})[A-Za-z\-\'])?[a-zA-Z\-\']+)))( (?P<suffix>(PHD|MD|3RD|2ND|RN|JR|II|SR|III)))?$/i");

?>