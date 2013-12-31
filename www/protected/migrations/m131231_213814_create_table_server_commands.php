<?php

/**
 * This is the migration class for table "server_commands".
 *
 */
class m131231_213814_create_table_server_commands extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('server_commands', array(
                            'id' => 'int(8)',
                            'server_id' => 'int(8)',
                            'command' => 'text',
                            'interval' => 'int(8)',
                            'last' => 'int(16)',
                            ));
                                    $this->addPrimaryKey('server_commands_pk','server_commands','id');
                                                                                                                                    return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('server_commands');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

