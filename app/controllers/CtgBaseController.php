<?php

class CtgBaseController extends \BaseController {

	public function __construct()
    {
		Blade::setContentTags('<%', '%>');            // for variables and all things Blade
		Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data
    }

}