<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'company_name' => 'Patricia',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Andela',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
