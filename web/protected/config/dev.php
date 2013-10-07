<?php

return CMap::mergeArray(
	require '/main.php',
	array(
		'components'=>array(
			'urlManager'=>array(
				'rules'=>array(
					'gii' => 'gii',
					'gii/<controller:\w+>' => 'gii/<controller>',
					'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
				),
			),
			'log'=>array(
				'class'=>'CLogRouter',
				'routes'=>array(
					array(
						'class' => 'CProfileLogRoute',
						'report' => 'summary',
					),
					array(
						'class'=>'CWebLogRoute',
					),
				),
			),
		),
		'modules'=>array(
			'gii'=>array(
				'class' => 'system.gii.GiiModule',
				'password' => 'root',
				'ipFilters'=>array('127.0.0.1','::1'),
				'generatorPaths' => array(
					'application.gii'
				),
			),
		),
		
	)
);