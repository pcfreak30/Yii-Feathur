<?php

/**
 * This is the migration class for table "statistics".
 *
 */
class m131231_213814_create_table_statistics extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('statistics', array(
                            'id' => 'int(16)',
                            'server_id' => 'int(8)',
                            'status' => 'int(2)',
                            'hardware_uptime' => 'varchar(32)',
                            'total_memory' => 'varchar(32)',
                            'free_memory' => 'varchar(32)',
                            'load_average' => 'varchar(32)',
                            'hard_disk_free' => 'varchar(32)',
                            'hard_disk_total' => 'varchar(32)',
                            'bandwidth' => 'int(32)',
                            'timestamp' => 'int(16)',
                            ));
                                    $this->addPrimaryKey('statistics_pk','statistics','id');
                                                                                                                                                                                                                                                                                    return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('statistics');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

