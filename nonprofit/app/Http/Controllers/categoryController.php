<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return category::orderBy('title','DESC')->get();
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
     * @return category
     */
    public function store(Request $request)
    {
        $newCategory = new category;
        $newCategory->title = $request->category['title'];
        $newCategory->save();

        return $newCategory;
        //create new category
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return string
     */
    public function show($id)
    {
        $existingCategory = category::find($id);

        if($existingCategory) {
            $existingCategory->get();
            return $existingCategory;
        }

        return "Category not found";
        //show one category
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
        $existingCategory = category::find($id);

        if ($existingCategory) {

            $existingCategory->title = $request->category['title'];
            $existingCategory->save();
            return $existingCategory;
        }

        return "Category not found";
        //update select category
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id)
    {
        $existingCategory = category::find($id);

        if($existingCategory) {
            $existingCategory->delete();
            return "Successfully deleted!";
        }

        return "Category not found";
        //remove category
    }
}
