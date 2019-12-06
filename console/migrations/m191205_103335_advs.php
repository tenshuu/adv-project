<?php

use yii\db\Migration;

/**
 * Class m191205_103335_advs
 */
class m191205_103335_advs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('advs', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
            'ad' => $this->text(),
            'addate' => $this->date()->notNull(),
            'city' => $this->string(30)->notNull(),
            'price' => $this->double(),
            'category'=> $this->string(30)->notNull(),
            'status' => $this->integer(2)->notNull(),
            'user_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('advs');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191205_103335_advs cannot be reverted.\n";

        return false;
    }
    */
}
