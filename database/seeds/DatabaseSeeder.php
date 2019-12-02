<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => Str::random(10),
            'kelas' => Str::random(10),
            'keterangan' => Str::random(10),
        ]);
    }
}
