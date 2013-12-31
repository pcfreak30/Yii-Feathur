<?php

/**
 * This is the migration class for table "servers".
 *
 */
class m131231_213814_create_table_servers extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('servers', array(
                            'id' => 'int(8)',
                            'name' => 'varchar(65)',
                            'user' => 'varchar(65)',
                            'ip_address' => 'varchar(65)',
                            'key' => 'varchar(65)',
                            'type' => 'varchar(65)',
                            'password' => 'int(2)',
                            'url' => 'varchar(255)',
                            'port' => 'int(4)',
                            'status_type' => 'varchar(16)',
                            'location' => 'varchar(130)',
                            'status' => 'int(2)',
                            'status_warning' => 'int(2)',
                            'last_check' => 'int(16)',
                            'previous_check' => 'int(16)',
                            'up_since' => 'int(16)',
                            'down_since' => 'int(16)',
                            'alert_after' => 'int(16)',
                            'load_alert' => 'varchar(16)',
                            'ram_alert' => 'varchar(8)',
                            'hard_disk_alert' => 'varchar(8)',
                            'display_memory' => 'int(2)',
                            'display_load' => 'int(2)',
                            'display_hard_disk' => 'int(2)',
                            'display_network_uptime' => 'int(2)',
                            'display_hardware_uptime' => 'int(11)',
                            'display_location' => 'int(2)',
                            'display_history' => 'int(2)',
                            'display_statistics' => 'int(2)',
                            'display_hs' => 'int(2)',
                            'display_bandwidth' => 'int(2)',
                            'hardware_uptime' => 'varchar(32)',
                            'total_memory' => 'varchar(32)',
                            'free_memory' => 'varchar(32)',
                            'load_average' => 'varchar(32)',
                            'hard_disk_free' => 'varchar(32)',
                            'hard_disk_total' => 'varchar(32)',
                            'bandwidth' => 'int(64)',
                            'last_bandwidth' => 'int(64)',
                            'container_bandwidth' => 'int(2)',
                            'bandwidth_timestamp' => 'int(32)',
                            'volume_group' => 'varchar(65)',
                            'qemu_path' => 'varchar(65)',
                            ));
                                    $this->addPrimaryKey('servers_pk','servers','id');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('servers');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

