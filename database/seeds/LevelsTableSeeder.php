<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'title_id' => 1,
            'level'=> 'junior',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('levels')->insert([
            'title_id' => 1,
            'level'=> 'intermediate',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('levels')->insert([
            'title_id' => 1,
            'level'=> 'senior',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
