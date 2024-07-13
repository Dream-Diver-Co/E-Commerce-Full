<?php

namespace App\Http\Controllers;
use App\Models\Panjabi;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_details($id)
    {
        $panjabi = Panjabi::find($id);

        if (!$panjabi) {
            abort(404); // Handle the case where the product is not found
        }

        return view('frontend.page.product_details', compact('panjabi'));
    }
    {}
}
