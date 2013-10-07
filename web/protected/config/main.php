<?php

return array(
	'basePath' => dirname(__FILE__).DS.'..',
	'name' => 'skyres',
	'language' => 'ru_ru',
	
	'import'=>array(
		'application.vendors.Twig.*',
		'application.models.*',
		'application.components.*',
	),
	
	'preload' => array('log'),

	//компоненты
	'components' => array(
		'db' => array(
			'class' => 'CDbConnection',
			'connectionString' => 'mysql:host='.C_DB_HOST.';dbname='.C_DB_NAME,
			'username' => C_DB_USER,
			'password' => C_DB_PASS,
			'emulatePrepare' => true,
			'tablePrefix' => C_DB_PRFX,

			'schemaCachingDuration' => 180,

			'enableProfiling' => YII_DEBUG,
			'enableParamLogging' => YII_DEBUG,
		),
		
		'urlManager'=>array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => require 'routes.php',
		),
		
		'viewRenderer' => array(
			'class' => 'ext.ETwigViewRenderer',
			'filters' => array(
				'json' => 'CJSON::encode',
				't' => function($message, $category = 'app', $options = array()){
					return Yii::t($category, $message, $options);
				}
			),
			'functions' => array(
				'_' => function($route) { 
					return Yii::app()->urlManager->createUrl($route);
				}
			)
		),
	),
	
	//параметры: Yii::app()->params['paramName']
	'params'=>require 'params.php',
);