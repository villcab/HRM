<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cuenta;

/**
 * CuentaSearch represents the model behind the search form about `app\models\Cuenta`.
 */
class CuentaSearch extends Cuenta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'baja', 'id_contacto', 'id_plan'], 'integer'],
            [['fecha_ini', 'fecha_fin', 'nombre_usuario', 'clave', 'created_at'], 'safe'],
            [['precio'], 'number'],
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
        $query = Cuenta::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'fecha_ini' => $this->fecha_ini,
            'fecha_fin' => $this->fecha_fin,
            'created_at' => $this->created_at,
            'baja' => $this->baja,
            'id_contacto' => $this->id_contacto,
            'id_plan' => $this->id_plan,
            'precio' => $this->precio,
        ]);

        $query->andFilterWhere(['like', 'nombre_usuario', $this->nombre_usuario])
            ->andFilterWhere(['like', 'clave', $this->clave]);

        return $dataProvider;
    }
}
