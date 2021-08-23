<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::Create([
            'id' => 1,
            'title' => 'Senegal Expat',
            'slug' => 'senegal-expat',
            
            'short_description' => '<p><a href="https://www.senegal-expat.com" target="_blank">Senegal Expat</a> is a classifieds platform which connects local people of France to buy, sell or exchange used goods and services.</p><p>The website has been built in the Bootstrap and Laravel frameworks.</p>',
            
            'description' => '<p><a href="https://www.senegal-expat.com" target="_blank">Senegal Expat</a> is a classifieds platform which connects local people of France to buy, sell or exchange used goods and services.</p><p>The website was not built from scratch by me but I had fixed several bugs and added some new features.</p>',
            
            'thumbnail' => '\storage\uploads\images\projects\senegal-expat-00.png',
            'start_year'=> '2020',
            'end_year' => '2020'
        ]);

        Project::Create([
            'id' => 2,
            'title' => 'Nobious',
            'slug' => 'nobious',
            
            'short_description' => '<p><a href="https://www.nobious.com" target="_blank">Nobious</a> is a software solution company that provides solutions to companies from multiple industries. It is also in the industry of management consulting and business services.</p><p>The website has been built from scratch in the Bootstrap and Laravel frameworks. All of the pages except the \'projects\' section are static.</p>',
            
            'description' => '<p><a href="https://www.nobious.com" target="_blank">Nobious</a> is a software solution company that provides solutions to companies from multiple industries. It is also in the industry of management consulting and business services.</p><p>In the beggining I was asked to design some static pages for their website which was already a static website but when I started the work I found a lot of inconsistencies in their existing site. It was not possible for me to continue with that site and I explained the issues to them. They understood the things and decided to re-design the complete website.</p><p>The new website has been designed from scratch in the Bootstrap framework. All of the pages except the \'projects\' section are static.</p><p>The backend is built in Laravel framework. They are able to manage their projects with the help of several nice features including rich text editor, multiple images handling, sorting the projects etc..</p>',
            
            'thumbnail' => '\storage\uploads\images\projects\nobious-00.png',
            'start_year'=> '2020',
            'end_year' => '2020'
        ]);

        Project::Create([
            'id' => 3,
            'title' => 'Gemtracks',
            'slug' => 'gemtracks',
            
            'short_description' => '<p><a href="https://www.gemtracks.com" target="_blank">Gemtracks</a> is a music industry marketplace to help you create, produce and market songs as a recording artist - even if you have no musical background.</p><p>I had built a new <a href="https://studio.gemtracks.com" target="_blank">studio backend</a> for their users where they can manage their studios. I built this part from scratch in PHP and jQuery.</p>',
            
            'description' => '<p><a href="https://www.gemtracks.com" target="_blank">Gemtracks</a> is a music industry marketplace to help you create, produce and market songs as a recording artist - even if you have no musical background.</p><p>In the beginning I was given to build a new <a href="https://studio.gemtracks.com" target="_blank">studio backend</a> for their users where they can manage their studios. I built this part from scratch in PHP and jQuery.</p><p>Apart from that, after finishing the <a href="https://studio.gemtracks.com" target="_blank">Studio Backend</a>, I worked on their <a href="https://www.gemtracks.com" target="_blank">main website</a> where I had fixed several bugs and added some new features.</p><p>The <a href="https://studio.gemtracks.com" target="_blank">studio backend</a> provides a separate space to every user to manage their studios. They can</p><ul><li>Add/edit/delete studio(s)</li><li>See the total number of bookings and new clients gained in a specific time period (Today, 30 days, 60 days and 90 days).</li><li>See the total revenue and income generated in a specific time period (Today, 30 days, 60 days and 90 days).</li><li>See the upcoming bookings in the calendar (Daily, weekly and monthly) and manage them in the calendar.</li><li>See the bookings in the form of tables/lists where they can filter the records using several filter options provided on top of the table.</li></ul>',
            
            'thumbnail' => '\storage\uploads\images\projects\gemtracks-00.png',
            'start_year'=> '2020',
            'end_year' => '2021'
        ]);

        Project::Create([
            'id' => 4,
            'title' => 'Callsheet',
            'slug' => 'callsheet',
            
            'short_description' => '<p><a href="https://callsheet.dk" target="_blank">Callsheet</a> is a free casting website. You can find your talent quickly and efficiently. You can filter by name, gender, media requirements, location, and age range.</p><p>You post a job, and immediately get seen by hundreds of actors looking for jobs. You can invite actor(s) to your job and leave them a message.</p>',
            
            'description' => '<p><a href="https://callsheet.dk" target="_blank">Callsheet</a> is a free casting website. You can find your talent quickly and efficiently. You can filter by name, gender, media requirements, location, and age range.</p><p>You post a job, and immediately get seen by hundreds of actors looking for jobs. You can invite actor(s) to your job and leave them a message.</p><p>Actors can set their interests so that they can get notified when a new job matching their interest(s) is posted in the future. They can upload four photos and share a link to a showreel (YouTube or Vimeo).</p>',
            
            'thumbnail' => '\storage\uploads\images\projects\callsheet-00.png',
            'start_year'=> '2020',
            'end_year' => '2021'
        ]);

        Project::Create([
            'id' => 5,
            'title' => 'My Portfolio Website',
            'slug' => 'portfolio-website',
            
            'short_description' => '<p>A personal website gives an opportunity to a developer to showcase their work to more people on the internet.</p><p><a href="http://engrmohit.com" target="_blank">engrmohit.com</a> is my personal website. It\'s a centralised place for all of my work.</p><p>The layout is not much fancy but my focus was just to have a site where I can showcase all my projects. I just tried to keep the layout very clean and attractive.</p>',
            
            'description' => '<p>A personal website gives an opportunity to a developer to showcase their work to more people on the internet.</p><p><a href="http://engrmohit.com" target="_blank">engrmohit.com</a> is my personal website. It\'s a centralised place for all of my work.</p><p>I know the layout is not much fancy but my focus was just to have a site where I can showcase all my projects. I just tried to keep the layout very clean and attractive.</p><p>Before starting the work I needed to get some inspiration. So I jumped online and viewed some real portfolio examples.</p><p>I really got inspired with some of those real examples and started building my own site. I couldn\'t make it much fancy due to lack of time but I tried to keep it simple and attractive.</p><p>I also searched for portfolio website templates online. I found a lot of templates but I didn\'t like any of those. Suddenly I found the <a href="https://demo.bootstrapious.com/blackandwhite/2-0-1/" target="_blank">black &amp; white</a> template. I really liked it and immediately stopped searching for more. I downloaded it to build my portfolio website.</p><p>Though I used this template but, to be honest, I used its only the \'about\' page in my website. Everything except it has been designed by me. I had to change the font family as well because their default font was not giving a decent look to my content.</p><p>The site has been designed in the Bootstrap 5 framework. The front end has been built in vue.js while the back end is in Laravel. An API is built in Laravel to let the front end fetch the dynamic content.</p>',
            
            'thumbnail' => '\storage\uploads\images\projects\portfolio-00.png',
            'start_year'=> '2021',
            'end_year' => '2021'
        ]);
    }
}
