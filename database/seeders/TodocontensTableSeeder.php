<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodocontensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 6 ; $i++) {
            $param = [
                'content' => 'test'.$i,
            ];
            DB::table('todocontents')->insert($param);
        };
    }
}
