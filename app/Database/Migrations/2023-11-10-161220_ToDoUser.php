<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ToDoUser extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'to_do_id' => [
                'type' => 'int',
                'constraint' => 5,
                'unsigned' => true,
                 'auto_increment' => true,
            ],
            'to_do_name' => [
                'type' => 'varchar',
                'constraint' => '100',
            ],
            'to_do_body' => [
                'type' => 'text',
                'constraint' => '500',
            ],
        ]);

        $this->forge->addKey("to_do_id", true);
        $this->forge->createTable("ToDoUser");
    }

    public function down()
    {
        //
        $this->forge->dropTable('ToDoUser');
    }
}
