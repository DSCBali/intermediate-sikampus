<?php

use Illuminate\Database\Seeder;
use App\Staff;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Staff::create([
          'name'    => 'surya herdiyanto',
          'dob'     => '1998-03-20',
          'genre'   => 1,
          'phone'   => '089605622619',
          'username'=> 'surya',
          'password'=> 'surya80'
        ]);
    }
}
