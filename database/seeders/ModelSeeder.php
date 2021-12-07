<?php

namespace Database\Seeders;

use App\Models\Model;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::create([
            'name' => 'alula',
            'price' => 200000,
        ]);

        Model::create([
            'name' => 'boreal',
            'price' => 200000,
        ]);

        Model::create([
            'name' => 'citala
            ',
            'price' => 200000,
        ]);
    }
}
