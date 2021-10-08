<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Address;
use Hash;
use Datatables;


class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     
        $users=User::all();
      
        return view('admin.users.index',compact('users'));
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.add');
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
        //     'name'=>'required|max:191',
        //  'email'=>'required|email|max:191',
            
        // 'password'=>'required|min:6',
        // 'address'=>'required|array',
        ]);

        $inputs = $request->except(['password']);

        $inputs['password'] = Hash::make($request->password);
        
dd($inputs);
      $users= User::create($inputs);
        // return redirect(route('users.index'))
        // ->with('success','User Added Succesfully');
//         $id=$users->id;

// foreach($addrs as $user){


// $add=$user->address;

// $address =new Address();
// $address->save($id,$add);
// }


//         $number=count($request->address);
//         if($number > 0){
// for($i=0;$i<$number;$i++){

//     if(trim($request->address[$i]) != ''){
//         $address =new Address();
//         $address=$request->address;
//      Address::create($address,$user_id);

//     }
// }
// echo "Data inserted";

//     }else{
// echo "Enter Address";

    // }
        // dd($request->address);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $user = User::findOrFail($id);
        return view('admin.users.edit')
        ->with('user',$user);



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
            'email'=>'required|email',
            'address'=>'required|max:191',
             'password'=>'required|min:6',   
            
        ]);

        $inputs = $request->except(['password']);
     

        if($request->password !="" && $request->password !== null){

            $request->validate(['password'=>'min:6']);
        }

        // dd($inputs);
        $user = User::find($id);
       
        $user->update($inputs);
        
        return redirect(route('users.index'))
        ->with('success','User updated Succesfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect(route('users.index'))
        ->with('success','User Deleted Succesfully');
    }
}
