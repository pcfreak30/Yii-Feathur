<?php

/**
 * This is the migration class for table "server_blocks".
 *
 */
class m131231_213814_create_table_server_blocks extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('server_blocks', array(
                            'id' => 'int(8)',
                            'server_id' => 'int(8)',
                            'block_id' => 'int(8)',
                            ));
                                    $this->addPrimaryKey('server_blocks_pk','server_blocks','id');
                                                                                    return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('server_blocks');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

