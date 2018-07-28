<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "inventarios".
 *
 * @property integer $id_inventario
 * @property string $fecha
 * @property double $saldo
 * @property string $dominio
 * @property string $orden
 * @property integer $estado
 * @property integer $auditor
 * @property integer $gerente
 * @property string $aliasModel
 */
abstract class Inventarios extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'saldo', 'estado', 'auditor', 'gerente'], 'required'],
            [['fecha'], 'safe'],
            [['saldo'], 'number'],
            [['estado', 'auditor', 'gerente'], 'integer'],
            [['dominio'], 'string', 'max' => 120],
            [['orden'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_inventario' => 'Id Inventario',
            'fecha' => 'Fecha',
            'saldo' => 'Saldo',
            'dominio' => 'Dominio',
            'orden' => 'Orden',
            'estado' => 'Estado',
            'auditor' => 'Auditor',
            'gerente' => 'Gerente',
        ];
    }




}
