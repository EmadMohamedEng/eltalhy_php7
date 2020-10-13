<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@ivas.com.eg',
                'password' => '$2y$10$Gd0UbcOiIpVmX1iTup7GeuS7VtvXeRGjU8saEm6Bb5N1rgdfFIHr.',
                'remember_token' => 'ulPH8Ze62j8JNFx2k0uYJ08diWTE4i8Prio7FX25yfGlF8F9y0LXis8CB4j5',
                'created_at' => NULL,
                'updated_at' => '2017-07-26 10:56:03',
            ),
        ));
        
        
    }
}
