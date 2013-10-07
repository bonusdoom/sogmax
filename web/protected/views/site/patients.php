<div class="form">
  <?php $form=$this->beginWidget('CActiveForm'); ?>

  <?php echo $form->errorSummary($model); ?>

  <div class="row">
    <?php echo $form->hiddenField($model,'id'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'first_name'); ?>
    <?php echo $form->textField($model,'first_name') ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'middle_name'); ?>
    <?php echo $form->textField($model,'middle_name') ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'last_name'); ?>
    <?php echo $form->textField($model,'last_name'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'birth_date'); ?>
    <?php echo $form->dateField($model,'birth_date'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'sex'); ?>
    <?php echo $form->textField($model,'sex'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'phone'); ?>
    <?php echo $form->textField($model,'phone'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'index'); ?>
    <?php echo $form->textField($model,'index'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'city'); ?>
    <?php echo $form->textField($model,'city'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'street'); ?>
    <?php echo $form->textField($model,'street'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'house'); ?>
    <?php echo $form->textField($model,'house'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'pasport_num'); ?>
    <?php echo $form->textField($model,'pasport_num'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'police_num'); ?>
    <?php echo $form->textField($model,'police_num'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'card_num'); ?>
    <?php echo $form->textField($model,'card_num'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'work_place'); ?>
    <?php echo $form->textField($model,'work_place'); ?>
  </div>

  <div class="row submit">
    <?php echo CHtml::submitButton('Сохранить'); ?>
  </div>

  <?php $this->endWidget(); ?>
</div>