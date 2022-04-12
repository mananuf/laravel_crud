<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //bauchi
        State::create([
            'state'=>'Bauchi',
            'capital'=>'Bauchi',
        ]);

        //Plateau
        State::create([
            'state'=>'Plateau',
            'capital'=>'Jos',
        ]);

        //Abia
        State::create([
            'state'=>'Abia',
            'capital'=>'Umuahia',
        ]);

        //Adamawa
        State::create([
            'state'=>'Adamawa',
            'capital'=>'Yola',
        ]);

        //AKWA-Ibom
        State::create([
            'state'=>'AKWA-Ibom',
            'capital'=>'Uyo',
        ]);
    }
}
