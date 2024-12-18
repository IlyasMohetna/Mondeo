<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LodgingTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lodging__type')->delete();
        
        \DB::table('lodging__type')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Hôtel',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Auberge',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Chambre d\'hôtes',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gîte',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Appartement de vacances',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Villa',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Camping',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Bungalow',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Chalet',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Résidence de tourisme',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Motel',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Riad',
                'created_at' => '2024-11-18 08:27:17',
                'updated_at' => '2024-11-18 08:27:17',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}