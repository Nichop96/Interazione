<?php

use Illuminate\Database\Seeder;
use ORC\Module;
use ORC\Category;

class ModulesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        /*$wineCategory = Category::where('name', 'Wine')->pluck('id')->first();
        $coffeeCategory = Category::where('name', 'Coffee')->pluck('id')->first();
        $perfumeCategory = Category::where('name', 'Perfume')->pluck('id')->first();
        $musicCategory = Category::where('name', 'Music')->pluck('id')->first();
        $cheeseCategory = Category::where('name', 'Cheese')->pluck('id')->first();
        $tissueCategory = Category::where('name', 'Tissue')->pluck('id')->first();*/
        $wineCategory = Category::where('name', 'Vino')->pluck('id')->first();
        $coffeeCategory = Category::where('name', 'Caffe')->pluck('id')->first();
        $perfumeCategory = Category::where('name', 'Profumo')->pluck('id')->first();
        $musicCategory = Category::where('name', 'Musica')->pluck('id')->first();
        $cheeseCategory = Category::where('name', 'Formaggio')->pluck('id')->first();
        $tissueCategory = Category::where('name', 'Tessuto')->pluck('id')->first();
        
        Module::create([
            'name' => 'Vino rosso',
            'description' => 'Modulo per vini rossi',
            
            'category_id' => $wineCategory,
            'image' => 'rosso.jpg'
        ]);

        Module::create([
            'name' => 'Vino bianco',
            'description' => 'Modulo per vini bianchi',
            
            'category_id' => $wineCategory,
            'image' => 'bianco.jpg'
        ]);

        Module::create([
            'name' => 'Profumi Chanel',
            'description' => 'Modulo per profumi Chanel',
            
            'category_id' => $perfumeCategory,
            'image' => 'chanel_logo.jpg'
        ]);
        
        Module::create([
            'name' => 'Grana Padano',
            'description' => 'Modulo per Grana Padano',
            
            'category_id' => $cheeseCategory,
            'image' => 'default.jpg'
        ]);

        Module::create([
            'name' => 'Tessuto',
            'description' => 'Modulo per i tessuti',
            
            'category_id' => $tissueCategory,
            'image' => 'tessuti.jpg'
        ]);

        Module::create([
            'name' => 'Musica',
            'description' => 'Modulo per la musica',
            
            'category_id' => $musicCategory,
            'image' => 'note.jpg'
        ]);
    }

}
