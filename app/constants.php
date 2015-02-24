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

    /*
	* System RegExp Pattern
	*/ 
	define('NAME_PATTERN',"/^[a-zA-Z]+((\s|\-)[a-zA-Z]+ \')?$/");

	/*
	* System Special Characters
	*/
	define('NBSP',"&nbsp;");
?>