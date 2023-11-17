<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ApiEstudo extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id_livro' => [
            'type' => 'int',
            'constraint' => 5, 
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'autor'=> [
            'type' => 'varchar',
            'constraint' => '100',
        ],
        'descricao' => [ 
            'type' => 'varchar',
            'constraint' => '100',
        ],
        ]);
        $this->forge->addKey('id_livro');
        $this->forge->createTable('api_estudo');
    }

    public function down()
    {
        //
        $this->forge->dropTable('api_estudo');
    }
}
