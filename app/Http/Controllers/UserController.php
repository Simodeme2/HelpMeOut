<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('users.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->email = $request->get('email');
        $user->street = $request->get('street');
        $user->street_number = $request->get('street_number');
        $user->zipcode = $request->get('zipcode');
        $user->city = $request->get('city');
        $user->province = $request->get('province');
        $user->country = $request->get('country');
        $user->biography = $request->get('biography');
        $user->credit = $request->get('credit');
        $hashed_password = Hash::make($request->input('data.attributes.password'));
        $user->password = $hashed_password;
        $user->save();

        // $role = new Role(['role']);
        // $user->roles()->save($role);

        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $users = User::all();
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',compact('user','id'));
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
        // $this->validate($request, [
        //     'email' => [
        //         'required',
        //         'email',
        //         Rule::unique('users')->ignore($userId),
        // ]);

        $user = User::find($id);
        $user->firstname=$request->get('firstname');
        $user->lastname=$request->get('lastname');
        $user->email=$request->get('email');
        $user->street=$request->get('street');
        $user->street_number=$request->get('street_number');
        $user->zipcode=$request->get('zipcode');
        $user->city=$request->get('city');
        $user->province=$request->get('province');
        $user->country=$request->get('country');
        $user->biography=$request->get('biography');
        $user->credit=$request->get('credit');
        $user->save();
        return redirect('users');
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
