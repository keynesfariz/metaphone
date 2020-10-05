<?php

namespace Database\Seeders;

use App\Models\Indexing;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->times(10)
            ->create();

        $products = Product::all();

        foreach ($products as $product) {
            
            $names = explode(' ', $product->name);

            $indexingIds = [];

            foreach ($names as $name) {
                $indexing = Indexing::updateOrCreate(['metaphone' => metaphone($name)]);
                $indexingIds[] = $indexing->id;
            }

            $product->indexings()->sync($indexingIds);
        }
    }
}
