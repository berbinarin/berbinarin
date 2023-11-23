<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $user = User::all();

        return view("GetalldataUser",['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        //
        $validated = $request->validated();

         User::create([
            'username' => $validated["username"],
            'email'=> $validated['email'],
            'password'=> bcrypt($validated['password']),
            "role"=>$validated["role"]

        ]);

        
        session()->flash('success', 'Formulir Pendaftaran Berhasil');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = User::find($id);
        return view ("GetalldataUserByid",['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = User::find($id);
        return view ("UpdateUser" , ["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        //

        $User = User::find($id);
        $User->username = $request->username;
        $User->email = $request->email;
        $User->password =bcrypt($request->password) ;
        $User->role = $request->role;

        $User->save();

        session()->flash('success', 'Formulir Profile User Berhasil di Update');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();

        session()->flash('success', 'data User Profile User Berhasil di di delete');

        return redirect('/user/create');
    }
}
