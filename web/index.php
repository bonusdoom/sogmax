<?php

require_once dirname(__FILE__).'/protected/config/custom.php';
require_once dirname(__FILE__).'/../framework/yii.php';

if(YII_DEBUG) Yii::beginProfile('application');

$cfgMain = dirname(__FILE__).'/protected/config/'.C_ENV.'.php';
Yii::createWebApplication($cfgMain)->run();

if(YII_DEBUG) Yii::endProfile('application');