<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ProjectTechnology;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectTechnology::create([
            'id' => 1,
            'project_id' => 1, // Senegal Expat
            'technology_id' => 20
        ]);

        ProjectTechnology::create([
            'id' => 2,
            'project_id' => 1, // Senegal Expat
            'technology_id' => 40
        ]);

        ProjectTechnology::create([
            'id' => 3,
            'project_id' => 1, // Senegal Expat
            'technology_id' => 60
        ]);

        ProjectTechnology::create([
            'id' => 4,
            'project_id' => 1, // Senegal Expat
            'technology_id' => 70
        ]);

        ProjectTechnology::create([
            'id' => 5,
            'project_id' => 2, // Nobious
            'technology_id' => 20
        ]);

        ProjectTechnology::create([
            'id' => 6,
            'project_id' => 2, // Nobious
            'technology_id' => 40
        ]);

        ProjectTechnology::create([
            'id' => 7,
            'project_id' => 2, // Nobious
            'technology_id' => 60
        ]);

        ProjectTechnology::create([
            'id' => 8,
            'project_id' => 2, // Nobious
            'technology_id' => 70
        ]);

        ProjectTechnology::create([
            'id' => 9,
            'project_id' => 3, // Gemtracks
            'technology_id' => 20
        ]);

        ProjectTechnology::create([
            'id' => 10,
            'project_id' => 3, // Gemtracks
            'technology_id' => 40
        ]);

        ProjectTechnology::create([
            'id' => 11,
            'project_id' => 3, // Gemtracks
            'technology_id' => 60
        ]);

        ProjectTechnology::create([
            'id' => 12,
            'project_id' => 4, // Callsheet
            'technology_id' => 20
        ]);

        ProjectTechnology::create([
            'id' => 13,
            'project_id' => 4, // Callsheet
            'technology_id' => 40
        ]);

        ProjectTechnology::create([
            'id' => 14,
            'project_id' => 4, // Callsheet
            'technology_id' => 60
        ]);

        ProjectTechnology::create([
            'id' => 15,
            'project_id' => 4, // Callsheet
            'technology_id' => 70
        ]);

        ProjectTechnology::create([
            'id' => 16,
            'project_id' => 5, // Personal Portfolio
            'technology_id' => 20
        ]);

        ProjectTechnology::create([
            'id' => 17,
            'project_id' => 5, // Personal Portfolio
            'technology_id' => 50
        ]);

        ProjectTechnology::create([
            'id' => 18,
            'project_id' => 5, // Personal Portfolio
            'technology_id' => 60
        ]);

        ProjectTechnology::create([
            'id' => 19,
            'project_id' => 5, // Personal Portfolio
            'technology_id' => 70
        ]);
    }
}
