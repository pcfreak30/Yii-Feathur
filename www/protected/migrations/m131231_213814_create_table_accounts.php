<?php

/**
 * This is the migration class for table "accounts".
 *
 */
class m131231_213814_create_table_accounts extends CDbMigration
{
    public function up()
    {
        try {
        $this->createTable('accounts', array(
                            'id' => 'int(8)',
                            'username' => 'varchar(65)',
                            'email_address' => 'varchar(130)',
                            'password' => 'varchar(130)',
                            'permissions' => 'int(2)',
                            'salt' => 'varchar(65)',
                            'activation_code' => 'varchar(130)',
                            'forgot' => 'varchar(130)',
                            ));
                                    $this->addPrimaryKey('accounts_pk','accounts','id');
                                                                                                                                                                                                            return true;
            } catch (CDbException $e) {
                echo $e->getMessage();
                return false;
            }
    }

    public function down()
    {
        try {
            $this->dropTable('accounts');
            return true;
        } catch (CDbException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}

