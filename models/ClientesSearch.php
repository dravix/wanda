<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clientes;

/**
* ClientesSearch represents the model behind the search form about `app\models\Clientes`.
*/
class ClientesSearch extends Clientes
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'tipo'], 'integer'],
            [['nombre', 'rfc', 'direccion', 'poblacion', 'estado', 'tel', 'correo'], 'safe'],
            [['credito'], 'number'],
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = Clientes::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'tipo' => $this->tipo,
            'credito' => $this->credito,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'rfc', $this->rfc])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'poblacion', $this->poblacion])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'correo', $this->correo]);

return $dataProvider;
}
}