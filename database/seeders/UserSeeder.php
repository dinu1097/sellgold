<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $i = 0;
        while($i < 10)
        {
            DB::table('users')->insert([
                'name' => "dinnis",
                'email' => 'dinnis@gmail'.$i.'.com',
                'number'=> '982037919'.$i,
                'password' => '1234'.$i,
            ]);
            $i++;
        }
        
    }
}
