<?php

/**
 * This is the model class for table "transfers".
 *
 * The followings are the available columns in table 'transfers':
 * @property integer $id
 * @property integer $vps_id
 * @property integer $from_server
 * @property integer $to_server
 * @property integer $phase
 * @property integer $completed
 * @property integer $cleanup
 */
class Transfer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transfers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, vps_id, from_server, to_server, phase, completed, cleanup', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, vps_id, from_server, to_server, phase, completed, cleanup', 'safe', 'on'=>'search'),
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
			'vps_id' => 'Vps',
			'from_server' => 'From Server',
			'to_server' => 'To Server',
			'phase' => 'Phase',
			'completed' => 'Completed',
			'cleanup' => 'Cleanup',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('vps_id',$this->vps_id);
		$criteria->compare('from_server',$this->from_server);
		$criteria->compare('to_server',$this->to_server);
		$criteria->compare('phase',$this->phase);
		$criteria->compare('completed',$this->completed);
		$criteria->compare('cleanup',$this->cleanup);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transfer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
