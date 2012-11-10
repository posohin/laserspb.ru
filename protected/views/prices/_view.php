<?php
/* @var $this PricesController */
/* @var $data Prices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categories')); ?>:</b>
	<?php echo CHtml::encode($data->categories); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('small')); ?>:</b>
	<?php echo CHtml::encode($data->small); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('small10')); ?>:</b>
	<?php echo CHtml::encode($data->small10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('small50')); ?>:</b>
	<?php echo CHtml::encode($data->small50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('small100')); ?>:</b>
	<?php echo CHtml::encode($data->small100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('small500')); ?>:</b>
	<?php echo CHtml::encode($data->small500); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('smallmore')); ?>:</b>
	<?php echo CHtml::encode($data->smallmore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('big')); ?>:</b>
	<?php echo CHtml::encode($data->big); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('big10')); ?>:</b>
	<?php echo CHtml::encode($data->big10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('big50')); ?>:</b>
	<?php echo CHtml::encode($data->big50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('big100')); ?>:</b>
	<?php echo CHtml::encode($data->big100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('big500')); ?>:</b>
	<?php echo CHtml::encode($data->big500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bigmore')); ?>:</b>
	<?php echo CHtml::encode($data->bigmore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material')); ?>:</b>
	<?php echo CHtml::encode($data->material); ?>
	<br />

	*/ ?>

</div>