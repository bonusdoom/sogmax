<?php

class m130410_190640_patients extends CDbMigration
{
	public function up()
	{
		$this->createTable('patients', array(
			'id' => 'pk',
			'sender_id' => 'int(11)',
			'first_name' => 'string NOT NULL',
			'middle_name' => 'string NOT NULL',
			'last_name' => 'string NOT NULL',
			'birth_date' => 'datetime NOT NULL',
			'sex' => 'varchar(1) NOT NULL',
			'phone' => 'string NOT NULL',
			'index' => 'string NOT NULL',
			'city' => 'string NOT NULL',
			'street' => 'string NOT NULL',
			'house' => 'string NOT NULL',
			'pasport_num' => 'string NOT NULL',
			'police_num' => 'string NOT NULL',
			'card_num' => 'string NOT NULL',
			'work_place' => 'string NOT NULL'
		));
	}

	public function down()
	{
		$this->dropTable('patients');
	}
}