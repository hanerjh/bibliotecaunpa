<?php

use Illuminate\Database\Seeder;

class RecursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo_recursos')->insert([
            'titulo' => string('Base de datos de acceso restringido'),
            'recurso_id' => str_random(10).'@gmail.com',
            'estado' => bcrypt('secret'),
        ]);
    }
}
