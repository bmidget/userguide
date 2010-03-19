<?php defined('SYSPATH') or die('No direct script access.');

// Static file serving (CSS, JS, images)
Route::set('docs/media', 'media(/<file>)', array('file' => '.+'))
	->defaults(array(
		'controller' => 'userguide',
		'action'     => 'media',
		'file'       => NULL,
	));

// API Browser
Route::set('docs/api', 'api(/<class>)', array('class' => '[a-zA-Z0-9_]+'))
	->defaults(array(
		'controller' => 'userguide',
		'action'     => 'api',
		'class'      => NULL,
	));

// Translated user guide
Route::set('docs/guide', '(<module>(/<page>))', array(
		'page' => '.+',
	))
	->defaults(array(
		'controller' => 'userguide',
		'action'     => 'docs',
		'module'     => null,
	));