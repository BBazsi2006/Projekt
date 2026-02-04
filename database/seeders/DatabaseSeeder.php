<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ember;
use App\Models\AdomanyNev;
use App\Models\Anyag;
use App\Models\Alapitvany;
use App\Models\Adomanyozo;
use App\Models\Adomany;
use App\Models\Kiszallitas;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $emberek = ['alapitvany', 'adomanyozo'];
        foreach ($emberek as $value) {
            Ember::create([
                'kategoria' => $value
            ]);
        }

        $adomany = ['Ruhacsomag', 'Élelmiszer', 'Játék', 'Takaró', 'Higiéniai csomag', 'Elsősegély készlet', 'Bútor', 'Könyvcsomag', 'Laptop', 'Iskolai csomag'];
        foreach ($adomany as $key => $value) {
            AdomanyNev::create([
                'nev'=>$value
            ]);
        }

        $anyag = ['Textil', 'Műanyag', 'Fa', 'Papír', 'Fém', 'Tartós élelmiszer', 'Elektronika', 'Üveg', 'Karton', 'Egyéb'];
        foreach ($anyag as $key => $value) {
            Anyag::create([
                'nev' => $value
            ]);
        }

        $alapitvanyok=
        [
            [
                'cegnev'=>'Remény Hídja Alapítvány',
                'helyszin'=>'Budapest',
                'telszam'=>'36301234567',
                'email'=>'kapcsolat@remenyi-hidja.hu',
                'jelszo'=>'1234',
                'ember'=>1
            ],
            [
                'cegnev' => 'Zöld Jövő Egyesület',
                'helyszin' => 'Debrecen',
                'telszam' => '+36302345678',
                'email' => 'info@zoldjovo.hu',
                'jelszo'=>'',
                'ember' => 1
            ],
            [
                'cegnev' => 'GyermekMosoly Alapítvány',
                'helyszin' => 'Szeged',
                'telszam' => '+36303456789',
                'email' => 'hello@gyermekmosoly.hu',
                'jelszo'=>'',
                'ember' => 1
            ],
            [
                'cegnev' => 'Mancsmentő Alapítvány',
                'helyszin' => 'Pécs',
                'telszam' => '+36304567890',
                'email' => 'segitseg@mancsmento.hu',
                'jelszo'=>'',
                'ember' => 1
            ],
            [
                'cegnev' => 'Mindennapi Kenyér Alapítvány',
                'helyszin' => 'Győr',
                'telszam' => '+36305678901',
                'email' => 'iroda@mindennapikenyer.hu',
                'jelszo'=>'',
                'ember' => 1
            ],
            [
                'cegnev' => 'Esély a Holnapért',
                'helyszin' => 'Miskolc',
                'telszam' => '+36306789012',
                'email' => 'info@eselyaholnapert.hu',
                'jelszo'=>'',
                'ember' => 1
            ],
            [
                'cegnev' => 'Új Élet Alapítvány',
                'helyszin' => 'Kecskemét',
                'telszam' => '+36307890123',
                'email' => 'kapcsolat@uj-elet.hu',
                'jelszo'=>'',
                'ember' => 1
            ],
            [
                'cegnev' => 'Biztonságos Otthon',
                'helyszin' => 'Székesfehérvár',
                'telszam' => '+36308901234',
                'email' => 'info@biztonsagosotthon.hu',
                'jelszo'=>'',
                'ember' => 1
            ],
            [
                'cegnev' => 'Tiszta Forrás Egyesület',
                'helyszin' => 'Nyíregyháza',
                'telszam' => '+36309012345',
                'email' => 'iroda@tisztaforras.hu',
                'jelszo'=>'',
                'ember' => 1
            ],
            [
                'cegnev' => 'Szívvel-Lélekkel Alapítvány',
                'helyszin' => 'Eger',
                'telszam' => '+36301122334',
                'email' => 'hello@szivvellelekkel.hu',
                'jelszo'=>'',
                'ember' => 1
            ]
            

        ];


        foreach ($alapitvanyok as $value) {
            Alapitvany::create([
                'cegnev'   => $value['cegnev'],
                'helyszin' => $value['helyszin'],
                'telszam'  => $value['telszam'],
                'email'    => $value['email'],
                'jelszo'   => $value['jelszo'],
                'ember'    => $value['ember'],
        ]);

        }

        $adomanyozok = [
            [
                'nev' => 'Kiss Anna',
                'email' => 'kiss.anna@gmail.com',
                'jelszo' => 'BlueSky24',
                'emberId' => 2
            ],
            [
                'nev' => 'Nagy Péter',
                'email' => 'nagy.peter@gmail.com',
                'jelszo' => 'River89',
                'emberId' => 2
            ],
            [
                'nev' => 'Szabó Lilla',
                'email' => 'szabo.lilla@gmail.com',
                'jelszo' => 'Green77',
                'emberId' => 2
            ],
            [
                'nev' => 'Tóth Márk',
                'email' => 'toth.mark@gmail.com',
                'jelszo' => 'Stone2023',
                'emberId' => 2
            ],
            [
                'nev' => 'Varga Eszter',
                'email' => 'varga.eszter@gmail.com',
                'jelszo' => 'Moon91',
                'emberId' => 2
            ],
            [
                'nev' => 'Kovács Bence',
                'email' => 'kovacs.bence@gmail.com',
                'jelszo' => 'Cloud88',
                'emberId' => 2
            ],
            [
                'nev' => 'Horváth Dóra',
                'email' => 'horvath.dora@gmail.com',
                'jelszo' => 'Sun1995',
                'emberId' => 2
            ],
            [
                'nev' => 'Molnár Gergő',
                'email' => 'molnar.gergo@gmail.com',
                'jelszo' => 'Hill90',
                'emberId' => 2
            ],
            [
                'nev' => 'Farkas Zsófia',
                'email' => 'farkas.zsofia@gmail.com',
                'jelszo' => 'Light2022',
                'emberId' => 2
            ],
            [
                'nev' => 'Balogh Tamás',
                'email' => 'balogh.tamas@gmail.com',
                'jelszo' => 'Road85',
                'emberId' => 2
            ],
        ];

       foreach ($adomanyozok as $value) {
        Adomanyozo::create([
            'nev'     => $value['nev'],
            'email'   => $value['email'],
            'jelszo'  => $value['jelszo'],
            'ember' => $value['emberId'],
        ]);

       }

        $adomanyok = [
            [
                'darabszam' => 5,
                'adomanyNev' => 1,
                'anyag' => 1,
            ],
            [
                'darabszam' => 10,
                'adomanyNev' => 2,
                'anyag' => 6,
            ],
            [
                'darabszam' => 3,
                'adomanyNev' => 3,
                'anyag' => 2,
            ],
            [
                'darabszam' => 7,
                'adomanyNev' => 4,
                'anyag' => 1,
            ],
            [
                'darabszam' => 6,
                'adomanyNev' => 5,
                'anyag' => 8,
            ],
            [
                'darabszam' => 2,
                'adomanyNev' => 6,
                'anyag' => 5,
            ],
            [
                'darabszam' => 15,
                'adomanyNev' => 7,
                'anyag' => 3,
            ],
            [
                'darabszam' => 4,
                'adomanyNev' => 8,
                'anyag' => 4,
            ],
            [
                'darabszam' => 1,
                'adomanyNev' => 9,
                'anyag' => 7,
            ],
            [
                'darabszam' => 8,
                'adomanyNev' => 10,
                'anyag' => 10,
            ],
        ];
        foreach ($adomanyok as $value) {
    Adomany::create([
        'darabszam' => $value['darabszam'],
        'adomanyNev' => $value['adomanyNev'],
        'anyag' => $value['anyag'],
    ]);
}

$kiszallitasok = [
    [
        'alapitvanyId' => 1,
        'adomanyId' => 1,
        'megrendelesDatuma' => '2024-01-10',
        'elszallitasDatuma' => '2024-01-15',
    ],
    [
        'alapitvanyId' => 2,
        'adomanyId' => 2,
        'megrendelesDatuma' => '2024-02-05',
        'elszallitasDatuma' => '2024-02-10',
    ],
    [
        'alapitvanyId' => 3,
        'adomanyId' => 3,
        'megrendelesDatuma' => '2024-03-12',
        'elszallitasDatuma' => '2024-03-20',
    ],
    [
        'alapitvanyId' => 4,
        'adomanyId' => 4,
        'megrendelesDatuma' => '2024-04-01',
        'elszallitasDatuma' => '2024-04-06',
    ],
    [
        'alapitvanyId' => 5,
        'adomanyId' => 5,
        'megrendelesDatuma' => '2024-05-07',
        'elszallitasDatuma' => '2024-05-12',
    ],
    [
        'alapitvanyId' => 1,
        'adomanyId' => 6,
        'megrendelesDatuma' => '2024-06-18',
        'elszallitasDatuma' => '2024-06-25',
    ],
    [
        'alapitvanyId' => 2,
        'adomanyId' => 7,
        'megrendelesDatuma' => '2024-07-02',
        'elszallitasDatuma' => '2024-07-10',
    ],
    [
        'alapitvanyId' => 3,
        'adomanyId' => 8,
        'megrendelesDatuma' => '2024-08-09',
        'elszallitasDatuma' => '2024-08-14',
    ],
    [
        'alapitvanyId' => 4,
        'adomanyId' => 9,
        'megrendelesDatuma' => '2024-09-15',
        'elszallitasDatuma' => '2024-09-20',
    ],
    [
        'alapitvanyId' => 5,
        'adomanyId' => 10,
        'megrendelesDatuma' => '2024-10-01',
        'elszallitasDatuma' => '2024-10-08',
    ],
];

foreach ($kiszallitasok as $value) {
    Kiszallitas::create([
        'alapitvanyId' => $value['alapitvanyId'],
        'adomanyId' => $value['adomanyId'],
        'megrendelesDatuma' => $value['megrendelesDatuma'],
        'elszallitasDatuma' => $value['elszallitasDatuma'],
    ]);
}


}
}
