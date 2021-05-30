<?php

use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wilayas = array(
		  array('id' => '1','code_postal' => '1','nom' => 'Adrar'),
		  array('id' => '2','code_postal' => '2','nom' => 'Chlef'),
		  array('id' => '3','code_postal' => '3','nom' => 'Laghouat'),
		  array('id' => '4','code_postal' => '4','nom' => 'Oum El Bouaghi'),
		  array('id' => '5','code_postal' => '5','nom' => 'Batna'),
		  array('id' => '6','code_postal' => '6','nom' => 'Béjaïa'),
		  array('id' => '7','code_postal' => '7','nom' => 'Biskra'),
		  array('id' => '8','code_postal' => '8','nom' => 'Béchar'),
		  array('id' => '9','code_postal' => '9','nom' => 'Blida'),
		  array('id' => '10','code_postal' => '10','nom' => 'Bouira'),
		  array('id' => '11','code_postal' => '11','nom' => 'Tamanrasset'),
		  array('id' => '12','code_postal' => '12','nom' => 'Tébessa'),
		  array('id' => '13','code_postal' => '13','nom' => 'Tlemcen'),
		  array('id' => '14','code_postal' => '14','nom' => 'Tiaret'),
		  array('id' => '15','code_postal' => '15','nom' => 'Tizi Ouzou'),
		  array('id' => '16','code_postal' => '16','nom' => 'Alger'),
		  array('id' => '17','code_postal' => '17','nom' => 'Djelfa'),
		  array('id' => '18','code_postal' => '18','nom' => 'Jijel'),
		  array('id' => '19','code_postal' => '19','nom' => 'Sétif'),
		  array('id' => '20','code_postal' => '20','nom' => 'Saïda'),
		  array('id' => '21','code_postal' => '21','nom' => 'Skikda'),
		  array('id' => '22','code_postal' => '22','nom' => 'Sidi Bel Abbès'),
		  array('id' => '23','code_postal' => '23','nom' => 'Annaba'),
		  array('id' => '24','code_postal' => '24','nom' => 'Guelma'),
		  array('id' => '25','code_postal' => '25','nom' => 'Constantine'),
		  array('id' => '26','code_postal' => '26','nom' => 'Médéa'),
		  array('id' => '27','code_postal' => '27','nom' => 'Mostaganem'),
		  array('id' => '28','code_postal' => '28','nom' => 'M\'Sila'),
		  array('id' => '29','code_postal' => '29','nom' => 'Mascara'),
		  array('id' => '30','code_postal' => '30','nom' => 'Ouargla'),
		  array('id' => '31','code_postal' => '31','nom' => 'Oran'),
		  array('id' => '32','code_postal' => '32','nom' => 'El Bayadh'),
		  array('id' => '33','code_postal' => '33','nom' => 'Illizi'),
		  array('id' => '34','code_postal' => '34','nom' => 'Bordj Bou Arreridj'),
		  array('id' => '35','code_postal' => '35','nom' => 'Boumerdès'),
		  array('id' => '36','code_postal' => '36','nom' => 'El Tarf'),
		  array('id' => '37','code_postal' => '37','nom' => 'Tindouf'),
		  array('id' => '38','code_postal' => '38','nom' => 'Tissemsilt'),
		  array('id' => '39','code_postal' => '39','nom' => 'El Oued'),
		  array('id' => '40','code_postal' => '40','nom' => 'Khenchela'),
		  array('id' => '41','code_postal' => '41','nom' => 'Souk Ahras'),
		  array('id' => '42','code_postal' => '42','nom' => 'Tipaza'),
		  array('id' => '43','code_postal' => '43','nom' => 'Mila'),
		  array('id' => '44','code_postal' => '44','nom' => 'Aïn Defla'),
		  array('id' => '45','code_postal' => '45','nom' => 'Naâma'),
		  array('id' => '46','code_postal' => '46','nom' => 'Aïn Témouchent'),
		  array('id' => '47','code_postal' => '47','nom' => 'Ghardaïa'),
		  array('id' => '48','code_postal' => '48','nom' => 'Relizane')
		);
		DB::table('states')->insert($wilayas);
    }
}
