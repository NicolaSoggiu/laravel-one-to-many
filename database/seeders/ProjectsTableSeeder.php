<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            Project::create([
                'type_id' => rand(1, 3),
                'title' => $faker->sentence(),
                'url_image'=> $faker->imageUrl(640, 480, 'animals', true),
                'repo'=>  $faker->word(),
                'languages'=> $faker->sentence(),
                'description'=> $faker->paragraph(),
            ]);
        }
    }
}