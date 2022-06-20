<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laboran extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'nama_laboran' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('laboran', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('laboran');
    }
}
