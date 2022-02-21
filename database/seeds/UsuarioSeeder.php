<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Luis Angel',
            'email' => 'correo@correo.com',
            'password' => Hash::make('luis120599'),
            'url' => 'https://google.com',
        ]);


        User::create([
            'name' => 'Luis Alfonso',
            'email' => 'correo2@correo.com',
            'password' => Hash::make('luis120599'),
            'url' => 'https://google.com',
        ]);

        // DB::table('users' )->insert([
        //     'name' => 'Luis Angel',
        //     'email' => 'correo@correo.com',
        //     'password' => Hash::make('luis120599'),
        //     'url' => 'https://google.com',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
        
    }
}
