<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('categories')->insert([
        [
            'category_name'=>'Action',
            'description'=>'Film dengan adegan seru banget',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'category_name'=>'Comedy',
            'description'=>'Film dengan adegan lucu banget',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'category_name'=>'Drama',
            'description'=>'Film dengan adegan drama banget',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'category_name'=>'Sci-Fi',
            'description'=>'Film dengan nuansa teknologi banget',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'category_name'=>'Romance',
            'description'=>'Film dengan nuansa romantis banget',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
    ]);
    }
}
