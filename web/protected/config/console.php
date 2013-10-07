<?php

require_once 'custom.php';
return array(
	'basePath' => dirname(__FILE__).DS.'..',
	'name' => 'beambe',

	'import'=>array(
		'application.vendors.Twig.*',
		'application.models.*',
		'application.components.*',
	),
	
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
	),
	
	'commandMap'=>array(
        'migrate'=>array(
			'class'=>'system.cli.commands.MigrateCommand',
            'migrationTable'=>'{{migration}}',
        ),
    ),

	//параметры: Yii::app()->params['paramName']
	'params'=>require 'params.php',
);