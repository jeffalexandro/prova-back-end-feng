<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $form_id = DB::table('forms')->insertGetId([
            'name' => "Teste de desenvolvimento",
            'description' => "Teste para desenvolvedor back-end",
            'category' => "Testes",
            'basePoints' => 100,
            'startDate' => "2018-02-15 00:00:00",
            'endDate' => "2018-02-22 00:00:00",
            'isActive' => 1,
            'alreadyAnswered' => 0,
            'created_at' => Carbon::now(),            
        ]);

        DB::table('questions')->insert(
            [
                [
                    'form_id' => $form_id,
                    'text' => "Qual o seu nome?",
                    'type' => "text",
                    'created_at' => Carbon::now(),
                ],
                [
                    'form_id' => $form_id,
                    'text' => "Para qual área você está aplicando?",
                    'type' => "select",
                    'created_at' => Carbon::now(),
                ]
            ]
        );

        DB::table('options')->insert(
            [
                [
                    'question_id' => 2,
                    'text' => "Front-end",
                    'value' => "front-end",
                    'created_at' => Carbon::now(),
                ],
                [
                    'question_id' => 2,
                    'text' => "Back-end",
                    'value' => "back-end",
                    'created_at' => Carbon::now(),
                ]
            ]
        );        
    }
}
