<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%cadastra}}`.
 */
class m200207_121703_create_cadastra_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cadastra}}', [
            'id'               => $this->primaryKey(),
            'cadastral_number' => Schema::TYPE_STRING . ' NOT NULL',
            'address'          => Schema::TYPE_STRING . ' NOT NULL',
            'price'            => 'INTEGER',
            'area'             => 'INTEGER',
            'created_at'       => 'INTEGER NOT NULL',
            'updated_at'       => 'INTEGER NOT NULL'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cadastra}}');
    }
}
