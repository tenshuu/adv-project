<?php

use yii\db\Migration;

/**
 * Class m191205_180751_user
 */
class m191205_180751_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('reguser', [
            'id' => $this->primaryKey(),
            'email' => $this->string(100),
            'password' => $this->string(100),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('reguser');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191205_180751_user cannot be reverted.\n";

        return false;
    }
    */
}
