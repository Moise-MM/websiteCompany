<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\About;
use App\Models\Header;
use App\Models\Company;
use App\Models\ContactSection;
use App\Models\Project;
use App\Models\Service;
use App\Models\ItemProject;
use App\Models\ItemService;
use App\Models\ProjectImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        Header::factory()->create();
        About::factory()->create();
        Company::factory()->create();
        Project::factory()->create();
        Service::factory()->create();
        ItemProject::factory(6)->create();
        ItemService::factory(6)->create();
        ContactSection::factory()->create();
        ProjectImage::factory(6)->create();
    }
}
