<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $proxy_ip
 * @property string $proxy_port
 * @property string $proxy_password
 * @property string $email_username
 * @property string $email_password
 * @property string $proxy_username
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'proxy_ip', 'proxy_port', 'proxy_password', 'email_username', 'email_password', 'proxy_username'], 'required'],
            [['username', 'password', 'proxy_ip', 'proxy_port', 'proxy_password', 'email_username', 'email_password', 'proxy_username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'proxy_ip' => 'Proxy Ip',
            'proxy_port' => 'Proxy Port',
            'proxy_password' => 'Proxy Password',
            'email_username' => 'Email Username',
            'email_password' => 'Email Password',
            'proxy_username' => 'Proxy Username',
        ];
    }
	
	public function getProxyGuzzleFormat()
	{
		return "http://{$this->proxy_username}:{$this->proxy_password}@{$this->proxy_ip}:{$this->proxy_port}";
	}
}
