<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'ta_id' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'kelas_id' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'laboran_id' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'id_matkuliah' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'nama_matakuliah' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'laboran_user_id' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'tanggal' => [
                'type' => 'DATE'
            ],
            'jam' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('jadwal', true);
    }

    public function down()
    {
        $this->forge->dropTable('jadwal', true);
    }
}
