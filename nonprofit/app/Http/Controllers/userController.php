<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::orderBy('created_at','DESC')->get();
        //returning all users
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
     * @return User
     */
    public function store(Request $request)
    {
        $newUser = new User;
        $newUser->first_name = $request->user['first_name'];
        $newUser->last_name = $request->user['last_name'];
        $newUser->email = $request->user['email'];
        $newUser->mobile = $request->user['mobile'];
        $newUser->admin = $request->user['admin'];
        $newUser->password = $request->user['password'];
        $newUser->save();

        return $newUser;
        //create new user
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return string
     */
    public function show($id)
    {
        $existingUser = User::find($id);

        if($existingUser) {
            $existingUser->get();
            return $existingUser;
        }
        return "User not found";
        //show one user
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
        $existingUser = User::find($id);

        if ($existingUser) {

            $existingUser->first_name = $request->user['first_name'];
            $existingUser->last_name = $request->user['last_name'];
            $existingUser->email = $request->user['email'];
            $existingUser->mobile = $request->user['mobile'];
            $existingUser->save();
            return $existingUser;
        }

        return "User not found";
        //update select user
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id)
    {
        $existingUser = User::find($id);

        if($existingUser) {
            $existingUser->delete();
            return "Successfully deleted!";
        }

        return "User not found";
        //remove user
    }
}
