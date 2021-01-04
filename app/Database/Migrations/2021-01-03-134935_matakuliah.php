<?php namespace App\Database\Migrations;
 
use CodeIgniter\Database\Migration;
 
class Products extends Migration
{
    public function up()
    {
        $this->db->enableForeignKeyChecks();
        $this->forge->addField([
            'matakuliah_id'            => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'category_id'           => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => TRUE,
                'null'              => TRUE
            ],
            'prodi_id'           => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => TRUE,
                'null'              => TRUE
            ],
            'kode_matakuliah'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'semester'         => [
                'type'              => 'INT',
                'constraint'        => '3',
            ],
            'sks'           => [
                'type'              => 'int',
                'constraint'        => '3',
			],
			'prodi'           => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'status'        => [
                'type'              => 'ENUM',
                'constraint'        => "'Active','Inactive'",
                'default'           => 'Active'
            ],
            'document'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => TRUE,
            ],
            'description'   => [
                'type'              => 'TEXT',
                'null'              => TRUE,
            ],
        ]);
        $this->forge->addKey('matakuliah_id', TRUE);
        $this->forge->addForeignKey('category_id','categories','category_id','CASCADE','CASCADE');
        $this->forge->addForeignKey('prodi_id','prodi','prodi_id','CASCADE','CASCADE');
        $this->forge->createTable('matakuliah');
    }
 
    //--------------------------------------------------------------------
 
    public function down()
    {
        //
    }
}