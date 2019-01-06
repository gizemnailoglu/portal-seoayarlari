<?php

use yii\db\Migration;

/**
 * Class m190106_020938_seoayarlari
 */
class m190106_020938_seoayarlari extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {

         $this->createTable('seo', [
            'admin_id' => $this->primaryKey(),
            'meta_description' => $this->string(200)->notNull(),
            'meta_title' => $this->string(200)->notNull(),
            'meta_keywords' => $this->string(200)->notNull(),
            'dil' => $this->string(200)->notNull(),
            'cononical_url' => $this->string(200)->notNull(),
            'site_map' => $this->string(200)->notNull(),
            
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'); 

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
          $this->dropTable('seo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190106_020938_seoayarlari cannot be reverted.\n";

        return false;
    }
    */
}
