<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'nama'     => 'required',
            'username' => 'required',
            'email'    => 'required|unique:users',
            'no_telp'  => 'required|max:15',
            'password' => 'required',
        ]);

        User::create([
            'nama'     => $request->nama,
            'username' => $request->username,
            'email'    => $request->email,
            'no_telp'  => $request->no_telp,
            'password' => bcrypt($request->password)
        ]);
        
        return redirect()->route('user.index');
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
        $user = User::find($id);
        return view('user.edit', compact('user'));
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
            'nama'     => 'required',
            'username' => 'required',
            'email'    => 'required|unique:user,email,'.$id.',user_id',
            'no_telp'  => 'required|max:15',
            'password' => 'required',
        ]);

        $dataUpdate = User::findOrFail($id);

        $user = [
            'nama'     => $request->nama,
            'username' => $request->username,
            'email'    => $request->email,
            'no_telp'  => $request->no_telp,
        ];
        
        if($request->filled('password')){
            $user['password'] = bcrypt($request->password);
        }

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('user_id', $id)->delete();
        return redirect()->route('user.index');
    }
}
