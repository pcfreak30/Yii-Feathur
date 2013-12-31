<?php

/**
 * This is the migration class for table "attempts".
 *
 */
class m131231_213814_create_table_attempts extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('attempts', array(
                            'id' => 'int(16)',
                            'ip_address' => 'varchar(65)',
                            'timestamp' => 'int(16)',
                            'type' => 'varchar(65)',
                            ));
                                    $this->addPrimaryKey('attempts_pk','attempts','id');
                                                                                                            return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('attempts');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

