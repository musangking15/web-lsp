<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateKatalog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'katalog_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true,
            ],
            'nama_katalog' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'harga' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        $this->forge->addKey('katalog_id', true);
        $this->forge->createTable('katalog');
    }

    public function down()
    {
        $this->forge->dropTable('katalog');
    }
}
