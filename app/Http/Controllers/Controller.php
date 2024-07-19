<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function fetchData()
    {
    }


    public function showProducts()
    {
    
        $response = Http::get('https://b335-116-206-14-20.ngrok-free.app/api/v1/product/'); 
        $products = $response->json()['data']; 
        return view('pelanggan.product.index', compact('product'));
    }
    public function index()
    {

        $response = Http::get('https://b335-116-206-14-20.ngrok-free.app/api/v1/product/');
        $data = $response->json();


        return view('pelanggan.page.home', [
            'data' => $data,
            'title' => 'Home',
        ]);
    }

    public function shop()
    {

        $response = Http::get('https://b335-116-206-14-20.ngrok-free.app/api/v1/product/');
        $data = $response->json();

        return view('pelanggan.page.shop', [
            'data' => $data,
            'title' => 'Shop',

        ]);
    }



    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function productList()
    {
        $response = Http::get('https://b335-116-206-14-20.ngrok-free.app/api/v1/product/');
        $data = $response->json();

        return view('admin.shop.index', [
            'data' => $data,
            'title' => 'Product',
        ]);
    }
    public function Addproduct()
    {
        return view('admin.shop.product', [
            'title' => 'Addproduct',
        ]);
    }

    public function Editproduct()
    {
        
        return view('admin.shop.edit', [
            'title' => 'Editproduct',
        ]);
    }
}
