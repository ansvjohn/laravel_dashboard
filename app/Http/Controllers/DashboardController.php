<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Services\GoogleMapsService; 

class DashboardController extends Controller
{
    public function index(){
        // Check if the products are already stored in the database
        if (Product::count() > 0) {
            $perPage = 5;
            $currentPage = request()->get('page', 1);
            $totalItems = Product::count();
            $totalPages = ceil($totalItems / $perPage);
            $startIndex = ($currentPage - 1) * $perPage;
            $products = Product::skip($startIndex)->take($perPage)->get();
            $serial = $startIndex + 1;
    
            if (request()->ajax()) {
                return response()->json([
                    'data' => view('partials.products_table', compact('products', 'serial'))->render(),
                    'pagination' => view('partials.pagination', compact('totalPages', 'currentPage'))->render(),
                ]);
            }
    
            return view('dashboard', [
                'products' => $products,
                'currentPage' => $currentPage,
                'totalPages' => $totalPages,
                'serial' => $serial,
            ]);
        }
    
        // If the products are not in the database, get them from the API
        $url = 'https://fakestoreapi.com/products';
        $response = Http::get($url);
        $data = $response->json();
    
        // Save the data to the database
        DB::beginTransaction();
        try {
            foreach ($data as $productData) {
                $product = new Product;
                $product->title = $productData['title'];
                $product->description = $productData['description'];
                $product->price = $productData['price'];
                // set other properties as required
                $product->save();
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // handle the exception as required
        }
    
        $perPage = 5;
        $currentPage = request()->get('page', 1);
        $totalItems = count($data);
        $totalPages = ceil($totalItems / $perPage);
        $startIndex = ($currentPage - 1) * $perPage;
        $endIndex = $startIndex + $perPage;
        $products = array_slice($data, $startIndex, $perPage);
        $serial = $startIndex + 1;
    
        if (request()->ajax()) {
            return response()->json([
                'data' => view('partials.products_table', compact('products', 'serial'))->render(),
                'pagination' => view('partials.pagination', compact('totalPages', 'currentPage'))->render(),
            ]);
        }
    
        return view('dashboard', [
            'products' => $products,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'serial' => $serial,
        ]);
    }
    //Search function with pagination
    public function search(Request $request)
    {
        $searchQuery = $request->input('searchQuery');

        $perPage = 5;
        $currentPage = request()->get('page', 1);

        $products = Product::where('title', 'LIKE', "%$searchQuery%")
            ->orWhere('description', 'LIKE', "%$searchQuery%")
            ->orWhere('price', 'LIKE', "%$searchQuery%")
            ->skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();

        $totalItems = Product::where('title', 'LIKE', "%$searchQuery%")
            ->orWhere('description', 'LIKE', "%$searchQuery%")
            ->orWhere('price', 'LIKE', "%$searchQuery%")
            ->count();

        $totalPages = ceil($totalItems / $perPage);

        $startIndex = ($currentPage - 1) * $perPage;
        $serial = $startIndex + 1;

        if ($request->ajax()) {
            return response()->json([
                'data' => view('partials.products_table', compact('products', 'serial'))->render(),
                'pagination' => view('partials.pagination', compact('totalPages', 'currentPage'))->render(),
            ]);
        }
    }

    public function deleteProduct($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Product deleted'], 200);
    }
}

