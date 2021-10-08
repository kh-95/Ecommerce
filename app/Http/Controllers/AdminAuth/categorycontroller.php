<?php


namespace App\Http\Controllers\AdminAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;


class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  return view('admin.categories.add');

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
          
        ]);
        
        

        $inputs=$request->all();
        Category::create($inputs);
        return redirect(route('categories.index'))->with('success','Category added successfully');

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
       
        $category=Category::findOrFail($id);
        return view('admin.categories.edit')->with('category',$category);


        
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
            
      ]);
        $data=$request->all();
     $category=Category::find($id);

    // dd($data);
   $category->update($data);
    return redirect(route('categories.index'))
     ->with('success','Category updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $category = Category::find($id);

        $category->delete();
        return redirect(route('categories.index'))
        ->with('success','Category Deleted Succesfully');




    }
}
