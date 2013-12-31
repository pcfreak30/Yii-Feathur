<?php

/**
 * This is the migration class for table "transfers".
 *
 */
class m131231_213814_create_table_transfers extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('transfers', array(
                            'id' => 'int(8)',
                            'vps_id' => 'int(8)',
                            'from_server' => 'int(8)',
                            'to_server' => 'int(8)',
                            'phase' => 'int(2)',
                            'completed' => 'int(2)',
                            'cleanup' => 'int(2)',
                            ));
                                    $this->addPrimaryKey('transfers_pk','transfers','id');
                                                                                                                                                                                    return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('transfers');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

