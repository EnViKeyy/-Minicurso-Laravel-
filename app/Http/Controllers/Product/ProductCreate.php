<?php

namespace App\Http\Controllers\Product;

use App\Forms\Product\ProductForm;
use App\Http\Controllers\Controller;

class ProductCreate extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $form = $this->formBuilder->create(ProductForm::class, [
            'url' => route('products.store'),
            'method' => 'POST'
        ]);

        return view('products.create', [
            'form' => $form
        ]);
    }
}
