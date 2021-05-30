<?php

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
        
         //$this->call(SettingDatabasesSeeder::class);
         //$this->call(CategoryDatabaseSeeder::class);
         //$this->call(SubCategoryDatabaseSeeder::class);
         $this->call(StatesSeeder::class);
         $this->call(CommuneSeeder::class);

    }
}
