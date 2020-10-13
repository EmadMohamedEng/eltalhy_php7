<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
        $this->call('AboutsTableSeeder');
        $this->call('AlbumTableSeeder');
        $this->call('AudioTableSeeder');
        $this->call('BooksTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('ContactsTableSeeder');
        $this->call('MessagesTableSeeder');
        $this->call('MigrationsTableSeeder');
        $this->call('NewslettersTableSeeder');
        $this->call('PasswordResetsTableSeeder');
        $this->call('PermissionsTableSeeder');
        $this->call('PhotosTableSeeder');
        $this->call('SectionsTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('SlidersTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('VideosTableSeeder');
        $this->call('BookPhotosTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('ScaffoldinterfacesTableSeeder');

        $this->call('UserHasPermissionsTableSeeder');
        $this->call('UserHasRolesTableSeeder');

        $this->call('RelationsTableSeeder');
        $this->call('RoleHasPermissionsTableSeeder');



    }
}
