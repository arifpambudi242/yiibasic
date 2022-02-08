<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gaji".
 *
 * @property int $id
 * @property int $id_pegawai
 * @property float $gaji_pokok
 * @property float $tunjangan_istri
 * @property float $tunjangan_anak
 * @property float $tunjangan_makan
 */
class Gaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'gaji_pokok', 'tunjangan_istri', 'tunjangan_anak', 'tunjangan_makan'], 'required'],
            [['id_pegawai'], 'integer'],
            [['gaji_pokok', 'tunjangan_istri', 'tunjangan_anak', 'tunjangan_makan'], 'number'],
            [['id_pegawai'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pegawai' => 'Id Pegawai',
            'gaji_pokok' => 'Gaji Pokok',
            'tunjangan_istri' => 'Tunjangan Istri',
            'tunjangan_anak' => 'Tunjangan Anak',
            'tunjangan_makan' => 'Tunjangan Makan',
        ];
    }
}
