<?php
/* @var $this PricesController */
/* @var $model Prices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prices-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'categories'); ?>
		<?php echo $form->textField($model,'categories'); ?>
		<?php echo $form->error($model,'categories'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'small'); ?>
		<?php echo $form->textField($model,'small'); ?>
		<?php echo $form->error($model,'small'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'small10'); ?>
		<?php echo $form->textField($model,'small10'); ?>
		<?php echo $form->error($model,'small10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'small50'); ?>
		<?php echo $form->textField($model,'small50'); ?>
		<?php echo $form->error($model,'small50'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'small100'); ?>
		<?php echo $form->textField($model,'small100'); ?>
		<?php echo $form->error($model,'small100'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'small500'); ?>
		<?php echo $form->textField($model,'small500'); ?>
		<?php echo $form->error($model,'small500'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'smallmore'); ?>
		<?php echo $form->textField($model,'smallmore'); ?>
		<?php echo $form->error($model,'smallmore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'big'); ?>
		<?php echo $form->textField($model,'big'); ?>
		<?php echo $form->error($model,'big'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'big10'); ?>
		<?php echo $form->textField($model,'big10'); ?>
		<?php echo $form->error($model,'big10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'big50'); ?>
		<?php echo $form->textField($model,'big50'); ?>
		<?php echo $form->error($model,'big50'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'big100'); ?>
		<?php echo $form->textField($model,'big100'); ?>
		<?php echo $form->error($model,'big100'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'big500'); ?>
		<?php echo $form->textField($model,'big500'); ?>
		<?php echo $form->error($model,'big500'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bigmore'); ?>
		<?php echo $form->textField($model,'bigmore'); ?>
		<?php echo $form->error($model,'bigmore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material'); ?>
		<?php echo $form->textField($model,'material',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'material'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->