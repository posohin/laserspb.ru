<?php
/* @var $this PricesController */
/* @var $model Prices */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categories'); ?>
		<?php echo $form->textField($model,'categories'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'small'); ?>
		<?php echo $form->textField($model,'small'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'small10'); ?>
		<?php echo $form->textField($model,'small10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'small50'); ?>
		<?php echo $form->textField($model,'small50'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'small100'); ?>
		<?php echo $form->textField($model,'small100'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'small500'); ?>
		<?php echo $form->textField($model,'small500'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'smallmore'); ?>
		<?php echo $form->textField($model,'smallmore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'big'); ?>
		<?php echo $form->textField($model,'big'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'big10'); ?>
		<?php echo $form->textField($model,'big10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'big50'); ?>
		<?php echo $form->textField($model,'big50'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'big100'); ?>
		<?php echo $form->textField($model,'big100'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'big500'); ?>
		<?php echo $form->textField($model,'big500'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bigmore'); ?>
		<?php echo $form->textField($model,'bigmore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material'); ?>
		<?php echo $form->textField($model,'material',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->