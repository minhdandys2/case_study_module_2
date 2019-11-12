<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones = new \App\Phone();

        $phones->name = 'iphone 15';
        $phones->color = 'red';
        $phones->ram = '4';
        $phones->internal_memory = '64';
        $phones->sim = '2';
        $phones->screen_size = '6.5';
        $phones->price = '20000';
        $phones->image = 'images/anh3.gif';
        $phones->save();
    }
}
