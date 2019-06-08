<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Post;
use App\Categorie;
use DB;

use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Api as ApiResources;
use App\Http\Resources\Api2 as Api2Resources;
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Users()
    {
        $users=User::all();
        return ApiResources::collection($users);
    }

    public function Products()
    {
        $post=Post::all();
        return ApiResources::collection($post);
    }

    public function Categories()
    {
        $categories=Categorie::all();
        return Api2Resources::collection($categories);
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
       
        if(DB::table('Users')->where('name', $request->input('name'))->exists()){
            return response()->json([
                'Success'=>'false'
            ]);
        }
        if(DB::table('Users')->where('email', $request->input('email'))->exists()){
            return response()->json([
                'Success'=>'false'
            ]);
        }
        $user= new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->Categorie=($request->input('Categorie')!=null);
        $user->Product=($request->input('Product')!=null);
        $user->Users=(($request->input('Users'))!=null);
       
        if( $user->save()){
            return response()->json([
                'Success'=> 'true'
            ]);
            }
        else return response()->json([
            'Success'=>'false'
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
