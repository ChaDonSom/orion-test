<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Orion\Http\Controllers\Controller;

class ProductController extends Controller {
    /**
     * Fully-qualified model class name
     */
    protected $model = Product::class;
}
