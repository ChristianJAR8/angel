<?php

use Illuminate\Database\Seeder;

class ejemplo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
            \DB::table('customers')->insert(array(
                'nombre' => $faker->firstNameFemale,
                'sabor'  => $faker->randomElement(['chocolate','vainilla','cheesecake']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
