<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absen extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'pertemuan' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'jam' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'detailkrs_id' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('absen', true);
    }

    public function down()
    {
        $this->forge->dropTable('krs', true);
    }
}
