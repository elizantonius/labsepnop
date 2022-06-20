<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            $field['kode_kelas'] = array(
                'type' => 'enum("A","B","C")',
                'null' => false
            ),
            $field2['kelas'] = array(
                'type' => 'enum("Pagi","Sore","Karyawan")',
                'null' => false
            )
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->addField($field, $field2);
        $this->forge->createTable('jadwal', true);
    }

    public function down()
    {
        $this->forge->dropTable('kelas', true);
    }
}
