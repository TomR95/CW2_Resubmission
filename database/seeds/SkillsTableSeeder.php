<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
        ['id' => 1, 'title' => "Question 1", 'detail' => "Do you think questionnaires are a good method for research?", 'yes/no' => 2 ],
        ['id' => 2, 'title' => "Question 2", 'detail' => "Do you prefer filling in a questionnaire online or on paper?", 'yes/no' => 4 ],
        ['id' => 3, 'title' => "Question 3", 'detail' => "Do you like questionnaires?", 'yes/no' => 4 ],
        ['id' => 3, 'title' => "Question 4", 'detail' => "Would you consider using this site to create a survey in the future?", 'yes/no' => 4 ],
        ['id' => 3, 'title' => "Question 5", 'detail' => "Do you feel that the online survey creation web application market has become too oversaturated?", 'yes/no' => 4 ],


        ]);
    }
}
