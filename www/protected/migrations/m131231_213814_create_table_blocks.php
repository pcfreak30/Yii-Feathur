<?php

/**
 * This is the migration class for table "blocks".
 *
 */
class m131231_213814_create_table_blocks extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('blocks', array(
                            'id' => 'int(8)',
                            'name' => 'varchar(65)',
                            'gateway' => 'varchar(65)',
                            'netmask' => 'varchar(65)',
                            ));
                                    $this->addPrimaryKey('blocks_pk','blocks','id');
                                                                                                            return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('blocks');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

