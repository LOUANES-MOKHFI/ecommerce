<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingDatabasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         Setting::setMany([
            'default_locale' => 'fr',
            'default_timezone' => 'Africa/Alger',
            'reviews_enabled' => true,
            'auto_approve_reviews' => true,
            'supported_currencies' => ['USD','DA','EUR'],
            'default_currency' => 'USD',
            'store_email'=>'admin@ecommerce.test',
            'search_engine'=>'mysql',
            'local_shipping_cost'=> 0,
            'outer_shipping_cost' => 0,
            'free_shipping_cost' => 0,
            'translatable' => [
                'store_name' => 'Q-Shop',
                'free_shipping_label' => 'Livraison gratuit',
                'local_label' => 'Livraison locale',
                'outer_label' => 'Livraison externe',
            ],

        ]);
    }
}
