<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class Newsletters extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('newsletters');
        $table
            ->addColumn('name', 'string', ['limit' => 60])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', ['null' => true])
            ->addIndex(['email'], ['unique' => true])
            ->create();
    }
}
