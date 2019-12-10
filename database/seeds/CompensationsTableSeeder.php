<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompensationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compensations')->insert([
            'location' => 'lagos/Nigeria',
            'certification'=> 'Bsc',
            'gender' => 'both',
            'monthly_salary'=>150000,
            'yearly_salary' => 1800000,
            'bonus' => 20000,
            'year_of_exp' => 1,
            'year_at_comp' => 0,
            'company_id' => 1,
            'title_id'=> 1,
            'level_id'=> 1,
            'total'=>1820000,
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('compensations')->insert([
            'location' => 'lagos/Nigeria',
            'certification'=> 'Bsc',
            'gender' => 'both',
            'monthly_salary'=>300000,
            'yearly_salary' => 3600000,
            'bonus' => 30000,
            'year_of_exp' => 3,
            'year_at_comp' => 0,
            'company_id' => 2,
            'title_id'=> 1,
            'level_id'=> 2,
            'total'=> 3630000,
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('compensations')->insert([
            'location' => 'lagos/Nigeria',
            'certification'=> 'Bsc',
            'gender' => 'both',
            'monthly_salary'=>200000,
            'yearly_salary' => 2400000,
            'bonus' => 20000,
            'year_of_exp' => 3,
            'year_at_comp' => 0,
            'company_id' => 1,
            'title_id'=> 1,
            'level_id'=> 2,
            'total'=> 2420000,
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('compensations')->insert([
            'location' => 'lagos/Nigeria',
            'certification'=> 'Bsc',
            'gender' => 'both',
            'monthly_salary'=>500000,
            'yearly_salary' => 6000000,
            'bonus' => 50000,
            'year_of_exp' => 5,
            'year_at_comp' => 0,
            'company_id' => 2,
            'title_id'=> 1,
            'level_id'=> 3,
            'total'=> 6050000,
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
