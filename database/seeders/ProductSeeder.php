<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductSeeder extends Seeder
{



    public function run(): void
    {

        $products = [
            [
               
                'product_id' => rand(1, 1000),
                'status_master_id' => '1',
                'category_master_id' => " '1','6' ",
                'price_master_id' => 100,
                'image_master_id' => 3,
                'image_banner' => 'red-notice.jpg',
                'name' => 'Red Notice',
                'barcode' => '123456789',
                'duration'=> '',
                'time_production'=> '2011',
                'rating' => 4,
                'wishlist' => 'Sample Wishlist',
                'country' => 'USA',
                'exclusive_access' => strval(rand(12, 17)),
                'lang' => 'en',
                'lang_id' => '1',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],


            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '1','2' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'name' => 'Spider-Man : Homecoming',
                    'image_banner' => 'spider-men.jpg',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2017',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                ],




            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '7','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'matrix.jpg',
                    'name' => 'The Matrix Ressurections',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                ],




            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'eternals.jpg',
                    'name' => 'Eternals ',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                ],






            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'dune.jpg',
                    'name' => 'Dune',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                ],


            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => '1917.jpg',
                    'name' => '1917',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                ],






            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'shang-chi.jpg',
                    'name' => 'Shang-Chi and The Legend of The Ten Rings ',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                ],







            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'casino-royale.jpg',
                    'name' => 'Casino Royale',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                ],




            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'dark-knight.jpg',
                    'name' => 'The Dark Knight',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    "updated_by" => "admin"
                ],






            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'panther.jpg',
                    'name' => 'Black Panther ',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    "updated_by" => "admin"
                ],






            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'venom.jpg',
                    'name' => 'Venom',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    "updated_by" => "admin"
                ],






            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'LOTR.jpg',
                    'name' => 'Lord Of The Rings: Return Of The King',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    "updated_by" => "admin"
                ],








            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'saving-private-ryan.jpg',
                    'name' => 'Saving Private Ryan',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    "updated_by" => "admin"
                ],




            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'interstaller.jpg',
                    'name' => 'Interstellar',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    "updated_by" => "admin"
                ],






            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'gladiator.jpg',
                    'name' => 'Gladiator',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    "updated_by" => "admin"
                ],






            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'endgame.jpg',
                    'name' => 'Avengers: Endgame',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    "updated_by" => "admin"
                ],


            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'ww84.jpg',
                    'name' => 'Wonder Woman 1984',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                ],








            [
                   
                    'product_id' => rand(1, 1000),
                    'status_master_id' => '1',
                    'category_master_id' => " '2','1' ",
                    'price_master_id' => 100,
                    'image_master_id' => 3,
                    'image_banner' => 'captain-marvel.jpg',
                    'name' => 'Captain Marvel',
                    'barcode' => '123456789',
                    'duration'=> '',
                    'time_production'=> '2021',
                    'rating' => 4,
                    'wishlist' => 'Sample Wishlist',
                    'country' => 'USA',
                    'exclusive_access' => strval(rand(12, 17)),
                    'lang' => 'en',
                    'lang_id' => '1',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                ],


        ];

        // dd($products);
        // Insert data into the products table
        DB::table('products')->insert($products);
    }
}
