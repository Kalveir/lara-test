<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function example_dashboard()
    {
        session()->flash('alert',['type'=> 'success',
            'message'=> 'Welcome'
        ]);
        return view('example.dashboard');
    }

    public function example_blank()
    {
        return view('example.blank');
    }

    public function alert_button()
    {
        return view('example.alert-button');
    }

    public function forms()
    {
        return view('example.form');
    }

    public function category()
    {
        $category = Category::get();
        return view('example.category',compact('category'));
    }
    public function AddCategory(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        session()->flash('alert',['type'=> 'success',
            'message'=> 'Kategori Ditambahkan'
        ]);
        return redirect()->route('example.category');
    }
    public function UpdateCategory(Request $request,$id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        session()->flash('alert',['type'=> 'success',
            'message'=> 'Kategori Diperbarui'
        ]);
        return redirect()->route('example.category');
    }
    public function DeleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('alert',['type'=> 'success',
            'message'=> 'Kategori Dihapus'
        ]);
        return redirect()->route('example.category');
    }

    public function product()
    {
        $product = Product::get();   
        return view('example.product',compact('product'));
    }

    public function AddProduct()
    {
        $category = Category::get();
        return view('example.tambah-product',compact('category'));
    }
    public function saveProduct(Request $request)
    {
        Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'type_id' => 1,
        ]);
        session()->flash('alert',[ 'type'=> 'success',
            'message'=> 'Produk Ditambahkan'
        ]);
        return redirect()->route('example.product');

    }

    public function EditProduct($id)
    {
        $product = Product::find($id);
        $category = Category::get();
        return view('example.edit-product',compact('product','category'));
    }

    public function UpdateProduct(Request $request,$id)
    {
        Product::where('id',$id)->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'type_id' => 1
        ]);
        session()->flash('alert',[ 'type'=> 'success',
        'message'=> 'Produk Diperbarui'
        ]);
        return redirect()->route('example.product');
    }

    public function DeleteProduct($id)
    {
        Product::destroy($id);
        session()->flash('alert',[ 'type'=> 'success',
        'message'=> 'Produk Dihapus'
    ]);
        return redirect()->route('example.product');
    }
}
