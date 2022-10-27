<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Receipt extends Model
{
    use HasFactory;
    // client name, product(s) name, sell price, qty, total price
    protected $fillable = ['client_id', 'product_id', 'quantity', 'total_price'];

    public function clients() {
        return $this->belongsToMany(User::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
