<?php

/**
 * This is the model class for table "statistics".
 *
 * The followings are the available columns in table 'statistics':
 * @property integer $id
 * @property integer $server_id
 * @property integer $status
 * @property string $hardware_uptime
 * @property string $total_memory
 * @property string $free_memory
 * @property string $load_average
 * @property string $hard_disk_free
 * @property string $hard_disk_total
 * @property integer $bandwidth
 * @property integer $timestamp
 */
class Statistic extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'statistics';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, server_id, status, bandwidth, timestamp', 'numerical', 'integerOnly'=>true),
			array('hardware_uptime, total_memory, free_memory, load_average, hard_disk_free, hard_disk_total', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, server_id, status, hardware_uptime, total_memory, free_memory, load_average, hard_disk_free, hard_disk_total, bandwidth, timestamp', 'safe', 'on'=>'search'),
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
			'server_id' => 'Server',
			'status' => 'Status',
			'hardware_uptime' => 'Hardware Uptime',
			'total_memory' => 'Total Memory',
			'free_memory' => 'Free Memory',
			'load_average' => 'Load Average',
			'hard_disk_free' => 'Hard Disk Free',
			'hard_disk_total' => 'Hard Disk Total',
			'bandwidth' => 'Bandwidth',
			'timestamp' => 'Timestamp',
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
		$criteria->compare('server_id',$this->server_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('hardware_uptime',$this->hardware_uptime,true);
		$criteria->compare('total_memory',$this->total_memory,true);
		$criteria->compare('free_memory',$this->free_memory,true);
		$criteria->compare('load_average',$this->load_average,true);
		$criteria->compare('hard_disk_free',$this->hard_disk_free,true);
		$criteria->compare('hard_disk_total',$this->hard_disk_total,true);
		$criteria->compare('bandwidth',$this->bandwidth);
		$criteria->compare('timestamp',$this->timestamp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Statistic the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
