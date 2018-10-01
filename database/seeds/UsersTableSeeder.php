<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = array();
        \App\User::create([
            'type' => 'admin',
            'name' => 'yaser darzi',
            'phone' => '09111160804',
            'email' => 'yaser.darzi@gmail.com',
            'username' => 'yaser.darzi',
            'password' => bcrypt('yaserdarzi'),
            'active' => 1,
            'type_phone' => '',
            'auto_charge' => '',
            'expire_at' => 0,
            'remember_token' => '',
            'info' => $json,
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\User::create([
            'type' => 'admin',
            'name' => 'aras armani',
            'phone' => '09359669592',
            'email' => 'aras.armani2014@gmail.com',
            'username' => 'aras.armani',
            'password' => bcrypt('01113293176'),
            'active' => 1,
            'type_phone' => '',
            'auto_charge' => '',
            'expire_at' => 0,
            'remember_token' => '',
            'info' => $json,
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\User::create([
            'type' => 'admin',
            'name' => 'zeinab yazdanpoor',
            'phone' => '09198699377',
            'email' => 'zeinabyazdanpoor@yahoo.com',
            'username' => 'zeinab.yazdanpoor',
            'password' => bcrypt('zyp2818'),
            'active' => 1,
            'type_phone' => '',
            'auto_charge' => '',
            'expire_at' => 0,
            'remember_token' => '',
            'info' => $json,
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Adana',
            'url' => 'Adana',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Adıyaman',
            'url' => 'Adıyaman',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Afyonkarahisar',
            'url' => 'Afyonkarahisar',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Ağrı',
            'url' => 'Ağrı',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Amasya',
            'url' => 'Amasya',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Ankara',
            'url' => 'Ankara',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Antalya',
            'url' => 'Antalya',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Artvin',
            'url' => 'Artvin',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Aydın',
            'url' => 'Aydın',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Balıkesir',
            'url' => 'Balıkesir',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Bilecik',
            'url' => 'Bilecik',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Bingöl',
            'url' => 'Bingöl',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Bitlis',
            'url' => 'Bitlis',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Bolu',
            'url' => 'Bolu',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Burdur',
            'url' => 'Burdur',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Bursa',
            'url' => 'Bursa',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Çanakkale',
            'url' => 'Çanakkale',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Çankırı',
            'url' => 'Çankırı',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Çorum',
            'url' => 'Çorum',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Denizli',
            'url' => 'Denizli',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Diyarbakır',
            'url' => 'Diyarbakır',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Edirne',
            'url' => 'Edirne',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Elazığ',
            'url' => 'Elazığ',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Erzincan',
            'url' => 'Erzincan',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Erzurum',
            'url' => 'Erzurum',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Eskişehir',
            'url' => 'Eskişehir',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Gaziantep',
            'url' => 'Gaziantep',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Giresun',
            'url' => 'Giresun',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Gümüşhane',
            'url' => 'Gümüşhane',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Hakkâri',
            'url' => 'Hakkâri',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Hatay',
            'url' => 'Hatay',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Isparta',
            'url' => 'Isparta',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Mersin',
            'url' => 'Mersin',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'İstanbul',
            'url' => 'İstanbul',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'İzmir',
            'url' => 'İzmir',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kars',
            'url' => 'Kars',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kastamonu',
            'url' => 'Kastamonu',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kayseri',
            'url' => 'Kayseri',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kırklareli',
            'url' => 'Kırklareli',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kırşehir',
            'url' => 'Kırşehir',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kocaeli',
            'url' => 'Kocaeli',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Konya',
            'url' => 'Konya',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kütahya',
            'url' => 'Kütahya',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Malatya',
            'url' => 'Malatya',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Manisa',
            'url' => 'Manisa',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kahramanmaraş',
            'url' => 'Kahramanmaraş',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Mardin',
            'url' => 'Mardin',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Muğla',
            'url' => 'Muğla',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Muş',
            'url' => 'Muş',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Nevşehir',
            'url' => 'Nevşehir',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Niğde',
            'url' => 'Niğde',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Ordu',
            'url' => 'Ordu',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Rize',
            'url' => 'Rize',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Sakarya',
            'url' => 'Sakarya',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Samsun',
            'url' => 'Samsun',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Siirt',
            'url' => 'Siirt',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Sinop',
            'url' => 'Sinop',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Sivas',
            'url' => 'Sivas',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Tekirdağ',
            'url' => 'Tekirdağ',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Tokat',
            'url' => 'Tokat',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'البرز',
            'url' => 'البرز',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Trabzon',
            'url' => 'Trabzon',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Tunceli',
            'url' => 'Tunceli',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Şanlıurfa',
            'url' => 'Şanlıurfa',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Uşak',
            'url' => 'Uşak',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Van',
            'url' => 'Van',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Yozgat',
            'url' => 'Yozgat',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Zonguldak',
            'url' => 'Zonguldak',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Aksaray',
            'url' => 'Aksaray',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Bayburt',
            'url' => 'Bayburt',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Karaman',
            'url' => 'Karaman',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kırıkkale',
            'url' => 'Kırıkkale',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Batman',
            'url' => 'Batman',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Şırnak',
            'url' => 'Şırnak',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Bartın',
            'url' => 'Bartın',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Ardahan',
            'url' => 'Ardahan',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Iğdır',
            'url' => 'Iğdır',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Yalova',
            'url' => 'Yalova',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Karabük',
            'url' => 'Karabük',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Kilis',
            'url' => 'Kilis',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Osmaniye',
            'url' => 'Osmaniye',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
        \App\State::create([
            'title' => 'Düzce',
            'url' => 'Düzce',
            'updated_at' => strtotime(now()),
            'created_at' => strtotime(now()),
            'type_row' => 1
        ]);
    }
}
