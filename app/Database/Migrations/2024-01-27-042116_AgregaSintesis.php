<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregaSintesis extends Migration
{
    public function up()
    {
        $campos = [
          'sintesis' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'after' => 'titulo',
                'null' => false
          ],
        ];

        $this->forge->addColumn('articulos',$campos);
    }

    public function down()
    {
        $this->forge->dropColumn('articulos','sintesis');
    }
}
