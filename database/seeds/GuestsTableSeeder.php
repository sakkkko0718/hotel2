<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '名無氏名',
            'address' => '奈良県磯城郡田原本町',
            'tel' => '0900000000',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '両津勘吉',
            'address' => '東京都葛飾区亀有',
            'tel' => '0900000000',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '中川さん',
            'address' => '静岡県のどこか',
            'tel' => '0900000000',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => 'ところ天の助',
            'address' => 'Bブロック基地',
            'tel' => '0900000000',
        ];
        DB::table('guests')->insert($param);
    }
}
