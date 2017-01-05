<?php

namespace app\models;

use Yii;
use \app\models\base\Notas as BaseNotas;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "notas".
 */
class Notas extends BaseNotas
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

    public function beforeDelete()
    {
      if (parent::beforeDelete()) {
        // Elimina los items de la venta
        Vendidos::deleteAll(['venta'=>$this->id]);
        return true;
      } else {
        return false;
      }
    }

    public function getCajero()
    {
      return $this->hasOne(Usuarios::className(),['id_usuario'=>'usuario']);
    }    
    public function getVendidos()
    {
      return $this->hasMany(Vendidos::className(),['venta'=>'id']);
    }    
    public function getProductos()
    {
      return $this->hasMany(Articulos::className(),['ref'=>'producto'])->via('vendidos');
    }

    public function getProductosProvider()
    {
      return new ActiveDataProvider(['query'=>$this->getProductos()]);
    }    
    public function getVendidosProvider()
    {
      $query=$this->getVendidos();
      $query->innerJoinWith('producto');
      return new ActiveDataProvider(['query'=>$query]);
    }

}
