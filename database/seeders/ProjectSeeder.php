<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {
            $new_project = new Project();
            $new_project->project_title = $faker->sentence();
            $new_project->customer_name = $faker->company() . ' ' . $faker->companySuffix();
            $new_project->description = $faker->text();
            $new_project->slug = Str::slug($new_project->project_title, '-');
            $new_project->save();
        }
    }
}
