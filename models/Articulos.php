<?php

namespace app\models;

use Yii;
use \app\models\base\Articulos as BaseArticulos;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "productos".
 */
class Articulos extends BaseArticulos
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

    public function getExistencias()
    {
      return $this->hasOne(Existencia::className(),['producto'=>'ref']);
    }

    public function getFamilias()
    {
      return $this->hasOne(Familias::className(),['id'=>'familia']);
    }
    public function getUnidades() {
      return $this->hasOne(Unidades::className(),['id'=>'unidad']);
    }     
}
