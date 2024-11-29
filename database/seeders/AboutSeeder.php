<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aboutData = [
            [
                'name_uz' => 'Biz haqimizda',
                'name_ru' => 'О нас',
                'name_en' => 'About Us',
                'content_uz' => 'Bu biz haqimizda bo‘limidir.',
                'content_ru' => 'Это раздел о нас.',
                'content_en' => 'This is the about us section.',
                'description_uz' => 'Qo‘shimcha maʼlumot uchun biz bilan bog‘laning.',
                'description_ru' => 'Свяжитесь с нами для дополнительной информации.',
                'description_en' => 'Contact us for more information.',
                'image' => 'about_image_1.jpg', // Tasvir fayl nomi (agar mavjud bo'lsa)
            ]
        ];

        foreach ($aboutData as $about) {
            About::create($about);
        }
    }
}
