<?php

namespace app\models;

use Yii;
use yii\base\Model;

class AddForm extends Model  
{
    public $num1;
    public $num2;
    public function rules()
    {
        return [
            [['num1', 'num2'], 'required'],
        ];
    }
}