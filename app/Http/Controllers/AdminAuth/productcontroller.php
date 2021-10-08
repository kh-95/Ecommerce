<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();

        return view ('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:191',
            'price'=>'required',
            'image1'=>'required|sometimes|file|max:2048',
            'image2'=>'required|sometimes|file|max:2048',
            'image3'=>'required|sometimes|file|max:2048',
            'description'=>'required|unique:products,description',
            'category_id'=>'required',
            
            
        ]);
        $inputs = $request->except(['image1,image2,image3']);

        if($request->hasFile('image1,image2,image3'))
        {           
            $inputs[image1]= uploader($request,'image1');
            $inputs[image2]= uploader($request,'image2');
            $inputs[image3]= uploader($request,'image3');
          
        }
    dd($inputs);   
       
        Product::create($inputs);
        return redirect(route('products.index'))
        ->with('success','Product Added Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit')
        ->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|max:191',
            'price'=>'required',
            
          
            'description'=>'required',
            'category_id'=>'required',
         
            ]);
    
    
            $data=$request->all();
            $product=Product::find($id);
            $product->update($data);
            return redirect(route('products.index'))
            ->with('success','Product updated Succesfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        return redirect(route('products.index'))
        ->with('success','Product Deleted Succesfully');
    }
}
