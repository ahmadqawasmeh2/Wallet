<?php

use Illuminate\Database\Seeder;
use App\Model\admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
        'name'     => "Admin",
        'email'    => "admin@gmail.com",
        'Password' => bcrypt(123456789)
    ]);
    }
}
