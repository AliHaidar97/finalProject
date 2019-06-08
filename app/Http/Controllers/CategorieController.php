<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use DB;
use Auth;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['show']]);
    }


    public function index()
    {
        if(!Auth::guest()&&Auth::user()->Categorie){
        $categories=Categorie::all();
        return view('pages.categories')->with('categories',$categories);}
        else return view('pages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::guest()&&Auth::user()->Categorie){
        return view("categorie.create");}
        else return view('pages.home');
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
            'Name'=>'required',
            'Description'=>'required'
        ]);
        if(DB::table('categories')->where('Name',$request->input('Name'))->exists()){
            return redirect('categories');
        }
        $categorie= new Categorie;
        $categorie->Name=$request->input('Name');
        $categorie->Description=$request->input('Description');
        $categorie->save();
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie=Categorie::find($id);
        $product=$categorie->product;
        return view('Categorie.viewid',compact('categorie','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::guest()&&Auth::user()->Categorie){
        $categorie=Categorie::find($id);
        return view("categorie.edit")->with('categorie',$categorie);}
        else return view("pages.home");
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
            'Name'=>'required',
            'Description'=>'required'
        ]);
        
        $categorie=Categorie::find($id);
        if($request->input('Name')!=$categorie->Name&&DB::table('categories')->where('Name',$request->input('Name'))->exists()){
            return view("categories");
        }
        $categorie->Name=$request->input('Name');
        $categorie->description=$request->input('Description');
        $categorie->save();
        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        if(!Auth::guest&&Auth::user()->Categorie){
        $categorie=Categorie::Find($id);
        $categorie->delete();
        return redirect('categories');}
        return view('pages.home');
    }
}
