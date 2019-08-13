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
        factory(webCS\User::class,29)->create();
        
        webCS\User::create([
            'name'=>'Lehi Quincho',
            'email'=>'lqmyacs@gmail.com',
            'password' => bcrypt('secret'),
        ]);

    }
}
