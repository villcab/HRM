<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property string $id
 * @property string $nombre
 * @property integer $baja
 *
 * @property Cuenta[] $cuentas
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['baja'], 'integer'],
            [['nombre'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'baja' => Yii::t('app', 'Baja'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuentas()
    {
        return $this->hasMany(Cuenta::className(), ['id_plan' => 'id']);
    }
}
