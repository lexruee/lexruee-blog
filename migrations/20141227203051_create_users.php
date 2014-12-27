<?php

use Phinx\Migration\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string', array('limit' => 20))
            ->addColumn('password', 'string', array('limit' => 40))
            ->addColumn('email', 'string', array('limit' => 100))
            ->addColumn('firstname', 'string', array('limit' => 30))
            ->addColumn('lastname', 'string', array('limit' => 30))
            ->addColumn('created_at','datetime')
            ->addColumn('updated_at','datetime')
        ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}