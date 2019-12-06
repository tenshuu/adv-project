<?php

use yii\db\Migration;

/**
 * Class m191205_180809_userinfo
 */
class m191205_180809_userinfo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('userinfo', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'profileimage' => $this->string(),
            'city' => $this->string(30)->notNull(),
            'about' => $this->text(),
            'regdate' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('userinfo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191205_180809_userinfo cannot be reverted.\n";

        return false;
    }
    */
}
