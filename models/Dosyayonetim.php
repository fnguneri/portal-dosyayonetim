<?php

namespace kouosl\dosyayonetim\models;

use Yii;

/**
 * This is the model class for table "dosyayonetim".
 *
 * @property int $dosya_id
 * @property string $dosya_adi
 * @property string $dosya_yolu
 */
class Dosyayonetim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosyayonetim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dosya_adi', 'dosya_yolu'], 'required'],
            [['dosya_adi', 'dosya_yolu'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dosya_id' => 'Dosya ID',
            'dosya_adi' => 'Dosya Adi',
            'dosya_yolu' => 'Dosya Yolu',
        ];
    }
}
