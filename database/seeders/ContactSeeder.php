<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'address_uz' => 'Toshkent shahri, Amir Temur ko‘chasi, 12',
            'address_ru' => 'Город Ташкент, улица Амира Темура, 12',
            'address_en' => 'Tashkent city, Amir Temur street, 12',
            'email' => 'info@example.com',
            'phone1' => '+998901234567',
            'phone2' => '+998937654321',
            'facebook' => 'https://facebook.com/example',
            'instagram' => 'https://instagram.com/example',
            'telegram' => 'https://t.me/example',
            'youtube' => 'https://youtube.com/example',
        ]);
    }
}
