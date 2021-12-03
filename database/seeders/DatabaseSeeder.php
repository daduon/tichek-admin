<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            CategoriesTableSeeder::class,
            DataRowsTableSeeder::class,
            DataTypesTableSeeder::class,
            MenuItemsTableSeeder::class,
            PagesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            PermissionsTableSeeder::class,
            PostsTableSeeder::class,
            SettingsTableSeeder::class,
            TranslationsTableSeeder::class,
            VoyagerDatabaseSeeder::class,
            VoyagerDummyDatabaseSeeder::class,
        ]);
    }
}
