<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(!Auth::guest()&&Auth::user()->Users){
        return view('pages.users');}
        return view('pages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::guest()&&Auth::user()->Users){
        return view("Users.create");}
        return view('pages.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $user= new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->Categorie=($request->input('Categorie')!=null);
        $user->Product=($request->input('Product')!=null);
        $user->Users=(($request->input('Users'))!=null);
        $user->save();
        return redirect('Users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        if(!Auth::guest()&&Auth::user()->Users){
        $user=User::find($id);
        
        return view('users.viewid',compact('user'));}
        return view('pages.home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::guest()&&Auth::user()->Users){
        $user=User::find($id);
        return view("Users.edit")->with('user',$user);}
        return view("pages.home");
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

        $user=User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->Categorie=($request->input('Categorie')!=null);
        $user->Product=($request->input('Product')!=null);
        $user->Users=(($request->input('Users'))!=null);
        $user->save();
        return redirect('Users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::Find($id);
        $user->delete();
        return redirect('Users');
    }

}
