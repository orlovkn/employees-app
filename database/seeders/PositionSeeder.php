<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run()
    {
        Position::query()->insert(
            [
                ['title' => 'CEO'],
                ['title' => 'Backend Developer'],
                ['title' => 'Frontend Developer'],
                ['title' => 'Designer'],
                ['title' => 'QA'],
                ['title' => 'PM'],
            ]
        );
    }
}
