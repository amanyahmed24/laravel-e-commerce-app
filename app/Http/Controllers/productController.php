<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Product; // use the Product model
use Illuminate\Support\Facades\Gate;


class productController extends Controller
{

    function __construct(){
        $this->middleware('auth')->only(['create','store']);
//        $this->middleware('auth')->except(['index', 'show']);
    }

    public function allProducts()
    {
        $products = Product::all();
        return view('landing', ["products"=>$products]);
    }

    function showDetails($id){

        $products = Product::all();
        foreach ($products as $product){
            if ($product['id']==$id){
                return view('details', ["product"=>$product]);
            }
        }
        return abort('404');
    }

    public function destroy($id){

        $product = Product::findOrFail($id);
        if (Gate::allows('isAdmin') ||Gate::allows('isCreator' ,$product) ){
            $product->delete();
            return redirect()->route('products.show');
            
        }
        
        abort(403);
            // return to_route('product.destroy');
        
 
    }

    //create new product
    public function create(){

        return view('create');

    }

    //store data
    function store(){
        # laravel introduce request function
        $data = \request();  # returns with request object- --> holding the data
        $name = \request()->get('name');
        $price = \request()->get('price');
        $img = \request()->get('img');
        $category_id = \request()->get('category_id');
        
        $product = new Product();

        $product->name= $name;
        $product->price = $price;
        $product->img= $img;
        $product->category_id= $category_id;
        $product->creator_id= Auth::id();
       
        $product->save();


        return to_route('products.show', $product->id);

    }
    
    //update
    public function update($id){

        $product = Product::findOrFail($id);

        if (Gate::allows('isAdmin') || Gate::allows('isCreator' ,$product) ){
            return view('update', ["product"=>$product]);
            
        }
        
        abort(403);
                    
    }

    //save updates
    function saveUpdate($id){

            $data = \request();  # returns with request object- --> holding the data
            $name = \request()->get('name');
            $price = \request()->get('price');
            $img = \request()->get('img');
            $category_id = \request()->get('category_id');
            
            $product = Product::findOrFail($id);
    
            $product->name= $name;
            $product->price = $price;
            $product->img= $img;
            $product->category_id= $category_id;
           
            $product->save();

            return to_route('products.show', $product->id);


    }
    function contactUs(){
        return view('contact');
        
    }
    function aboutUs(){
        return view('about');
        
    }

    }

    

