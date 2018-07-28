<?php

namespace app\models;

use Yii;
use \app\models\base\Inventarios as BaseInventarios;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "inventarios".
 */
class Inventarios extends BaseInventarios
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
