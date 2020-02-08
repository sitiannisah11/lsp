<?php

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
        \App\User::truncate();

        $d = new \App\User;
        $d->name = "Nisa";
        $d->email = "sa@gmail.com";
        $d->password = \Hash::make("123");
        $d->level = "Admin Utama";

        $d->save();
    }
}
