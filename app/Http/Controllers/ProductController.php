<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import the Product model

class ProductController extends Controller
{
    public function showCreateForm()
    {
        return view('create_product'); // Blade view file for the form
    }

    public function store(Request $request)
    {
        // Validate form input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'oldprice' => 'required|numeric',
            'newprice' => 'required|numeric',
            'rating' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
            'details' => 'required|string',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('product_images', 'public');

        // Create a new Product instance and save it to the database
        $product = new Product([
            'title' => $validatedData['title'],
            'oldprice' => $validatedData['oldprice'],
            'newprice' => $validatedData['newprice'],
            'rating' => $validatedData['rating'],
            'image' => $imagePath, // Store the image path in the database
            'details' => $validatedData['details'],
        ]);

        $product->save();

        return redirect('/dashboard')->with('success', 'Login successful!');
    }
}
