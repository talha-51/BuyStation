<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function productList()
    {
        $products = DB::table('products')->get();
        return view('employee.productList')->with('products', $products);
    }

    public function addProduct()
    {
        return view('employee.addProduct');
    }

    public function insertProduct(ProductRequest $req)
    {
        $path = 'images/';
        $thmImgName = time() . '-1' . '.' . $req->thumbnail_image->getClientOriginalExtension();
        $img1Name = time() . '-2' . '.' . $req->product_image1->getClientOriginalExtension();
        $img2Name = time() . '-3' . '.' . $req->product_image2->getClientOriginalExtension();

        DB::table('products')->insert(
            [
                'product_name' => $req->product_name,
                'product_price' => $req->product_price,
                'product_details' => $req->product_details,
                'thumbnail_image' => $path . $thmImgName,
                'product_image1' => $path . $img1Name,
                'product_image2' => $path . $img2Name,
            ]
        );

        $req->thumbnail_image->move($path, $thmImgName);
        $req->product_image1->move($path, $img1Name);
        $req->product_image2->move($path, $img2Name);

        return redirect()->route('product.productList');
    }

    public function editProduct($product_id)
    {
        $product = DB::table('products')->where('product_id', $product_id)->first();
        return view('employee.editProduct')->with('product', $product);
    }

    public function updateProduct(ProductRequest $req, $product_id)
    {
        $path = 'images/';
        $thmImgName = time() . '-1' . '.' . $req->thumbnail_image->getClientOriginalExtension();
        $img1Name = time() . '-2' . '.' . $req->product_image1->getClientOriginalExtension();
        $img2Name = time() . '-3' . '.' . $req->product_image2->getClientOriginalExtension();

        DB::table('products')->where('product_id', $product_id)->update(
            [
                'product_name' => $req->product_name,
                'product_price' => $req->product_price,
                'product_details' => $req->product_details,
                'thumbnail_image' => $path . $thmImgName,
                'product_image1' => $path . $img1Name,
                'product_image2' => $path . $img2Name,
            ]
        );

        $req->thumbnail_image->move($path, $thmImgName);
        $req->product_image1->move($path, $img1Name);
        $req->product_image2->move($path, $img2Name);

        return redirect()->route('product.productList');
    }

    public function deleteProduct($product_id)
    {
        DB::table('products')->where('product_id', $product_id)->delete();
        return redirect()->route('product.productList');
    }
}
