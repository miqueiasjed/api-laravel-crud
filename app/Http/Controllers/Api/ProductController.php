<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->all();

        return response()->json($products);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $product = $this->product->create($data);

        return response()->json($product);
    }

    public function show($id)
    {
        $product = $this->product->find($id);

        return response()->json($product);
    }
}