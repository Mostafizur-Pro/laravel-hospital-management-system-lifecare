<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{


    public function shop()
    {
        $productsJson = file_get_contents(storage_path('products.json'));
        $products = json_decode($productsJson, true);

        return view('shop', ['products' => $products]);
    }
    public function showProductDetails($id)
    {
        // Fetch the product details by ID from your data source (e.g., database).
        // You can replace this with your actual data retrieval logic.
        // $product = Product::find($id);
        $productsJson = file_get_contents(storage_path('products.json'));
        $products = json_decode($productsJson, true);

        $product = null;

       foreach ($products as $item) {
        if ($item['id'] == $id) {
            $product = $item;
            break;
        }
    }

    if ($product === null) {
        // Handle the case when the product is not found
        abort(404); // You can customize this error response
    }
    
        return view('dashboard/products/details', ['product' => $product]);
    }
    


    public function create()
    {
        return view('products.create');
    }
    public function index()
    {
        $products = Product::all();

        return view('dashboard/products/index', compact('products'));
        // return view('dashboard.products.index');

    }



    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string',
            'oldprice' => 'required|numeric',
            'newprice' => 'required|numeric',
            'rating' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'required|string',
        ]);



        $imagePath = $request->file('image')->store('');


        $product = Product::create([
            'title' => $validatedData['title'],
            'oldprice' => $validatedData['oldprice'],
            'newprice' => $validatedData['newprice'],
            'rating' => $validatedData['rating'],
            'image' => $imagePath,
            'details' => $validatedData['details'],
        ]);


        if ($product) {

            return redirect('/all-products')->with('success', 'Product create successful!');
        } else {
            return redirect('/add-product')->with('success', 'Product create fail!');
        }
    }



    public function destroy($id)
    {
        $product = Product::findOrFail($id);


        if (Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect('/all-products')->with('success', 'Product create successful!');
    }
}
