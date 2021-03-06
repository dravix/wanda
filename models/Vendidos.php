<?php

namespace app\models;

use Yii;
use \app\models\base\Vendidos as BaseVendidos;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "vendidos".
 */
class Vendidos extends BaseVendidos
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

    public function getArticulo()
    {
      return $this->hasOne(Articulos::className(),['ref'=>'producto']);
    }

}
