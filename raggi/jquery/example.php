<?php

	require_once 'RJQueryHandler.php';
	require_once 'RJQuery.php';
	require_once 'TestHandler.php';

	$jQuery = new RJQuery();

	$handlerClick = array('TestHandler', 'handle');
	$handlerBlur = array('TestHandler', 'blur');
	$handlerSubmit = array('TestHandler', 'submit');

	$jQuery
		->wrap('form')
		->addHandler('click', $handlerClick, 'live')
		->addHandler('blur',  $handlerBlur);
	$jQuery->submit = array('TestHandler', 'submit');

	$script = $jQuery->getScript();

	echo $script;



