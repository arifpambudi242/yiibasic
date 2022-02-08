<?php

use yii\db\Migration;

/**
 * Class m220208_074152_gaji
 */
class m220208_074152_gaji extends Migration
{

 
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%gaji}}', [
            'id'            => $this->primaryKey(),
            'id_pegawai'    => $this->integer()->notNull()->unique(),
            'gaji_pokok'    => $this->float()->notNull(),
            'tunjangan_istri'    => $this->float()->notNull(),
            'tunjangan_anak'    => $this->float()->notNull(),
            'tunjangan_makan'    => $this->float()->notNull()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%gaji}}');
    }
}