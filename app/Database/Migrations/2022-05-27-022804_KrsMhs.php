<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KrsMhs extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'npm' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'nama_mhs' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'ta_id' => [
                'type' => 'INT'
            ],
            'user_id' => [
                'type' => 'INT'
            ],
            'id_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'tanggal_lahr' => [
                'type' => 'DATE',
            ],
            'id_perguruan_tinggi' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'id_agama' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'nama_agama' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'id_prodi' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'nama_program_studi' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'nama_status_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => '45'
            ],
            'id_periode' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'created_at' => [
                'type' => 'DATE'
            ],
            'updated_at' => [
                'type' => 'DATE'
            ],
            'deleted_at' => [
                'type' => 'DATE'
            ],

        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('krs', true);
    }

    public function down()
    {
        $this->forge->dropTable('krs', true);
    }
}
