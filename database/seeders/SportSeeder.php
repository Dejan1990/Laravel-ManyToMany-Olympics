<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sport::insert($this->sports());
    }

    private function sports()
    {
        return [
            [
                'name' => 'Basketball'
            ],
            [
                'name' => 'Weightlifting'
            ],
            [
                'name' => 'Tennis'
            ],
            [
                'name' => 'Swimming'
            ],
            [
                'name' => 'Rowing'
            ]
        ];
    }
}
