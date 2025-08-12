<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    public function run()
    {
        $equipos = [
            [
                'codigo' => 'EQ001',
                'tipo' => 'Laptop',
                'cliente' => 'Empresa A',
                'estado' => 'alquilado',
                'fecha_entrega' => '2024-01-15'
            ],
            [
                'codigo' => 'EQ002',
                'tipo' => 'Monitor',
                'cliente' => 'Empresa B',
                'estado' => 'disponible',
                'fecha_entrega' => null
            ],
            [
                'codigo' => 'EQ-A12',
                'tipo' => 'Impresora',
                'cliente' => 'Empresa C',
                'estado' => 'mantenimiento',
                'fecha_entrega' => '2024-02-01'
            ]
        ];

        foreach ($equipos as $equipo) {
            Equipo::create($equipo);
        }
    }
}