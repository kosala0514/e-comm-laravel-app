<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function all()
    {
        return Product::all();
    }

    public function store(CreateProductRequest $request)
    {
        // $imagePath = $request->file('image')->store('products', 'public');

        // $product = Product::create([
        //     'name' => $request->validated('name'),
        //     'description' => $request->validated('description'),
        //     'price' => $request->validated('price'),
        //     'image' => $imagePath,
        // ]);
        $product = Product::create([
            'name' => $request->validated('name'),
            'description' => $request->validated('description'),
            'price' => $request->validated('price'),
            'image' => "/card.png",
        ]);
        return $product;
    }

    public function get($id)
    {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        // $request->image = "/card.png";
        $product = Product::findOrFail($id);
        return $product->update($request->all());
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        return $product->delete();
    }
}
