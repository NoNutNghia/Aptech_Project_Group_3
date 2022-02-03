<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
        User::create([
            'username' => 'VertexAdmin',
            'password' => Hash::make('adminvertex123@'),
            'email' => 'nghia.nn.1867@aptechlearning.edu.vn',
            'email_verified_at' => Carbon::now(),
            'role_id' => 1,
            'phone' => '0969696969'
        ]);

        User::create([
            'username' => 'VertexUser',
            'password' => Hash::make('uservertex123@'),
            'email' => 'nghia.nn260701@gmail.com',
            'email_verified_at' => Carbon::now(),
            'role_id' => 2,
            'phone' => '0963636363'
        ]);
    }
}
