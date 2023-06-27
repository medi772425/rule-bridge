<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rules')->insert([
            'user_id' => 1,
            'if' => 'if 1',
            'then' => 'then 1',
            'description' => 'description 1'
        ]);

        DB::table('rules')->insert([
            'user_id' => 1,
            'if' => 'if 2',
            'then' => 'then 2',
            'description' => 'description 2'
        ]);

        DB::table('rules')->insert([
            'user_id' => 1,
            'if' => 'if 3',
            'then' => 'then 3',
            'description' => 'description 3'
        ]);
    }
}
