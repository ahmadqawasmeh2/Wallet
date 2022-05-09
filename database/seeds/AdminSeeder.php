<?php

use Illuminate\Database\Seeder;
use App\Model\admin;
use App\Model\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name'     => "Admin",
        'email'    => "admin@gmail.com",
        'phonenumber' => "0795392856",
        'birthdate' => "10-9-1997",
        'image' => "noimage.jpg",
        'Password' => bcrypt(123456789)
    ]);
    }
}
