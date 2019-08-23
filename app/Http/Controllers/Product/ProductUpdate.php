<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductUpdate extends Controller
{
    /**
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, Product $product)
    {
        $product->update($request->all());

        try {
            $product->save();

            return redirect()
                ->route('products.show', $product->id)
                ->with('alert-success', 'Produto atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha na atualização do Produto!');
        }
    }
}
