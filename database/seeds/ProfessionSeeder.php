<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREING_KEY_CHECKS = 0');
        DB::table('profession')->truncate();
        DB::statement('SET FOREING_KEY_CHECKS = 1');

       DB::table('profession')->insert([
        'title' => 'Desarrolador Back-end developer',
       ]);
        
        DB::table('profession')->insert([
            'title' => 'Desarrolador Front-end developer',
           ]);
            

           DB::table('profession')->insert([
            'title' => 'Desarrolador Web',
           ]);

           DB::table('profession')->insert([
            'title' => 'Diseñador Grafico',
           ]);

           DB::table('profession')->insert([
            'title' => 'Administrador',
           ]);

           DB::table('profession')->insert([
            'title' => 'Consultor Profesional',
           ]);

           DB::table('profession')->insert([
            'title' => 'Database_developer',
           ]);

           DB::table('profession')->insert([
            'title' => 'Diseñador Database',
           ]);

           DB::table('profession')->insert([
            'title' => 'Administrador de Personal',
           ]);

           DB::table('profession')->insert([
            'title' => 'Profesional Database',
           ]);
    }
}
