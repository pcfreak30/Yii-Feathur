<?php

/**
 * This is the migration class for table "vps_logs".
 *
 */
class m131231_213814_create_table_vps_logs extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('vps_logs', array(
                            'id' => 'int(16)',
                            'timestamp' => 'int(16)',
                            'vps_id' => 'int(8)',
                            'command' => 'text',
                            'entry' => 'text',
                            ));
                                    $this->addPrimaryKey('vps_logs_pk','vps_logs','id');
                                                                                                                                    return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('vps_logs');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

