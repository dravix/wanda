<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "notas".
 *
 * @property integer $id
 * @property integer $cliente
 * @property integer $usuario
 * @property integer $caja
 * @property double $total
 * @property string $fecha
 * @property integer $tipo
 * @property integer $status
 * @property string $aliasModel
 */
abstract class Notas extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notas';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cliente', 'usuario', 'caja', 'total', 'fecha', 'tipo', 'status'], 'required'],
            [['cliente', 'usuario', 'caja', 'tipo', 'status'], 'integer'],
            [['total'], 'number'],
            [['fecha'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cliente' => 'Cliente',
            'usuario' => 'Usuario',
            'caja' => 'Caja',
            'total' => 'Total',
            'fecha' => 'Fecha',
            'tipo' => 'Tipo',
            'status' => 'Status',
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'tipo' => '0:Nota;1:Factura; 2: Devolucion',
            'status' => '0:sin pagar; 1:pagado, 2:en credito, 3:devolucion',
        ]);
    }




}
