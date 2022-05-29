<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $insertions                  = [
            [
                'username'         => 'admin',
                'password'         => bcrypt('12345678'),
                'email'            => 'admin@domain.com',
                'name'             => 'Admin Life'
            ],
            [
                'username'         => 'johndoe',
                'password'         => bcrypt('12345678'),
                'email'            => 'johndoe@domain.com',
                'name'             => 'John Doe'
            ],
            [
                'username'         => 'vigo',
                'password'         => bcrypt('12345678'),
                'email'            => 'vigo@domain.com',
                'name'             => 'vigo mavy'
            ],
            [
                'username'         => 'lary',
                'password'         => bcrypt('12345678'),
                'email'            =>  'lary@domain.com',
                'name'             => 'lary Mat'
            ],
            [
                'username'         => 'dany',
                'password'         => bcrypt('12345678'),
                'email'            =>  'dany@domain.com',
                'name'             => 'Dany oliver'
            ],
        ];
        DB::table('users')->insert($insertions);

    }
}
