<?php

use Illuminate\Database\Seeder;
use ORC\Group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            /*'name' => 'Public',
            'description' => 'Group with every users ',  */
            'name' => 'Pubblico',
            'description' => 'Gruppo con ogni utente',  
        ]);
        
        Group::create([
            /*'name' => 'Chanel n.5 Smellers',
            'description' => 'Chanel n.5',*/
            'name' => 'Saggiatori Chanel n.5',
            'description' => 'Chanel n.5',            
        ]);
        
        Group::create([
            /*'name' => 'Red wine Tasters',
            'description' => 'Red wine', */
            'name' => 'Saggiatori Vino Rosso',
            'description' => 'Vino Rosso', 
        ]);
        
        Group::create([
            /*'name' => 'White wine Tasters',
            'description' => 'White wine',*/
            'name' => 'Saggiatori Vino Bianco',
            'description' => 'Vino Bianco',             
        ]);
        
        Group::create([
            'name' => 'Bassanese: Griffone',
            'description' => 'Bassanese: Griffone 0.75 ',            
        ]);
        
        Group::create([
            /*'name' => 'Moet & Chandon Tasters',
            'description' => 'Moet & Chandon saga',      */
            'name' => 'Saggiatori Moet & Chandon',
            'description' => 'Moet & Chandon saga',  
        ]);
        
        Group::create([
            /*'name' => 'Coffee Tasters',
            'description' => 'Group for all types of coffe',*/
            'name' => 'Saggiatori Caffe',
            'description' => 'Gruppo di saggiatori per ogni tipo di caffe', 
        ]);
        
        Group::create([
            'name' => 'Grana Padano',
            'description' => 'Grana Padano Riserva 24 mesi',            
        ]);
        
        Group::create([
            /*'name' => 'Tissue Touchers',
            'description' => 'Group for texture touch',*/
            'name' => 'Saggiatori di tessuto',
            'description' => 'Gruppo per i saggiatori di tessuto', 
        ]);
        
        Group::create([
            'name' => 'The Simpson: Yellow Album',
            'description' => 'The Simpson: The Yellow Album',            
        ]);
    }
}
