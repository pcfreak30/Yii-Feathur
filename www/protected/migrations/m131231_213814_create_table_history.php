<?php

/**
 * This is the migration class for table "history".
 *
 */
class m131231_213814_create_table_history extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('history', array(
                            'id' => 'int(32)',
                            'server_id' => 'int(16)',
                            'status' => 'int(2)',
                            'timestamp' => 'int(16)',
                            ));
                                    $this->addPrimaryKey('history_pk','history','id');
                                                                                                            return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('history');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

