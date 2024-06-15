<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name'      => 'Sandi',
            'username'  => 'sandi-chan',
            'email'     => 'sandi@gmail.com',
            'password'  =>  bcrypt('12345'),
            'level'     =>  'Admin'
        ];
        User::create($data);
    }
}
