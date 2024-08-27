<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products= [
            [
                'name' => 'Product 1',
                'price' => 100,
                'category_id' => 1,
                'brand_id' => 1,
                'product_label_id' => 1,
                'qty' => 50,
                'alert_stock' => 5,
            ],
            [
                'name' => 'Product 2',
                'price' => 200,
                'category_id' => 2,
                'brand_id' => 2,
                'product_label_id' => 2,
                'qty' => 30,
                'alert_stock' => 10,
            ],
            [
                'name' => 'Product 3',
                'price' => 150,
                'category_id' => 3,
                'brand_id' => 3,
                'product_label_id' => 3,
                'qty' => 20,
                'alert_stock' => 3,
            ],
        ];

        foreach ($products as $row)
        {
            Product::create($row);
        }
        
    }
}
