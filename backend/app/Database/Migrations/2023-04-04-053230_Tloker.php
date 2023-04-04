<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tloker extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idloker' => [
                'type' => 'BIGINT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'tingkat_pendidikan_minimal' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'tanggal_dibuka' => [
                'type' => 'DATE',
                'null' => true
            ],
            'tanggal_ditutup' => [
                'type' => 'DATE',
                'null' => true
            ],
            'kuota' => [
                'type' => 'INTEGER',
                'constraint' => 20,
                'null' => true
            ],
        ]);
        $this->forge->addPrimaryKey('idloker');
        $this->forge->createTable('tloker');
    }

    public function down()
    {
        $this->forge->dropTable('tloker');
    }
}
