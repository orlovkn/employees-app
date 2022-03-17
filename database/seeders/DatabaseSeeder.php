<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PositionSeeder::class);
        $this->call(SkillSeeder::class);

        $skills = Skill::all();
        $positions = Position::all();

        User::factory(15)->create()->each(function (User $user) use ($skills, $positions) {
            $user->skills()->attach(
                $skills->random(rand(2, 5))->pluck('id')->toArray()
            );

            $user->positions()->attach(
                $positions->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
    }
}
