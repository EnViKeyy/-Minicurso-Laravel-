<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ProductResource;
use App\Models\Product;

class ProductDestroy extends Controller
{
    /**
     * @param Product $product
     * @return ProductResource
     * @throws \Exception
     */
    public function __invoke(Product $product)
    {
        $product->delete();

        return new ProductResource($product);
    }
}
