<?php

namespace app\models;

use Yii;
use \app\models\base\Productos as BaseProductos;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "productos".
 */
class Productos extends BaseProductos
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

    public static function search($value='')
    {
        if (is_numeric($value)) {
            # code...
            return self::find()
            ->where(['ref'=>$value])
            ->orwhere(['codigo'=>$value]);
        }
        elseif (strlen($value)>2) {
            # if it has a minumum of 3 characters
            return self::find()->where(['like','descripcion',$value]);
        }
    }

    public function getUnidades() {
      return $this->hasOne(Unidades::className(),['id'=>'unidad']);
    } 

    public function generateCodigo()
    {
        # Generates a random code
        $this->codigo = random_int(1000000,9999999);
    }
}
