<?php

use App\User;
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
        factory(App\User::class, 10)->create();
        factory(App\User::class)->create(['name' => 'Keanu Buschbacher', 'email' => 'keanu.buschbacher@gmail.com']);
    }
}
