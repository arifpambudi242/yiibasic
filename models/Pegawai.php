<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id
 * @property string $nip
 * @property string $nama
 * @property string $jekel
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $telpon
 * @property string $agama
 * @property string $alamat
 * @property string $golongan
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'jekel', 'tempat_lahir', 'tgl_lahir', 'telpon', 'agama', 'alamat', 'golongan'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nip'], 'string', 'max' => 255],
            [['nama', 'tempat_lahir'], 'string', 'max' => 100],
            [['jekel', 'golongan'], 'string', 'max' => 1],
            [['telpon'], 'string', 'max' => 13],
            [['agama'], 'string', 'max' => 10],
            [['alamat'], 'string', 'max' => 128],
            [['nip'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nomor Induk Pegawai',
            'nama' => 'Nama Lengkap',
            'jekel' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'telpon' => 'Nomor Telepon',
            'agama' => 'Agama',
            'alamat' => 'Alamat',
            'golongan' => 'Golongan',
        ];
    }

    public function getPegawai()
    {
        $model = $this->hasOne(Pegawai::class, [
            'id' => 'id_pegawai'
        ])->one();
        return $model ? $model->nama : '-';
    }
}
