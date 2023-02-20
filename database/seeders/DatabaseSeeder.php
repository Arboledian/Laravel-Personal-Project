<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vtuber;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //El seeder crea datos para la base de datos, en este caso la data está litaralmente escrita en como
        //quiero ingresarla
        //php artisan migrate:refresh --seed es el comando que se usa normalmente para subir esta data
        //para crear o modificar la tabla se usan los archivos que estan en la carpeta migrations
        Vtuber::create([
            'name'=> 'Enna Alouette',
            'nickname' => 'Bird, Bitch',
            'fanname' => 'Aloupeeps',
            'oshimark' => '🕊️🎐',
            'company'=> 'NijisanjiEN Ethyria',
            'image'=> 'ena1',
            'clip'=> 'https://www.youtube.com/embed/m4K36aRFMOg',
            'description' => 'Enna Alouette es una sapa ctm oh es que la xanxa kl tiene 0 amor propio xdxdxd',
        ]);
        Vtuber::create([
            'name'=> 'Nanashi Mumei',
            'nickname' => 'Meimei Moom',
            'fanname' => 'Hoomans',
            'oshimark' =>'🪶',
            'company'=> 'HoliliveEN Council',
            'image'=> 'mumei1',
            'clip'=> 'https://www.youtube.com/embed/Q8A_GFiNs1U',
            'description' => 'Nanashi Mumei como ctm puede existir wn, esta wna o es la mejor actriz del mundo o es weona pero no entiendo wn, es una wea rara no tengo mucho mas que decir porque literalmente no entiendo si es o se hace',
        ]);
        Vtuber::create([
            'name'=> 'Selen Tatsuki',
            'nickname' => 'Toxic Dragon',
            'fanname' => 'Dragoons',
            'oshimark' => '🏆',
            'company'=> 'NijisanjiEN Obsydia',
            'image'=> 'selen1',
            'clip'=> 'https://www.youtube.com/embed/SJo8NPGW02g',
            'description' => 'Esta es otro sapa ctm pero como mierda es tan chistosa la kl, risa ctm que se gasta wn aparte es maás tóxica que chernobyl la wacha kl y dsp se las da de introvertida cuando la weona la wea que hace pa iniciar una conversación es preguntar si son del tipo de amigo que se hacen pajas de pana o no',
        ]);
        Vtuber::create([
            'name'=> 'Hoshimachi Suisei',
            'nickname' => 'Sui-chan, Suicopath',
            'fanname' => 'Hoshiyomis',
            'oshimark' =>'☄️',
            'company'=> 'Hololive gen 0',
            'image'=> 'suisei1',
            'clip'=> 'https://www.youtube.com/embed/lD8oL4CRu64',
            'description' => 'Hoshimachi suisex hrmno la kl canta terrible terrible bn pero es mas esquizofrenico la kla y aparte su nuevo album es medio kk, Ghost sigue siendo su mejor tema hata la fecha me importa poco que tan mainstream sea Stellar Stellar',
        ]);
    }
}
