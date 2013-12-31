<?php

/**
 * This is the migration class for table "ipaddresses".
 *
 */
class m131231_213814_create_table_ipaddresses extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('ipaddresses', array(
                            'id' => 'int(8)',
                            'vps_id' => 'int(8)',
                            'block_id' => 'int(8)',
                            'ip_address' => 'varchar(65)',
                            ));
                                    $this->addPrimaryKey('ipaddresses_pk','ipaddresses','id');
                                                                                                            return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('ipaddresses');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

