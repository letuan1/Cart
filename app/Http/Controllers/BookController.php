<?php

namespace App\Http\Controllers;

use App\Model\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = BookModel::all();
        return view('cart', compact('books'));
    }

    public function cart()
    {
        return view('shop');
    }

    public function addNewCart(Request $request)
    {
        $request->session()->push('cart',
            [
                'name' => $request->name,
                'auther' => $request->auther,
                'price' => $request->price
            ]);

        return redirect(route('index'));
    }

    public function delete(Request $request) {
        $request->session()->pull();
    }
}
