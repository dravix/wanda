<?php
/**
 * /var/www/html/wanda/runtime/giiant/e0080b9d6ffa35acb85312bf99a557f2
 *
 * @package default
 */


namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Notas;

/**
 * NotasSearch represents the model behind the search form about `app\models\Notas`.
 */
class NotasSearch extends Notas
{

	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function rules() {
		return [
			[['id', 'cliente', 'usuario', 'caja', 'tipo', 'status'], 'integer'],
			[['total'], 'number'],
			[['fecha'], 'safe'],
		];
	}


	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}


	/**
	 * Creates data provider instance with search query applied
	 *
	 *
	 * @param array   $params
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		$query = Notas::find();

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
				'cliente' => $this->cliente,
				'usuario' => $this->usuario,
				'caja' => $this->caja,
				'total' => $this->total,
				'DATE(fecha)' => $this->fecha,
				'tipo' => $this->tipo,
				'status' => $this->status,
			]);
		$query->orderBy('fecha desc');

		return $dataProvider;
	}


}
