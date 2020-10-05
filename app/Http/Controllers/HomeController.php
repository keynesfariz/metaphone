<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::orderBy('name');

        if ($request->q) {
            $products = $products->whereHas('indexings', function (Builder $query) use ($request) {
                $query->where('metaphone', 'like', metaphone($request->q) . '%');
            });
        }

        // $products = $products->paginate(6);
        $products = $products->get();

        return view('app', [
            'products' => $products
        ]);
    }
}
