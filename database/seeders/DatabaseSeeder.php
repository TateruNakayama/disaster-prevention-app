<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('quiz')->insert([
            'quiz_detail' => '1吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '2吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'no',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '3吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '4吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '5吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '6吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '7吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '8吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '9吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '10吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '11吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '12吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);

        DB::table('quiz')->insert([
            'quiz_detail' => '13吾輩は猫である。名前はまだない。どこで生れたか頓と見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。',
            'quiz_answer' => 'yes',
        ]);
    }
}
