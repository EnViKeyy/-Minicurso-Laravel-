<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductStore extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $product = new Product($request->all());

        $product->user()->associate(Auth::user());

        try {
            $product->save();

            return redirect()
                ->route('products.index')
                ->with('alert-success', 'Produto cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha no cadastro do Produto!' . $e->getMessage());
        }
    }
}
