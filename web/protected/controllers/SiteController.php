<?php

class SiteController extends CController
{
	public function actionIndex()
	{
		try{
			$this->render('index', array('model' => new Main));
		} catch(Exception $e){
			Yii::log($e->getMessage());
			throw new CHttpException(500, YII_DEBUG ? $e->getMessage() : 'Fatal error');
		}
	}

  public function actionPatients(){
    if(isset($_GET[patId])){
      $patient = Patients::model()->findByAttributes([
        'id' => $_GET['patId']
      ]);
      if(!$patient) $this->redirect(Yii::app()->controller->createUrl("Patients"));
      $patient->setAttributes($_POST['Patients'], false);
      $patient->save();
    }elseif(isset($_POST['Patients'])){
      unset($_POST['Patients']["id"]);
      $patient = new Patients();
      $patient->setAttributes($_POST['Patients'], false);
      $patient->save();
      //CVarDumper::dump($patient->id);
      $this->redirect(Yii::app()->controller->createUrl("Patients", array("patId" => $patient->id)));
    }else{
      $patient = new Patients();
      $patient->first_name = "Введите имя";
    }
    $this->render('patients', array('model' => $patient));
  }
}