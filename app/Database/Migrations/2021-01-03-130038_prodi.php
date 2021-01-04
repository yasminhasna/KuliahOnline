<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodi extends Migration
{
	public function up(){
	$this->forge->addField([
		'prodi_id'           => [
			'type'              => 'BIGINT',
			'constraint'        => 20,
			'unsigned'          => TRUE,
			'auto_increment'    => TRUE
		],
		'prodi'         => [
			'type'              => 'VARCHAR',
			'constraint'        => '100',
		],
	]);
	$this->forge->addKey('prodi_id', TRUE);
	$this->forge->createTable('prodi');
}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
