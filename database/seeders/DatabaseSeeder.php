<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Employment;
use App\Models\Contact;
use App\Models\SocialMedia;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Skill::truncate();
        Education::truncate();
        Employment::truncate();
  	    Contact::truncate();
        SocialMedia::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Skill::factory()->count(2)->create();
        Education::factory()->count(3)->create();
        Employment::factory()->count(3)->create();
        Contact::factory()->count(3)->create();
 	    SocialMedia::factory()->count(3)->create();
            
    }
}
