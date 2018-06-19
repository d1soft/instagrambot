<?php

use yii\db\Migration;

/**
 * Class m180619_024358_InsertAccount
 */
class m180619_024358_InsertAccount extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->insert('accounts',[
			'username' => 'anishseth97',
			'password' => 'vYwBH8SbY23',
			'proxy_ip' => '37.9.48.93',
			'proxy_port' => '8224',
			'proxy_username' => 'user3736',
			'proxy_password' => 'hie3vp',
			'email_username' => 'NadezhdaMarysheva97@mail.ru',
			'email_password' => 'vYwBH8SbY23'
		]);
		
		$this->insert('accounts',[
			'username' => 'jeremygameson',
			'password' => 'bYHGxInNc0',
			'proxy_ip' => '5.8.62.103',
			'proxy_port' => '8224',
			'proxy_password' => 'user3736',
			'proxy_username' => 'hie3vp',
			'email_username' => 'lesha_gashkov@mail.ru',
			'email_password' => 'bYHGxInNc0'
		]);
    }

    public function safeDown()
    {
        echo "m180619_024358_InsertAccount cannot be reverted.\n";

        return false;
    }
}
