<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts()
    {
        // Mengambil semua data produk
        $products = Product::all();

        return $products;
    }

    public function getProductCategories()
    {
        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category_name')
            ->get();
        return $products;
    }


    public function updateProduct()
    {
        // Mengupdate produk dengan id 1
        $product = Product::find(1);
        // Mengupdate nama produk
        $product->name = 'Laptop New';
        // Mengupdate deskripsi produk
        $product->description = 'Laptop baru dengan spesifikasi tinggi';
        $product->save();
    }


    public function productLazyLoading()
    {
        $products = Product::find(1);
        $category = $products->category->name;

        return $category;
    }

    public function productEagerLoading()
    {
        // Mengambil semua produk dengan kategori menggunakan eager loading
        $products = Product::with('category')->get();

        return $products;
    }

    public function productMutator()
    {
        // Mengupdate produk dengan id 1
        $product = Product::find(1);
        // Mengupdate nama produk
        $product->name = 'laptop hp';
        $product->save();

        return $product;
    }

    public function productAccessor()
    {
        // Mengambil produk dengan id 1
        $product = Product::find(1);

        return $product->name;
    }
    
}
