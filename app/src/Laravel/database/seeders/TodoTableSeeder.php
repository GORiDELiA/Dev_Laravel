<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $descriptions = ['JCBギフト券を換金する','ゼルダの伝説をする','conohaのVPSで立ち上げをする'];
        foreach ($descriptions as $description) {
            DB::table('todos')->insert([
                'user_id' => '0000',
                'descriptions' => $description,
                'start' => new Datetime(),
                'end' => new Datetime()
            ]);
        }  
    }
}
