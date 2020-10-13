<?php

use Illuminate\Database\Seeder;

class RelationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('relations')->delete();
        
        \DB::table('relations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'scaffoldinterface_id' => 2,
                'to' => '1',
                'having' => 'OneToMany',
                'created_at' => '2017-04-10 09:08:37',
                'updated_at' => '2017-04-10 09:08:37',
            ),
            1 => 
            array (
                'id' => 2,
                'scaffoldinterface_id' => 3,
                'to' => '1',
                'having' => 'OneToMany',
                'created_at' => '2017-04-10 09:09:56',
                'updated_at' => '2017-04-10 09:09:56',
            ),
            2 => 
            array (
                'id' => 3,
                'scaffoldinterface_id' => 10,
                'to' => '9',
                'having' => 'OneToMany',
                'created_at' => '2017-04-10 09:28:10',
                'updated_at' => '2017-04-10 09:28:10',
            ),
        ));
        
        
    }
}
