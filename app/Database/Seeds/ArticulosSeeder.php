<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArticulosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'titulo' => 'Declaración de Independencia de los Estados Unidos',
                'keywords' => ' Independencia, Revolución Americana, Thomas Jefferson, Declaración',
                'min_age' => random_int(18,20),
                'max_age' => random_int(21,50),
                'nombre_portada' => 'Declaracion_Independencia.jpg',
                'nombre_previa' => 'Firma_Declaracion_Independencia.jpg',
                'fecha' => date('1776-07-04'),
            ],
            [
                'titulo' => 'Fin de la Segunda Guerra Mundial',
                'keywords' => 'WWII, Rendición de Japón, VJ Day, Europa, Pacífico.',
                'min_age' => random_int(18,20),
                'max_age' => random_int(21,50),
                'nombre_portada' => 'Besos_Times_Square.jpg',
                'nombre_previa' => 'Rendicion_Japon_USS_Missouri.jpg',
                'fecha' => date('1945-09-02'),
            ]
        ];
        
        $this ->db->table('articulos')->insertBatch($data);
    }
}
