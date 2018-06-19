<?php

use yii\db\Migration;

/**
 * Class m180619_024742_AddProxyUsernameFieldToAccountsTable
 */
class m180619_024742_AddProxyUsernameFieldToAccountsTable extends Migration
{
    public function up()
    {
		$this->addColumn('accounts', 'proxy_username', $this->string()->notNull()); 
    }

    public function down()
    {
		$this->dropColumn('accounts', 'proxy_username'); 
    }
}
