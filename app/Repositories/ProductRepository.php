<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository {

    private $request_data;

    public function __construct(Request $request)
    {
        $this->request_data = $request
                                    ->only(
                                        'name', 'category_id', 'user_id', 'quantity',
                                         'purchase_price', 'sell_price');
    }

    public function validation(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:30', 'unique:products'],
            'category_id' => ['required'],
            'user_id' => ['required'],
            'purchase_price' => ['required', 'integer'],
            'quantity' => ['required', 'min:1'],
            'sell_price' => ['required'] 
        ]);
    }

    public function index() {
        return Product::latest()->get();
    }

    public function store(Request $request) {
        $this->validation($request);

        Product::create($this->request_data);
    }

    public function show(Product $product) {
        return $product;
    }

    public function update(Request $request, Product $product) {

        $this->validation($request);

        $product->update($this->request_data);
    }

    public function delete(Product $product) {
        $product->delete();
    }
}