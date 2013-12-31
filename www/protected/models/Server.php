<?php

/**
 * This is the model class for table "servers".
 *
 * The followings are the available columns in table 'servers':
 * @property integer $id
 * @property string $name
 * @property string $user
 * @property string $ip_address
 * @property string $key
 * @property string $type
 * @property integer $password
 * @property string $url
 * @property integer $port
 * @property string $status_type
 * @property string $location
 * @property integer $status
 * @property integer $status_warning
 * @property integer $last_check
 * @property integer $previous_check
 * @property integer $up_since
 * @property integer $down_since
 * @property integer $alert_after
 * @property string $load_alert
 * @property string $ram_alert
 * @property string $hard_disk_alert
 * @property integer $display_memory
 * @property integer $display_load
 * @property integer $display_hard_disk
 * @property integer $display_network_uptime
 * @property integer $display_hardware_uptime
 * @property integer $display_location
 * @property integer $display_history
 * @property integer $display_statistics
 * @property integer $display_hs
 * @property integer $display_bandwidth
 * @property string $hardware_uptime
 * @property string $total_memory
 * @property string $free_memory
 * @property string $load_average
 * @property string $hard_disk_free
 * @property string $hard_disk_total
 * @property integer $bandwidth
 * @property integer $last_bandwidth
 * @property integer $container_bandwidth
 * @property integer $bandwidth_timestamp
 * @property string $volume_group
 * @property string $qemu_path
 */
class Server extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, password, port, status, status_warning, last_check, previous_check, up_since, down_since, alert_after, display_memory, display_load, display_hard_disk, display_network_uptime, display_hardware_uptime, display_location, display_history, display_statistics, display_hs, display_bandwidth, bandwidth, last_bandwidth, container_bandwidth, bandwidth_timestamp', 'numerical', 'integerOnly'=>true),
			array('name, user, ip_address, key, type, volume_group, qemu_path', 'length', 'max'=>65),
			array('url', 'length', 'max'=>255),
			array('status_type, load_alert', 'length', 'max'=>16),
			array('location', 'length', 'max'=>130),
			array('ram_alert, hard_disk_alert', 'length', 'max'=>8),
			array('hardware_uptime, total_memory, free_memory, load_average, hard_disk_free, hard_disk_total', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, user, ip_address, key, type, password, url, port, status_type, location, status, status_warning, last_check, previous_check, up_since, down_since, alert_after, load_alert, ram_alert, hard_disk_alert, display_memory, display_load, display_hard_disk, display_network_uptime, display_hardware_uptime, display_location, display_history, display_statistics, display_hs, display_bandwidth, hardware_uptime, total_memory, free_memory, load_average, hard_disk_free, hard_disk_total, bandwidth, last_bandwidth, container_bandwidth, bandwidth_timestamp, volume_group, qemu_path', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'user' => 'User',
			'ip_address' => 'Ip Address',
			'key' => 'Key',
			'type' => 'Type',
			'password' => 'Password',
			'url' => 'Url',
			'port' => 'Port',
			'status_type' => 'Status Type',
			'location' => 'Location',
			'status' => 'Status',
			'status_warning' => 'Status Warning',
			'last_check' => 'Last Check',
			'previous_check' => 'Previous Check',
			'up_since' => 'Up Since',
			'down_since' => 'Down Since',
			'alert_after' => 'Alert After',
			'load_alert' => 'Load Alert',
			'ram_alert' => 'Ram Alert',
			'hard_disk_alert' => 'Hard Disk Alert',
			'display_memory' => 'Display Memory',
			'display_load' => 'Display Load',
			'display_hard_disk' => 'Display Hard Disk',
			'display_network_uptime' => 'Display Network Uptime',
			'display_hardware_uptime' => 'Display Hardware Uptime',
			'display_location' => 'Display Location',
			'display_history' => 'Display History',
			'display_statistics' => 'Display Statistics',
			'display_hs' => 'Display Hs',
			'display_bandwidth' => 'Display Bandwidth',
			'hardware_uptime' => 'Hardware Uptime',
			'total_memory' => 'Total Memory',
			'free_memory' => 'Free Memory',
			'load_average' => 'Load Average',
			'hard_disk_free' => 'Hard Disk Free',
			'hard_disk_total' => 'Hard Disk Total',
			'bandwidth' => 'Bandwidth',
			'last_bandwidth' => 'Last Bandwidth',
			'container_bandwidth' => 'Container Bandwidth',
			'bandwidth_timestamp' => 'Bandwidth Timestamp',
			'volume_group' => 'Volume Group',
			'qemu_path' => 'Qemu Path',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('user',$this->user,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('key',$this->key,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('password',$this->password);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('port',$this->port);
		$criteria->compare('status_type',$this->status_type,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('status_warning',$this->status_warning);
		$criteria->compare('last_check',$this->last_check);
		$criteria->compare('previous_check',$this->previous_check);
		$criteria->compare('up_since',$this->up_since);
		$criteria->compare('down_since',$this->down_since);
		$criteria->compare('alert_after',$this->alert_after);
		$criteria->compare('load_alert',$this->load_alert,true);
		$criteria->compare('ram_alert',$this->ram_alert,true);
		$criteria->compare('hard_disk_alert',$this->hard_disk_alert,true);
		$criteria->compare('display_memory',$this->display_memory);
		$criteria->compare('display_load',$this->display_load);
		$criteria->compare('display_hard_disk',$this->display_hard_disk);
		$criteria->compare('display_network_uptime',$this->display_network_uptime);
		$criteria->compare('display_hardware_uptime',$this->display_hardware_uptime);
		$criteria->compare('display_location',$this->display_location);
		$criteria->compare('display_history',$this->display_history);
		$criteria->compare('display_statistics',$this->display_statistics);
		$criteria->compare('display_hs',$this->display_hs);
		$criteria->compare('display_bandwidth',$this->display_bandwidth);
		$criteria->compare('hardware_uptime',$this->hardware_uptime,true);
		$criteria->compare('total_memory',$this->total_memory,true);
		$criteria->compare('free_memory',$this->free_memory,true);
		$criteria->compare('load_average',$this->load_average,true);
		$criteria->compare('hard_disk_free',$this->hard_disk_free,true);
		$criteria->compare('hard_disk_total',$this->hard_disk_total,true);
		$criteria->compare('bandwidth',$this->bandwidth);
		$criteria->compare('last_bandwidth',$this->last_bandwidth);
		$criteria->compare('container_bandwidth',$this->container_bandwidth);
		$criteria->compare('bandwidth_timestamp',$this->bandwidth_timestamp);
		$criteria->compare('volume_group',$this->volume_group,true);
		$criteria->compare('qemu_path',$this->qemu_path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Server the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
