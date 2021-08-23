<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ProjectImage;

class ProjectImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectImage::create([
            'id' => 1,
            'project_id' => 1,
            'path' => '\storage\uploads\images\projects\senegal-expat-01.png'
        ]);

        ProjectImage::create([
            'id' => 2,
            'project_id' => 1,
            'path' => '\storage\uploads\images\projects\senegal-expat-02.png'
        ]);

        ProjectImage::create([
            'id' => 3,
            'project_id' => 1,
            'path' => '\storage\uploads\images\projects\senegal-expat-03.png'
        ]);

        ProjectImage::create([
            'id' => 4,
            'project_id' => 1,
            'path' => '\storage\uploads\images\projects\senegal-expat-04.png'
        ]);

        ProjectImage::create([
            'id' => 5,
            'project_id' => 1,
            'path' => '\storage\uploads\images\projects\senegal-expat-05.png'
        ]);

        ProjectImage::create([
            'id' => 6,
            'project_id' => 2,
            'path' => '\storage\uploads\images\projects\nobious-01.png'
        ]);

        ProjectImage::create([
            'id' => 7,
            'project_id' => 3,
            'path' => '\storage\uploads\images\projects\gemtracks-01.png'
        ]);

        ProjectImage::create([
            'id' => 8,
            'project_id' => 3,
            'path' => '\storage\uploads\images\projects\gemtracks-02.png'
        ]);

        ProjectImage::create([
            'id' => 9,
            'project_id' => 3,
            'path' => '\storage\uploads\images\projects\gemtracks-03.png'
        ]);

        ProjectImage::create([
            'id' => 10,
            'project_id' => 3,
            'path' => '\storage\uploads\images\projects\gemtracks-04.png'
        ]);

        ProjectImage::create([
            'id' => 11,
            'project_id' => 3,
            'path' => '\storage\uploads\images\projects\gemtracks-05.png'
        ]);

        ProjectImage::create([
            'id' => 12,
            'project_id' => 4,
            'path' => '\storage\uploads\images\projects\callsheet-01.png'
        ]);

        ProjectImage::create([
            'id' => 13,
            'project_id' => 4,
            'path' => '\storage\uploads\images\projects\callsheet-02.png'
        ]);

        ProjectImage::create([
            'id' => 14,
            'project_id' => 4,
            'path' => '\storage\uploads\images\projects\callsheet-03.png'
        ]);

        ProjectImage::create([
            'id' => 15,
            'project_id' => 4,
            'path' => '\storage\uploads\images\projects\callsheet-04.png'
        ]);

        ProjectImage::create([
            'id' => 16,
            'project_id' => 4,
            'path' => '\storage\uploads\images\projects\callsheet-05.png'
        ]);

        ProjectImage::create([
            'id' => 17,
            'project_id' => 5,
            'path' => '\storage\uploads\images\projects\portfolio-01.png'
        ]);
    }
}
