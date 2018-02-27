<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kly".
 *
 * @property integer $id
 * @property string $name
 * @property integer $gender
 * @property string $birthday
 * @property string $school
 * @property string $workbase
 * @property integer $payroad
 * @property integer $paytest
 */
class kly extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kly';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'gender', 'birthday', 'school', 'payroad', 'paytest'], 'required'],
            [['gender', 'payroad', 'paytest'], 'integer'],
            [['birthday'], 'safe'],
            [['name', 'school', 'workbase'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'gender' => 'Gender',
            'birthday' => 'Birthday',
            'school' => 'School',
            'workbase' => 'Workbase',
            'payroad' => 'Payroad',
            'paytest' => 'Paytest',
        ];
    }
}
