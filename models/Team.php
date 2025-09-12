<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string $position
 * @property string|null $photo
 * @property string $created_at
 * @property string $updated_at
 */
class Team extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'photo'], 'default', 'value' => null],
            [['name', 'email', 'position'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'position'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20],
            [['photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'position' => 'Position',
            'photo' => 'Photo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
