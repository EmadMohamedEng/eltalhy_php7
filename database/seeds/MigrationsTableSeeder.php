<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'migration' => '2018_04_19_123847_create_abouts_table',
                'batch' => 0,
            ),
            1 => 
            array (
                'migration' => '2018_04_19_123847_create_album_table',
                'batch' => 0,
            ),
            2 => 
            array (
                'migration' => '2018_04_19_123847_create_audio_table',
                'batch' => 0,
            ),
            3 => 
            array (
                'migration' => '2018_04_19_123847_create_book_photos_table',
                'batch' => 0,
            ),
            4 => 
            array (
                'migration' => '2018_04_19_123847_create_books_table',
                'batch' => 0,
            ),
            5 => 
            array (
                'migration' => '2018_04_19_123847_create_categories_table',
                'batch' => 0,
            ),
            6 => 
            array (
                'migration' => '2018_04_19_123847_create_contacts_table',
                'batch' => 0,
            ),
            7 => 
            array (
                'migration' => '2018_04_19_123847_create_messages_table',
                'batch' => 0,
            ),
            8 => 
            array (
                'migration' => '2018_04_19_123847_create_newsletters_table',
                'batch' => 0,
            ),
            9 => 
            array (
                'migration' => '2018_04_19_123847_create_password_resets_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'migration' => '2018_04_19_123847_create_permissions_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'migration' => '2018_04_19_123847_create_photos_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'migration' => '2018_04_19_123847_create_relations_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'migration' => '2018_04_19_123847_create_role_has_permissions_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'migration' => '2018_04_19_123847_create_roles_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'migration' => '2018_04_19_123847_create_scaffoldinterfaces_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'migration' => '2018_04_19_123847_create_sections_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'migration' => '2018_04_19_123847_create_settings_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'migration' => '2018_04_19_123847_create_sliders_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'migration' => '2018_04_19_123847_create_user_has_permissions_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'migration' => '2018_04_19_123847_create_user_has_roles_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'migration' => '2018_04_19_123847_create_users_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'migration' => '2018_04_19_123847_create_videos_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'migration' => '2018_04_19_123850_add_foreign_keys_to_audio_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'migration' => '2018_04_19_123850_add_foreign_keys_to_book_photos_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'migration' => '2018_04_19_123850_add_foreign_keys_to_photos_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'migration' => '2018_04_19_123850_add_foreign_keys_to_relations_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'migration' => '2018_04_19_123850_add_foreign_keys_to_role_has_permissions_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'migration' => '2018_04_19_123850_add_foreign_keys_to_sections_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'migration' => '2018_04_19_123850_add_foreign_keys_to_user_has_permissions_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'migration' => '2018_04_19_123850_add_foreign_keys_to_user_has_roles_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'migration' => '2018_04_19_123850_add_foreign_keys_to_videos_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}
