<?php

/**
 * This is the model class for table "vps".
 *
 * The followings are the available columns in table 'vps':
 * @property integer $id
 * @property integer $user_id
 * @property integer $server_id
 * @property integer $container_id
 * @property string $hostname
 * @property string $primary_ip
 * @property string $type
 * @property integer $ram
 * @property integer $swap
 * @property string $disk
 * @property integer $cpuunits
 * @property integer $cpulimit
 * @property string $bandwidthlimit
 * @property string $nameserver
 * @property integer $numiptent
 * @property integer $numproc
 * @property integer $inodes
 * @property integer $template_id
 * @property integer $suspended
 * @property integer $suspending_admin
 * @property string $bandwidth_usage
 * @property string $last_bandwidth
 * @property integer $rebuilding
 * @property string $mac
 * @property integer $vnc_port
 * @property string $boot_order
 * @property string $disk_driver
 * @property string $network_driver
 * @property integer $private_network
 */
class Vps extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vps';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, user_id, server_id, container_id, ram, swap, cpuunits, cpulimit, numiptent, numproc, inodes, template_id, suspended, suspending_admin, rebuilding, vnc_port, private_network', 'numerical', 'integerOnly'=>true),
			array('hostname', 'length', 'max'=>130),
			array('primary_ip, bandwidthlimit, nameserver, bandwidth_usage, last_bandwidth, mac, boot_order, disk_driver, network_driver', 'length', 'max'=>65),
			array('type, disk', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, server_id, container_id, hostname, primary_ip, type, ram, swap, disk, cpuunits, cpulimit, bandwidthlimit, nameserver, numiptent, numproc, inodes, template_id, suspended, suspending_admin, bandwidth_usage, last_bandwidth, rebuilding, mac, vnc_port, boot_order, disk_driver, network_driver, private_network', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'server_id' => 'Server',
			'container_id' => 'Container',
			'hostname' => 'Hostname',
			'primary_ip' => 'Primary Ip',
			'type' => 'Type',
			'ram' => 'Ram',
			'swap' => 'Swap',
			'disk' => 'Disk',
			'cpuunits' => 'Cpuunits',
			'cpulimit' => 'Cpulimit',
			'bandwidthlimit' => 'Bandwidthlimit',
			'nameserver' => 'Nameserver',
			'numiptent' => 'Numiptent',
			'numproc' => 'Numproc',
			'inodes' => 'Inodes',
			'template_id' => 'Template',
			'suspended' => 'Suspended',
			'suspending_admin' => 'Suspending Admin',
			'bandwidth_usage' => 'Bandwidth Usage',
			'last_bandwidth' => 'Last Bandwidth',
			'rebuilding' => 'Rebuilding',
			'mac' => 'Mac',
			'vnc_port' => 'Vnc Port',
			'boot_order' => 'Boot Order',
			'disk_driver' => 'Disk Driver',
			'network_driver' => 'Network Driver',
			'private_network' => 'Private Network',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('server_id',$this->server_id);
		$criteria->compare('container_id',$this->container_id);
		$criteria->compare('hostname',$this->hostname,true);
		$criteria->compare('primary_ip',$this->primary_ip,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('ram',$this->ram);
		$criteria->compare('swap',$this->swap);
		$criteria->compare('disk',$this->disk,true);
		$criteria->compare('cpuunits',$this->cpuunits);
		$criteria->compare('cpulimit',$this->cpulimit);
		$criteria->compare('bandwidthlimit',$this->bandwidthlimit,true);
		$criteria->compare('nameserver',$this->nameserver,true);
		$criteria->compare('numiptent',$this->numiptent);
		$criteria->compare('numproc',$this->numproc);
		$criteria->compare('inodes',$this->inodes);
		$criteria->compare('template_id',$this->template_id);
		$criteria->compare('suspended',$this->suspended);
		$criteria->compare('suspending_admin',$this->suspending_admin);
		$criteria->compare('bandwidth_usage',$this->bandwidth_usage,true);
		$criteria->compare('last_bandwidth',$this->last_bandwidth,true);
		$criteria->compare('rebuilding',$this->rebuilding);
		$criteria->compare('mac',$this->mac,true);
		$criteria->compare('vnc_port',$this->vnc_port);
		$criteria->compare('boot_order',$this->boot_order,true);
		$criteria->compare('disk_driver',$this->disk_driver,true);
		$criteria->compare('network_driver',$this->network_driver,true);
		$criteria->compare('private_network',$this->private_network);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vps the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
