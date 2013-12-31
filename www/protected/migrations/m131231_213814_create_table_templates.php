<?php

/**
 * This is the migration class for table "templates".
 *
 */
class m131231_213814_create_table_templates extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('templates', array(
                            'id' => 'int(8)',
                            'name' => 'varchar(65)',
                            'path' => 'varchar(65)',
                            'type' => 'varchar(65)',
                            ));
                                    $this->addPrimaryKey('templates_pk','templates','id');
                                                                                                            return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('templates');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

