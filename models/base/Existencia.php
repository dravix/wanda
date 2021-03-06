<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "existencia".
 *
 * @property integer $producto
 * @property integer $inventario
 * @property double $stock_fisico
 * @property double $stock_logico
 * @property double $inconsistencia
 * @property string $aliasModel
 */
abstract class Existencia extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'existencia';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['producto', 'inventario', 'stock_fisico', 'stock_logico'], 'required'],
            [['producto', 'inventario'], 'integer'],
            [['stock_fisico', 'stock_logico', 'inconsistencia'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'producto' => 'Producto',
            'inventario' => 'Inventario',
            'stock_fisico' => 'Stock Fisico',
            'stock_logico' => 'Stock Logico',
            'inconsistencia' => 'Inconsistencia',
        ];
    }




}
