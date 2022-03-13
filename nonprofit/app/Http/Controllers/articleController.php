<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return article::orderBy('title','DESC')->get();
        //returning all categories
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
     * @return Article
     */
    public function store(Request $request)
    {
        $existingArticle = new article;
        $existingArticle->author_id = $request->article['author_id'];
        $existingArticle->category_id = $request->article['category_id'];
        $existingArticle->title = $request->article['title'];
        $existingArticle->text = $request->article['text'];
        $existingArticle->save();

        return $existingArticle;
        //create new article
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return string
     */
    public function show($id)
    {
        $existingArticle = article::find($id);

        if($existingArticle) {
            $existingArticle->get();
            return $existingArticle;
        }

        return "Article not found";
        //show one article
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
     * @return string
     */
    public function update(Request $request, $id)
    {
        $existingArticle = article::find($id);

        if ($existingArticle) {

            $existingArticle->author_id = $request->article['author_id'];
            $existingArticle->category_id = $request->article['category_id'];
            $existingArticle->title = $request->article['title'];
            $existingArticle->text = $request->article['text'];
            $existingArticle->save();
            return $existingArticle;
        }

        return "Article not found";
        //update select article
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id)
    {
        $existingArticle = article::find($id);

        if($existingArticle) {
            $existingArticle->delete();
            return "Successfully deleted!";
        }

        return "Article not found";
        //remove article
    }
}
