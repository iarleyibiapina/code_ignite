<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
        public function up()
    {
        // 
        $this->forge->addField([
            'usuario_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome_usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email_usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'senha_usuario' => [
                'type'=> 'varchar',
                'constraint' => '50',
            ],
        ]);

        $this->forge->addKey('usuario_id', true);
        $this->forge->createTable('usuarios');
    
    }

    public function down()
    {
        //
        $this->forge->dropTable('usuarios');
    }
}
