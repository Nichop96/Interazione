<?php

use Illuminate\Database\Seeder;
use ORC\Category;

class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Category::create([
                    'name' => 'Vino',                 //Wine              
        ]);
        
       Category::create([
                    'name' => 'Caffe',             //Coffee       
        ]);
       
       Category::create([
                    'name' => 'Formaggio',             //Cheese       
        ]);
       
       Category::create([
                    'name' => 'Profumo',            //Perfume        
        ]);
       
       Category::create([
                    'name' => 'Tessuto',             //Tissue       
        ]);
       
       Category::create([
                    'name' => 'Musica',              //Music      
        ]);
    }

}
