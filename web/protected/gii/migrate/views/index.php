<h1>Migration generator</h1>
 
<?php $form=$this->beginWidget('CCodeForm', array('model'=>$model)); ?>
	<?php echo $form->hiddenField($model,'_migrateName'); ?>
 
    <div class="row">
        <?php echo $form->labelEx($model,'migrateName'); ?>
        <?php echo $form->textField($model,'migrateName',array('size'=>65)); ?>
        <div class="tooltip">
            Migration should be only latter
        </div>
        <?php echo $form->error($model,'migrateName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'code'); ?>
        <?php echo $form->textArea($model,'code',array('rows'=>6, 'cols'=>50)); ?>
        <div class="tooltip">
            SQL code
        </div>
        <?php echo $form->error($model,'code'); ?>
    </div>
 
<?php $this->endWidget(); ?>