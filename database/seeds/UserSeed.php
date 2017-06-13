<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::truncate();

        $users = [
            ['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => bcrypt('123mudar')]
        ];
        
        foreach($users as $user) {
            App\User::create($user)->save();
        }

    }
}
