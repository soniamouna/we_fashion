<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Size;
use Faker\Core\File;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $nbMaxSize = count(Size::all());
        $ids = range(1 , $nbMaxSize); //faire un tableau 

        Product::factory(80)->create()->each(function ($product) use ($ids,$nbMaxSize) {
            shuffle($ids);
            $product->sizes()->attach(array_slice($ids, 1, rand(1,$nbMaxSize)));

            $folder = $product->category_id == 1 ? 'hommes' : 'femmes';
            $pathFolder = '/images/' . $folder;
            $files =  Storage::disk('public')->allFiles($pathFolder);
         
            $nbMaxPicture = count($files);
            $path = $files[rand(1 , $nbMaxPicture - 1)];
            $product->picture()->create([
				'path'=> $path
			]);
            $product->save();
        });
    }
}
