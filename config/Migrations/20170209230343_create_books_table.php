<?php

use Phinx\Migration\AbstractMigration;

class CreateBooksTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('books');
        $table->addColumn('titulo', 'string', array('limit' => 60, 'null' => false))
              ->addColumn('autor', 'string', array('limit' => 100, 'default' => '', 'null' => false))
              ->addColumn('descripcion', 'string', array('limit' => 300, 'null' => false))
              ->addColumn('image', 'string', array('limit' => 100, 'null' => false))
              ->addColumn('image_dir', 'string', array('limit' => 300, 'null' => false))
              ->addColumn('path', 'string', array('limit' => 250, 'null' => true))
              ->create();
    }
}
