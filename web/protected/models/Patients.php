<?php

/**
 * Class Patients
 */
class Patients extends CActiveRecord
{
  public static function model($className=__CLASS__)
  {
    return parent::model($className);
  }

  public function tableName()
  {
    return 'patients';
  }

  public function rules()
  {
    return [
      ['first_name, middle_name, last_name', 'required']
    ];
  }
}

/*<?php
/**
 * This is the model class for table "delivery_pek_codes".
 *
 * The followings are the available columns in table 'delivery_pek_codes':
 * @property integer $id
 * @property string $cargo_code
 * @property string $barcode
 * /
class Patients extends CFormModel
{
}*/