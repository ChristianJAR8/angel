<?php

use App\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call('customers');

        Schema::disableForeignKeyConstraints();
        //Customer::truncate();
        factory(App\Product::class,100)->create();

    }
}
