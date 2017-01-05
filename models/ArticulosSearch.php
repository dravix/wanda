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
use app\models\Articulos;

/**
 * ArticulosSearch represents the model behind the search form about `app\models\Articulos`.
 */
class ArticulosSearch extends Articulos
{

	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function rules() {
		return [
			[['codigo', 'ref', 'familia', 'unidad', 'impuesto'], 'integer'],
			[['descripcion', 'ultima_modificacion'], 'safe'],
			[['costo', 'ganancia', 'precio', 'stock', 'vendidas'], 'number'],
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
		$query = Articulos::find();

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
				'codigo' => $this->codigo,
				'ref' => $this->ref,
				'familia' => $this->familia,
				'costo' => $this->costo,
				'ganancia' => $this->ganancia,
				'precio' => $this->precio,
				'stock' => $this->stock,
				'unidad' => $this->unidad,
				'vendidas' => $this->vendidas,
				'impuesto' => $this->impuesto,
				'ultima_modificacion' => $this->ultima_modificacion,
			]);

		$query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

		return $dataProvider;
	}


}
