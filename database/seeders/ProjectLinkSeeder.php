<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ProjectLink;

class ProjectLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectLink::create([
            'id' => 1,
            'project_id' => 1, // Senegal Expat
            'title' => 'View online',
            'link' => 'https://www.senegal-expat.com'
        ]);

        ProjectLink::create([
            'id' => 2,
            'project_id' => 2, // Nobious
            'title' => 'View online',
            'link' => 'https://www.nobious.com'
        ]);

        ProjectLink::create([
            'id' => 3,
            'project_id' => 3, // Gemtracks
            'title' => 'View online',
            'link' => 'https://www.gemtracks.com'
        ]);

        ProjectLink::create([
            'id' => 4,
            'project_id' => 4, // Callsheet
            'title' => 'View online',
            'link' => 'https://callsheet.dk'
        ]);
    }
}
