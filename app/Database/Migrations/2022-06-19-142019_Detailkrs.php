<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Detailkrs extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'kodemk' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'nama_matkul' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'sks' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'jadwal_id' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'krs_id' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'id_matakuliah' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'dosen_matkul' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],

        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('detailkrs', true);
    }

    public function down()
    {
        $this->forge->dropTable('detailkrs', true);
    }
}
