<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorCatRequest;
use App\Http\Requests\UpdateCatRequest;

use  App\Models\Category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('allcategories', ["categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createCat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorCatRequest $request){

        if ($request->hasFile('logo')) {
            $logo = $request['logo'];
            $path =$logo->store("uploadedFile","catUploads");
            
            $request->logo = $path;
        }   

        Category::create($request->all());        

        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $category = Category::findOrFail($id);
        return view('showCat', ["category"=>$category]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('editCat', ["category"=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatRequest $request, $id) 
    {
        $category = Category::findOrFail($id); 
    
        if ($request->hasFile('logo')) {
            $logo = $request['logo'];
            $path = $logo->store("uploadedFile", "catUploads");
    
            $request->logo = $path; 
        }
    
        $category->update($request->all());
        return redirect()->route('category.show', $category->id); 
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        // if($category->logo){
        //     try{
        //         unlink("imgs/$category->logo");
        //     }
        //     catch(\Exception $e){
        //         // dd($e);
        //     }
        // }

       if($category->trashed()){
        $category->forceDelete();
        return redirect()->route('category.index');
       }

        $category->delete();
        return redirect()->route('category.index');

    }

    function archive() {
        $categories = Category::onlyTrashed()->get();
        return view('archive' , ["categories"=>$categories]);
        
    }
}
