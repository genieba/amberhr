<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'first_name' => 'Germaine',
            'last_name' => 'Lin',
            'full_name' => 'Germaine Lin',
            'email' => 'germaineLZY@gmail.com',
            'birth_date' => '1993-09-08',
            'start_date' => '2017-08-01',
            'annual_leave' => '14',
            'created_at' => '2018-08-20 12:00:00',
        ]);

        DB::table('offs')->insert([
            'employee_id' => '1',
            'off_given' => '2018-07-28',
            'days_off' => '1',
            'comments' => '50 cents festival',
            'created_at' => '2018-08-20 12:00:00',
        ]);

        DB::table('vacations')->insert([
            'employee_id' => '1',
            'leave_start' => '2017-12-22',
            'leave_end' => '2017-12-23',
            'days_leave' => '1',
            'created_at' => '2018-08-20 12:00:00',
        ]);

        DB::table('vacations')->insert([
            'employee_id' => '1',
            'leave_start' => '2018-03-26',
            'leave_end' => '2018-03-29',
            'days_leave' => '4',
            'created_at' => '2018-08-20 12:00:00',
        ]);

        DB::table('vacations')->insert([
            'employee_id' => '1',
            'leave_start' => '2018-07-13',
            'leave_end' => '2018-07-13',
            'days_leave' => '0.5',
            'created_at' => '2018-08-20 12:00:00',
        ]);

        DB::table('vacations')->insert([
            'employee_id' => '1',
            'leave_start' => '2018-09-05',
            'leave_end' => '2018-09-07',
            'days_leave' => '3',
            'created_at' => '2018-08-20 12:00:00',
        ]);
        
    }
}
