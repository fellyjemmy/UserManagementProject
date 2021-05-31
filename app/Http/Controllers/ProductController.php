<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




     public function getDeleteproducts(){
       $products = Product::onlyTrashed()->paginate(10);

       return view('products.deletedproducts', compact('products'))
       ->with('i', (request()->input('page', 1) - 1) * 10);
     }

     public function restoreDeletedproducts($id)
     {
       $product = Product::where('id',$id)->withTrashed()->first();
       $product->restore();

       return redirect()->route('products.index')
       ->with('success', 'You successfully restored the Product');
     }

     public function deletePermanently($id)
     {
       $product = Product::where('id',$id)->withTrashed()->first();
       $product->forceDelete();
       return redirect()->route('products.index')
       ->with('success', 'You successfully deleted the product from the Recycle Bin');
     }

public function date(){
     $products = Product::orderBy('products.created_at','Desc')
                ->where('product_entrance_date','<', Carbon::tomorrow()->toDateString());

}

    public function index()
    {

      $products = Product::latest()->paginate(5);

     return view('products.index', compact('products'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   //  public function date()
   // {
   //   $todayDate = Carbon::now()->format('Y-m-d');
   //    // dd($todayDate);
   // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create(Request $request)
{
     // $categories = Category::distinct()->get();
     $categories = Category::all();
     // $product->category_id = $request->get("category_id");


      // or Category::all();

     return view('products.create', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'product_name'=>'required',
        // 'products_left'=>'required|same:quantity_available',

        'quantity_available'=>'required',
        'product_entrance_date'=>'required',
        // 'product_finishup_date'=>'required',


      ]);
      $todayDate=Carbon::now();

      $date1 = Carbon::createFromFormat('Y-m-d', $request->product_entrance_date);
      $result = $date1->gt($todayDate);

      if($result){
        return back()->withInput()->withErrors(['product_entrance_date should not be greater than today']);



     }
// dd($result);



      // dd($result);


      // // Product::create($request->all());
      // // $product->category_id = $request->get("category_id");

      $product = new Product();
      $product -> category_id = $request -> category_name;
      $product-> product_name = $request -> product_name;
      $product-> quantity_available = $request -> quantity_available;
      $product-> products_left = $request -> quantity_available;
      $product-> product_entrance_date = $request -> product_entrance_date;
      // $product-> product_finishup_date = $request -> product_finishup_date;
      $product->save();
      return redirect()->route('products.index')
          ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      return view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {


      return view('products.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      $request->validate([
        'product_name'=>'required',
       // 'category_id'=>'required',
        'quantity_available'=>'required',
        'product_entrance_date'=>'required',
        // 'product_finishup_date'=>'required',
      ]);
       $product->update($request->all());

      return redirect()->route('products.index')
          ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
      $product->delete();

      return redirect()->route('products.index')
          ->with('success', 'Product deleted successfully');
    }
}
