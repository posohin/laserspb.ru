<?php
/* @var $this PhotosController */
/* @var $model Photos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'photos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categories'); ?>
		<?php echo $form->textField($model,'categories'); ?>
		<?php echo $form->error($model,'categories'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'types'); ?>
		<?php echo $form->textField($model,'types'); ?>
		<?php echo $form->error($model,'types'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'products'); ?>
		<?php echo $form->textField($model,'products'); ?>
		<?php echo $form->error($model,'products'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->