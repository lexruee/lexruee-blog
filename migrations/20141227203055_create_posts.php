<?php

use Phinx\Migration\AbstractMigration;

class CreatePosts extends AbstractMigration
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
        $table = $this->table('posts');
        $table->addColumn('user_id', 'integer')
            ->addColumn('title', 'string', array('limit' => 150))
            ->addColumn('content', 'text')
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