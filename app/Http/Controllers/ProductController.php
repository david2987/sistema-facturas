<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use function Termwind\render;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();



        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $product = $query->paginate(10);



        return Inertia::render('Products/index', [
            'products' => $product,
            'filters' => $request->only(['search'])
        ]);
    }

    public function add(){
        Log::alert("pasa por aca");
        return Inertia::render('Products/Add');
    }

    public function store(Request $request, Product $product)
    {

        // valida los campos
        $request->validate([
            'title' => 'required|string|max:255',
            'purchase_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'tax_percentage' => 'required|numeric'
        ]);

        // actualiza
        $product::create($request->all());

        return redirect()->route('products.index');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'purchase_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'tax_percentage' => 'required|numeric'
        ]);

        $product->update($request->all());

        return redirect()->route('products.index');
    }



    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
