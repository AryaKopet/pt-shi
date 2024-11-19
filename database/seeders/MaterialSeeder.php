<?php 
namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    public function run()
    {
        Material::create([
            'bahan' => 'Impraboard T3',
            'harga' => 115000,
        ]);

        Material::create([
            'bahan' => 'Impraboard T5',
            'harga' => 220000,
        ]);
    }
}
