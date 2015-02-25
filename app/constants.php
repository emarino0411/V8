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
	define('MAX_FIRST_NAME',40);
	define('MIN_LAST_NAME',2);
	define('MAX_LAST_NAME',40);
	define('MAX_BIRTH_DATE',date('m-d').'-'.(date('Y')-18));
	define('MIN_PASSWORD',6);
	define('MIN_STREET',1);
	define('MAX_STREET',50);

    /*
	* System RegExp Pattern
	*/ 
	define('NAME_PATTERN',"/^((?:[A-Z](?:('|(?:[a-z]{1,3}))[A-Z])?[a-z]+)|(?:[A-Z]\.))(?:([ -])((?:[A-Z](?:('|(?:[a-z]{1,3}))[A-Z])?[a-z]+)|(?:[A-Z]\.)))?$/");
	define('STREET_PATTERN',"/^(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})$/");
	/*
	* System Special Characters
	*/
	define('NBSP',"&nbsp;");
?>