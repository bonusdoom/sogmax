<?php echo '<?php'; ?>

class <?php echo $this->_migrateName; ?> extends CDbMigration
{
	public function up()
	{
		$this->execute("<?php echo $this->code; ?>");
		
	}

	public function down()
	{
		echo "<?php echo $this->_migrateName; ?> does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
