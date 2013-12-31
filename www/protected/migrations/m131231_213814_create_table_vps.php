<?php

/**
 * This is the migration class for table "vps".
 *
 */
class m131231_213814_create_table_vps extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('vps', array(
                            'id' => 'int(8)',
                            'user_id' => 'int(8)',
                            'server_id' => 'int(8)',
                            'container_id' => 'int(8)',
                            'hostname' => 'varchar(130)',
                            'primary_ip' => 'varchar(65)',
                            'type' => 'varchar(8)',
                            'ram' => 'int(8)',
                            'swap' => 'int(8)',
                            'disk' => 'varchar(8)',
                            'cpuunits' => 'int(8)',
                            'cpulimit' => 'int(8)',
                            'bandwidthlimit' => 'decimal(65,4)',
                            'nameserver' => 'varchar(65)',
                            'numiptent' => 'int(8)',
                            'numproc' => 'int(8)',
                            'inodes' => 'int(8)',
                            'template_id' => 'int(8)',
                            'suspended' => 'int(2)',
                            'suspending_admin' => 'int(8)',
                            'bandwidth_usage' => 'decimal(65,4)',
                            'last_bandwidth' => 'decimal(65,4)',
                            'rebuilding' => 'int(8)',
                            'mac' => 'varchar(65)',
                            'vnc_port' => 'int(16)',
                            'boot_order' => 'varchar(65)',
                            'disk_driver' => 'varchar(65)',
                            'network_driver' => 'varchar(65)',
                            'private_network' => 'int(2)',
                            ));
                                    $this->addPrimaryKey('vps_pk','vps','id');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('vps');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

