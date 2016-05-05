<?php
class ProductsSeeder extends Seeder {
    public function run() {
        Eloquent::unguard();
        
        $product = new Product;
        $product->name = 'Ginger Beer';
        $product->price = 3.00;
        $product->save();
        
        $product = new Product;
        $product->name = 'Cheerios';
        $product->price = 2.00;
        $product->save();
    }
}