<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "migration".
 *
 * @property string $version
 * @property integer $apply_time
 */
class Migration extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'migration';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'version' => Yii::t('app', 'Version'),
            'apply_time' => Yii::t('app', 'Apply Time'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\models\MigrationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\MigrationQuery(get_called_class());
    }
}
