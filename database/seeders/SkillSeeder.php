<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run()
    {
        Skill::query()->insert(
            [
                ['title' => 'PHP'],
                ['title' => 'MySQL'],
                ['title' => 'Postgres'],
                ['title' => 'SCSS'],
                ['title' => 'ElasticSearch'],
                ['title' => 'Laravel'],
                ['title' => 'Symfony'],
                ['title' => 'Python'],
                ['title' => 'Java'],
            ]
        );
    }
}
