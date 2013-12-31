<?php

/**
 * This is the migration class for table "server_logs".
 *
 */
class m131231_213814_create_table_server_logs extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('server_logs', array(
                            'id' => 'int(8)',
                            'server_id' => 'int(8)',
                            'entry' => 'text',
                            'command' => 'text',
                            'timestamp' => 'int(16)',
                            ));
                                    $this->addPrimaryKey('server_logs_pk','server_logs','id');
                                                                                                                                    return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('server_logs');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

