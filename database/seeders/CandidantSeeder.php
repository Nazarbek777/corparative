<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidant;
use App\Models\Vacancy;

class CandidantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vacancy = Vacancy::first() ?? Vacancy::create([
            'name_uz' => 'Dasturchi',
            'name_ru' => 'Программист',
            'name_en' => 'Developer',
            'title_uz' => 'PHP dasturchi kerak',
            'title_ru' => 'Требуется PHP программист',
            'title_en' => 'PHP Developer Needed',
            'content_uz' => 'PHP dasturlash tilini mukammal bilgan mutaxassis qidiryapmiz.',
            'content_ru' => 'Ищем специалиста, который отлично знает язык программирования PHP.',
            'content_en' => 'We are looking for a specialist who knows PHP programming language perfectly.',
            'image' => 'vacancy_image_1.jpg',
            'date' => now(),
            'status' => 'active',
        ]);

        $candidants = [
            [
                'vacancy_id' => $vacancy->id,
                'name' => 'Ali Valiyev',
                'email' => 'ali@example.com',
                'brith_date' => '1990-05-15',
                'phone' => '+998901234567',
                'comment' => 'Men bu lavozimga qiziqyapman va tajribam yuqori darajada.',
                'resume_file' => 'resume_ali.pdf',
                'status' => 'pending',
            ],
            [
                'vacancy_id' => $vacancy->id,
                'name' => 'Olim Karimov',
                'email' => 'olim@example.com',
                'brith_date' => '1992-08-25',
                'phone' => '+998901234568',
                'comment' => 'Menning tajribam ushbu lavozimga mos keladi.',
                'resume_file' => 'resume_olim.pdf',
                'status' => 'approved',
            ],
        ];

        foreach ($candidants as $candidant) {
            Candidant::create($candidant);
        }
    }
}
