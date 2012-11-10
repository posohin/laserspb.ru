<?php
/* @var $this PhotosController */
/* @var $data Photos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categories')); ?>:</b>
	<?php echo CHtml::encode($data->categories); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('types')); ?>:</b>
	<?php echo CHtml::encode($data->types); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('products')); ?>:</b>
	<?php echo CHtml::encode($data->products); ?>
	<br />


</div>