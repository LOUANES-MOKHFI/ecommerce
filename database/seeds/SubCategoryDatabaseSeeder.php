<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class SubCategoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class,10)->create([
            'parent_id' => $this->getRandomParentId()
        ]);
    }

    public function getRandomParentId(){
        return \App\Models\Category::inRandomOrder()->first();
    }
}
