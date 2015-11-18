<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
        //
    }

    public function about()
    {
       // $name = '<span style="color:red">jelly</span>';
        //return view('sites.about')->with('name',$name);
       // $data = [];
       // $data['first']='<span style="color:green">Jelly</span>';
        //$data['last']='<span style="color:blue">Green</span>';
      //  return view('sites.about',$data);
        $people = ['taylor otwell','jeffray way','happy peter'];
        $first='<span style="color:green">Jelly</span>';
        $last='<span style="color:blue">Green</span>';
        return view("sites.about",compact('people'));
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
        //
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

    public function contact()
    {
        $first='<span style="color:green">Jelly</span>';
        $last='<span style="color:blue">Green</span>';
        return view("sites.contact",compact("first","last"));
    }
}
