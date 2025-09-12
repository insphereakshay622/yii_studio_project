<?php

use yii\db\Migration;

class m250910_072617_add_image_to_feedbacks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%feedbacks}}', 'image', $this->string(255)->after('name'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250910_072617_add_image_to_feedbacks_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250910_072617_add_image_to_feedbacks_table cannot be reverted.\n";

        return false;
    }
    */
}
