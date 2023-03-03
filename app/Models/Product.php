<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price',
        'description',
        'image'
    ];

    public function store(array $data)
    {
        Product::create($data);
    }

    public function patch(int $id, array $data)
    {
        $product = $this->find($id);
        $product->name = $data["name"];
        $product->price = $data["price"];
        $product->category = $data["category"];
        if ($data["image"] != null) {
            $product->image = $data["image"];
        }
        $product->description = $data["description"];
        $product->save();
    }
}
