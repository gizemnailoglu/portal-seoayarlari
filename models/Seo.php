<?php

namespace kouosl\seoayarlari\models;

use Yii;

/**
 * This is the model class for table "seo".
 *
 * @property int $admin_id
 * @property string $meta_description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $dil
 * @property string $cononical_url
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meta_description', 'meta_title', 'meta_keywords', 'dil', 'cononical_url'], 'required'],
            [['meta_description', 'meta_title', 'meta_keywords', 'dil'], 'string', 'max' => 200],
            [['cononical_url'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'meta_description' => 'Meta Description',
            'meta_title' => 'Meta Title',
            'meta_keywords' => 'Meta Keywords',
            'dil' => 'Dil',
            'cononical_url' => 'Cononical Url',
        ];
    }
}
