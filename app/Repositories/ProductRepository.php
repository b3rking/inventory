<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository {

    public function validation(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:30', 'unique:products'],
            'category_id' => ['required'],
            'user_id' => ['required'],
            'purchase_price' => ['required', 'integer'],
            'sell_price' => ['required'] 
        ]);
    }

    public function index() {
        return Product::latest()->get();
    }

    public function store(Request $request) {
        $this->validation($request);

        Product::create(
            $request->only(
                'name', 'category_id', 'user_id', 'purchase_price', 'sell_price'
            )
        );
    }

    public function show(Product $product) {
        return $product;
    }

    public function update(Request $request, Product $product) {

        $this->validation($request);

        $product->update($request->only(
            'name', 'category_id', 'user_id', 'purchase_price', 'sell_price'
        ));
    }

    public function delete(Product $product) {
        $product->delete();
    }
}