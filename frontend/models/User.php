<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property integer $confirmed_at
 * @property string $unconfirmed_email
 * @property integer $blocked_at
 * @property string $registration_ip
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $flags
 * @property integer $status
 *
 * @property Pasien[] $pasiens
 * @property PemeriksaanFisik[] $pemeriksaanFisiks
 * @property Profile $profile
 * @property ResepNonracikan[] $resepNonracikans
 * @property ResepRacikan[] $resepRacikans
 * @property SocialAccount[] $socialAccounts
 * @property Token[] $tokens
 * @property UserHasFaskes[] $userHasFaskes
 * @property FasilitasKesehatan[] $faskes
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password_hash', 'auth_key', 'created_at', 'updated_at'], 'required'],
            [['confirmed_at', 'blocked_at', 'created_at', 'updated_at', 'flags', 'status'], 'integer'],
            [['username'], 'string', 'max' => 25],
            [['email', 'unconfirmed_email'], 'string', 'max' => 255],
            [['password_hash'], 'string', 'max' => 60],
            [['auth_key'], 'string', 'max' => 32],
            [['registration_ip'], 'string', 'max' => 45],
            [['username'], 'unique'],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'confirmed_at' => Yii::t('app', 'Confirmed At'),
            'unconfirmed_email' => Yii::t('app', 'Unconfirmed Email'),
            'blocked_at' => Yii::t('app', 'Blocked At'),
            'registration_ip' => Yii::t('app', 'Registration Ip'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'flags' => Yii::t('app', 'Flags'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemeriksaanFisiks()
    {
        return $this->hasMany(PemeriksaanFisik::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResepNonracikans()
    {
        return $this->hasMany(ResepNonracikan::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResepRacikans()
    {
        return $this->hasMany(ResepRacikan::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocialAccounts()
    {
        return $this->hasMany(SocialAccount::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTokens()
    {
        return $this->hasMany(Token::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserHasFaskes()
    {
        return $this->hasMany(UserHasFaskes::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaskes()
    {
        return $this->hasMany(FasilitasKesehatan::className(), ['id' => 'faskes_id'])->viaTable('user_has_faskes', ['user_id' => 'id']);
    }
}
