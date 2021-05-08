<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




     public function getDeletecategories(){
       $categories = Category::onlyTrashed()->paginate(10);

       return view('categories.deletedcategories', compact('categories'))
       ->with('i', (request()->input('page', 1) - 1) * 10);
     }

     public function restoreDeletedcategories($id)
     {
       $category = Category::where('id',$id)->withTrashed()->first();
       $category->restore();

       return redirect()->route('categories.index')
       ->with('success', 'You successfully restored the Category');
     }

     public function deletePermanently($id)
     {
       $category = Category::where('id',$id)->withTrashed()->first();
       $category->forceDelete();
       return redirect()->route('categories.index')
       ->with('success', 'You successfully deleted the category from the Recycle Bin');
     }


    public function index()
    {
      $categories = Category::paginate(5);

     return view('categories.index', compact('categories'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('categories.create');

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
        'category_name'=>'required',

          'category_description' => 'required',

      ]);

      Category::create($request->all());

      return redirect()->route('categories.index')
          ->with('success', 'Categorycreated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
      return view('categories.show', compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
      return view('categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
      $request->validate([
        'category_name'=>'required',

          'category_description' => 'required',

      ]);
      $category->update($request->all());

      return redirect()->route('categories.index')
          ->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
      $category->delete();

      return redirect()->route('categories.index')
          ->with('success', 'Category deleted successfully');
    }
}
