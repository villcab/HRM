<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuenta".
 *
 * @property string $id
 * @property string $fecha_ini
 * @property string $fecha_fin
 * @property string $nombre_usuario
 * @property string $clave
 * @property string $created_at
 * @property integer $baja
 * @property string $id_contacto
 * @property string $id_plan
 * @property double $precio
 *
 * @property Contacto $idContacto
 * @property Plan $idPlan
 */
class Cuenta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuenta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_ini', 'fecha_fin', 'created_at'], 'safe'],
            [['nombre_usuario', 'clave', 'id_contacto', 'id_plan'], 'required'],
            [['baja', 'id_contacto', 'id_plan'], 'integer'],
            [['precio'], 'number'],
            [['nombre_usuario', 'clave'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fecha_ini' => Yii::t('app', 'Fecha Inicio'),
            'fecha_fin' => Yii::t('app', 'Fecha Final'),
            'nombre_usuario' => Yii::t('app', 'Nombre Usuario'),
            'clave' => Yii::t('app', 'Contraseña'),
            'created_at' => Yii::t('app', 'Fecha registro'),
            'baja' => Yii::t('app', 'Baja'),
            'id_contacto' => Yii::t('app', 'Contacto'),
            'id_plan' => Yii::t('app', 'Plan'),
            'precio' => Yii::t('app', 'Precio'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdContacto()
    {
        return $this->hasOne(Contacto::className(), ['id' => 'id_contacto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPlan()
    {
        return $this->hasOne(Plan::className(), ['id' => 'id_plan']);
    }
}
