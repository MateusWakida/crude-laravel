<?php

namespace Database\Seeders;
use App\Models\usuario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {           
        usuario::create([    
            'nome' => 'Isais Silva',
            'email' => 'Isaisas@gmail.com',
            'cpf' => 12345678999,
            'data_nascimento' => '1991-05-15',
            'rua' => 'Rua b',
            'num_rua' => 124,
            'complemento' => 'Apartmento 102',
            'cep' => 12343678,
            'cidade' => 'São Paulo',
            'UF' => 'RJ',
            'ativo' => true,
        ]);
    }
}
