<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vacancy;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vacancyData = [
            [
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
            ],
            [
                'name_uz' => 'Dizayner',
                'name_ru' => 'Дизайнер',
                'name_en' => 'Designer',
                'title_uz' => 'Grafik dizayner kerak',
                'title_ru' => 'Требуется графический дизайнер',
                'title_en' => 'Graphic Designer Needed',
                'content_uz' => 'Grafik dizayn sohasida tajribaga ega bo‘lgan mutaxassis qidiryapmiz.',
                'content_ru' => 'Ищем специалиста с опытом работы в области графического дизайна.',
                'content_en' => 'We are looking for a specialist with experience in graphic design.',
                'image' => 'vacancy_image_2.jpg',
                'date' => now(),
                'status' => 'inactive',
            ],
        ];

        foreach ($vacancyData as $vacancy) {
            Vacancy::create($vacancy);
        }
    }
}
