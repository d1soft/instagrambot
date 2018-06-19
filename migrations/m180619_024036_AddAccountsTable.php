<?php

use yii\db\Migration;

/**
 * Class m180619_024036_AddAccountsTable
 */
class m180619_024036_AddAccountsTable extends Migration
{

    public function up()
    {
		$this->createTable('accounts', [
		    'id' => $this->primaryKey(),
			'username' => $this->string()->notNull(),
			'password' => $this->string()->notNull(),
			'proxy_ip' => $this->string()->notNull(),
			'proxy_port' => $this->string()->notNull(),
			'proxy_password' => $this->string()->notNull(),
			'email_username' => $this->string()->notNull(),
			'email_password' => $this->string()->notNull()
		]);
    }

    public function down()
    {
        $this->dropTable('accounts');
    }
}
