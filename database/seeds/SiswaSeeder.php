<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Siswa::class, 50)->create()->each(function ($siswa) {
            $siswa->posts()->save(factory(App\Post::class)->make());
        });
    }
}
