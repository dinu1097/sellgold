<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class Orders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        while($i <= 10)
        {
            DB::table('orders')->insert([
                'user_id' => $i,
                'amount' => '200',
                'grams' => '10',
                'buysell'=> 'buy',
                'status' => 'pending',
            ]);
            $i++;
        }
    }
}
