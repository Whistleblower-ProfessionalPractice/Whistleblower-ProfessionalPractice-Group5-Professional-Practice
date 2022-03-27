<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users=[
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$r/CJQ12pWAJ.hiMwdFbU9egmrZRZFENg.hfr3MD.PvYL6WwNrtD0C',
            ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
