<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\CategoryMaster;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        CategoryMaster::create([
            'category_master_id'=> 1,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'action',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 2,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'adventure',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 3,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'animal',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 4,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'animation',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 5,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'biography',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 6,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'comedy',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 7,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'sci-fi',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 8,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'war',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 9,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'drama',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 10,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'fantasy',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 11,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'horor',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 12,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'VIP',
            'desc'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 13,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'VIP',
            'desc'	=> 'exclusive_access',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 14,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'CineflixTV Only',
            'desc'	=> 'exclusive_access',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 15,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'CineflixTV Originals',
            'desc'	=> 'exclusive_access',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        CategoryMaster::create([
            'category_master_id'=> 16,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'Original',
            'desc'	=> 'exclusive_access',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        
        CategoryMaster::create([
            'category_master_id'=> 17,
            'status_id'	=> 1,
            'image_banner' => 'empty-banner.png',
            'name'	=> 'Teaser',
            'desc'	=> 'exclusive_access',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);


    }
}
