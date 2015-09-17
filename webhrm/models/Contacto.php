<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacto".
 *
 * @property string $id
 * @property string $nombres
 * @property string $correo
 * @property integer $telefono
 * @property string $created_at
 * @property integer $baja
 *
 * @property Cuenta[] $cuentas
 */
class Contacto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombres'], 'required'],
            [['telefono', 'baja'], 'integer'],
            [['created_at'], 'safe'],
            [['nombres', 'correo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombres' => Yii::t('app', 'Nombres'),
            'correo' => Yii::t('app', 'Correo'),
            'telefono' => Yii::t('app', 'Telefono'),
            'created_at' => Yii::t('app', 'Fecha registro'),
            'baja' => Yii::t('app', 'Baja'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuentas()
    {
        return $this->hasMany(Cuenta::className(), ['id_contacto' => 'id']);
    }
}
