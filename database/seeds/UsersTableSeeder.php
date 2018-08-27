<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$users = factory(App\User::class, 3)->create();
        
        DB::table('users')->insert([
            'name' => 'Jackie Yeo',
            'email' => 'jackie@ambercreative.sg',
            'password' => bcrypt('nova2323'),
        ]);
    }
}
