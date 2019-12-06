<?php

use yii\db\Migration;

/**
 * Class m191205_180911_pictures
 */
class m191205_180911_pictures extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pictures', [
            'id' => $this->primaryKey(),
            'path' => $this->string()->notNull(),
            'picdate' => $this->integer()->notNull(),
            'adv_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pictures');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191205_180911_pictures cannot be reverted.\n";

        return false;
    }
    */
}
