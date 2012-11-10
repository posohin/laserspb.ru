<?php

/**
 * This is the model class for table "Prices".
 *
 * The followings are the available columns in table 'Prices':
 * @property integer $id
 * @property integer $categories
 * @property double $small
 * @property double $small10
 * @property double $small50
 * @property double $small100
 * @property double $small500
 * @property double $smallmore
 * @property double $big
 * @property double $big10
 * @property double $big50
 * @property double $big100
 * @property double $big500
 * @property double $bigmore
 * @property string $material
 */
class Prices extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Prices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categories, small, small10, small50, small100, small500, smallmore, big, big10, big50, big100, big500, bigmore, material', 'required'),
			array('categories', 'numerical', 'integerOnly'=>true),
			array('small, small10, small50, small100, small500, smallmore, big, big10, big50, big100, big500, bigmore', 'numerical'),
			array('material', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, categories, small, small10, small50, small100, small500, smallmore, big, big10, big50, big100, big500, bigmore, material', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'categories' => 'Categories',
			'small' => 'Small',
			'small10' => 'Small10',
			'small50' => 'Small50',
			'small100' => 'Small100',
			'small500' => 'Small500',
			'smallmore' => 'Smallmore',
			'big' => 'Big',
			'big10' => 'Big10',
			'big50' => 'Big50',
			'big100' => 'Big100',
			'big500' => 'Big500',
			'bigmore' => 'Bigmore',
			'material' => 'Material',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('categories',$this->categories);
		$criteria->compare('small',$this->small);
		$criteria->compare('small10',$this->small10);
		$criteria->compare('small50',$this->small50);
		$criteria->compare('small100',$this->small100);
		$criteria->compare('small500',$this->small500);
		$criteria->compare('smallmore',$this->smallmore);
		$criteria->compare('big',$this->big);
		$criteria->compare('big10',$this->big10);
		$criteria->compare('big50',$this->big50);
		$criteria->compare('big100',$this->big100);
		$criteria->compare('big500',$this->big500);
		$criteria->compare('bigmore',$this->bigmore);
		$criteria->compare('material',$this->material,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}