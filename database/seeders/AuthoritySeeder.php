<?php

namespace Database\Seeders;

use App\Models\Authority;
use Illuminate\Database\Seeder;

class AuthoritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Authority::insert((['name'=>'Admin']));
        Authority::insert((['name'=>'Moderatör']));
        Authority::insert((['name'=>'Kullanıcı']));
    }
}
