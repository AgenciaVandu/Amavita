<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name' => 'index',
            'section' => 'header',
        ]);

        Page::create([
            'name' => 'amavita',
            'section' => 'header',
        ]);

        Page::create([
            'name' => 'amavita',
            'section' => 'services',
        ]);

        Page::create([
            'name' => 'amavita',
            'section' => 'video',
        ]);

        Page::create([
            'name' => 'amavita',
            'section' => 'master',
        ]);
    }
}
