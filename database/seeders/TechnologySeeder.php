<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology::create([
            'id' => 1,
            'name' => 'HTML'
        ]);

        Technology::create([
            'id' => 10,
            'name' => 'CSS'
        ]);

        Technology::create([
            'id' => 20,
            'name' => 'Bootstrap'
        ]);

        Technology::create([
            'id' => 30,
            'name' => 'JavaScript'
        ]);

        Technology::create([
            'id' => 40,
            'name' => 'jQuery'
        ]);

        Technology::create([
            'id' => 50,
            'name' => 'VueJS'
        ]);

        Technology::create([
            'id' => 60,
            'name' => 'PHP'
        ]);

        Technology::create([
            'id' => 70,
            'name' => 'Laravel'
        ]);
    }
}
