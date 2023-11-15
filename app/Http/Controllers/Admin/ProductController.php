<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Database\AttachmentService;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('admin.pages.products.products')->with(['products' => $products]);
    }


    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function create(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        return view('admin.pages.products.add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request, &$product){
            $product = Product::create([
                'title' => $request->title,
                'price' => $request->price,
                'discounted_price' => $request->discounted_price,
                'qty' => $request->qty,
                'type' => $request->type,
                'description' => $request->description,
                'featured' => $request->has('featured'),
                'rating' => $request->rating,
                'category_id' => $request->category,
            ]);

            if($request->hasfile('thumbnail_image')){
                $file = $request->file('thumbnail_image');
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/admin/images/', $name);

                $product->thumbnail_image = $name;
                $product->update();
            }
            if($request->hasfile('images'))
            {
                $images = [];
                foreach($request->file('images') as $file)
                {
                    $name=$file->getClientOriginalName();
                    $file->move(public_path().'/admin/images/', $name);
                    array_push($images, $name);
                }

                $product->images = json_encode($images);
                $product->update();
            }
        });

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('retail.single')->with(['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.pages.products.add-product')->with(['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        DB::transaction(function () use ($request, $product){
            $product->update([
                'title' => $request->title,
                'price' => $request->price,
                'discounted_price' => $request->discounted_price,
                'qty' => $request->qty,
                'type' => $request->type,
                'description' => $request->description,
                'featured' => $request->has('featured'),
                'rating' => $request->rating,
                'category_id' => $request->category,
            ]);

            if ($request->hasfile('thumbnail_image')) {
                $imageName = $request->image->getClientOriginalName();
                if ($product->thumbnail_image){
                    unlink(public_path('/admin/images/'.$product->thumbnail_image));
                }
                if (!File::exists(public_path('/admin/images/'.$imageName))) {
                    $request->image->move(public_path().'/admin/images/', $imageName);
                }

                $product->thumbnail_image = $imageName;
                $product->update();
            }


            if($request->hasfile('images'))
            {
                $images = [];
                foreach($request->file('images') as $file)
                {
                    $name=$file->getClientOriginalName();
                    $file->move(public_path().'/admin/images/', $name);
                    array_push($images, $name);
                }

                $product->images = json_encode($images);
                $product->update();
            }
        });

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
