<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'transaksi_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nomor_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'kat_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'status_pesanan' => [
                'type'           => 'INT',
                'constraint'     => 5,
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
        $this->forge->addKey('transaksi_id', true);
        $this->forge->addForeignKey('kat_id', 'katalog', 'katalog_id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
