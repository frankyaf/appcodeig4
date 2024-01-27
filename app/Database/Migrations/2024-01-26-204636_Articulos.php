<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Articulos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'titulo' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'keywords' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'min_age' => [
                'type'=> 'TEXT',
                'null'=> false,
            ],
            'max_age' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'nombre_portada' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'nombre_previa' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'fecha' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('articulos');
    }

    public function down()
    {
        $this->forge->dropTable('articulos');
    }
}
