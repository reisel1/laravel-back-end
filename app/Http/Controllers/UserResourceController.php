<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class UserResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response()->json(User::get());        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //	get	all	the	data	that	has	been	posted	from	the	form
            // $post_data = $request->all();
            // $user = User::create($post_data);
            User::create($request->all());
           // $msg='Successfully added';
            return response()->json('Laravel msg - Successfully add'); 
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
       // $user = User::find($id);
        return response()->json(User::find($id));
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // //
         User::whereId($id)->update($request->all());
        // // $selection = Selection::find($id);
        // // $selection->update($request->all());

        // //Selection::find($input['id'])->fill($input)->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //     //
    //     $user = User::destroy($id);
    //    // $msg='Successfully deleted';
    //    // return response()->json('msg'=>$msg); 

    //     //return "ok";

    }
}
