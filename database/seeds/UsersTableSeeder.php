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
        $users = [
            [
                'name' => 'Zulfa Juniadi',
                'email' => 'zulfajuniadi@gmail.com',
                'password' => app('hash')->make('abcd1234'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

    }
}
