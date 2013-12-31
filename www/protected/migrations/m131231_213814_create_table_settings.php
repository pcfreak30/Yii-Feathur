<?php

/**
 * This is the migration class for table "settings".
 *
 */
class m131231_213814_create_table_settings extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('settings', array(
                            'id' => 'int(8)',
                            'setting_name' => 'varchar(65)',
                            'setting_value' => 'varchar(65)',
                            'setting_group' => 'varchar(65)',
                            ));
                                    $this->addPrimaryKey('settings_pk','settings','id');
                                                                                                            return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('settings');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

