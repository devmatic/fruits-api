<?php

use App\Fruit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class FruitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('fruits')->delete();

        $fruits = array(
            ['name' => 'apple', 'color' => 'green', 'weight' => 150, 'delicious' => true],
            ['name' => 'banana', 'color' => 'yellow', 'weight' => 116, 'delicious' => true],
            ['name' => 'strawberries', 'color' => 'red', 'weight' => 12, 'delicious' => true],
        );

        // Loop through each Fruit above and create the record for them in the database
        foreach ($fruits as $fruit)
        {
            Fruit::create($fruit);
        }

        Model::reguard();
    }
}
