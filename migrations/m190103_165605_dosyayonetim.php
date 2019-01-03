<?php

use yii\db\Migration;

/**
 * Class m190103_162758_dosyayonetim
 */
class m190103_165605_dosyayonetim extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_165605_dosyayonetim cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
$this->createTable('dosyayonetim', [
        'dosya_id' => $this->primaryKey(),
        'dosya_adi' => $this->string(500)->notNull(),
        'dosya_yolu' => $this->string(500)->notNull(),
    ]);
    }

    public function down()
    {
        echo "m190103_165605_dosyayonetim cannot be reverted.\n";
        $this->dropTable('dosyayonetim');
        return false;
    }
    
}
