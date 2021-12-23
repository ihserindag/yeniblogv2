<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::insert([
            'email'=>'iserindag@msn.com',
            'telephone'=>'+9 0541 588 85 82',
            'adress'=>'Kolejtepe mah. 8 nolu sok. No:23 Yurtseven Apr. Kat:4 No:16 Gaziantep/Şahinbey ',
            'map'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1125.7345144179255!2d37.36436596725527!3d37.05610014600217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e13ced464e49%3A0xe127707b5b905005!2sGAZ%C4%B0%20ORTAOKULU!5e0!3m2!1str!2str!4v1639734555028!5m2!1str!2str"  style="border:0;" allowfullscreen="" width="100%" height="100%" loading="lazy"></iframe>',
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
    }
}
