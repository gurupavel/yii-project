<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12.11.15
 * Time: 20:55
 */

namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}

?>