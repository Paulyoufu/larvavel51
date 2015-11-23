<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::latest()->Published()->get();//将最新的文章放在最前面
       // $articles = Article::all();
       // return view('articles.index',compact('articles'));
      //  dd(\Auth::user());
       return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Httesponse
     */
    public function create()
    {
       return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateArticleRequest $request)
    {
      //dd($request->all());
        //post data
        // store database
        // redirect
      //  $input = $request->all();
       // $input['published_at']=Carbon::now();
        Article::create($request->all());
        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
       //dd($article->published_at);显示时间
        // if(is_null($article))
       // {
        //    abort(404);
       // }
       // dd($article->created_at->diffForHumans());//显示多少天之前
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //  $article = Article::findOrFail($id); //攻取文章
      //  return view('articles.edit',compact('article'));

        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CreateArticleRequest $request, $id)
    {
    $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('/articles');
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
