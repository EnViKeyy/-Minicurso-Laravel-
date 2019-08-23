<?php

namespace App\Http\Controllers\Product;

use App\Forms\Product\ProductForm;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductEdit extends Controller
{
    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Product $product)
    {
        $form = $this->formBuilder->create(ProductForm::class, [
            'url' => route('products.update', $product->id),
            'method' => 'PUT',
            'model' => $product
        ]);

        return view('products.edit', [
            'form' => $form
        ]);
    }
}
