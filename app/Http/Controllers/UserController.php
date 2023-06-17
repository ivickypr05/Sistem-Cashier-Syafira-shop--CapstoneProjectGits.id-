<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
        [
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:50',
            'role' => 'required'
        ]);
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect('/user')->with('toast_success', 'Pengguna Berhasil Ditambah >.<');
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
        $data['user'] = User::find($id);
        return view('admin.user.edit', $data);
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
        $data = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'role' => 'required|in:admin,cashier',
            'email' => 'required|email|unique:users,email,' . $id]);

        $data['role'] = $request->role;
        $user = User::findOrFail($id);
        $data['password'] = $request->password ? Hash::make($request->password) : $user->password;
        user::where('id', $id)->update($data);
        return redirect('/user')->with('toast_success', 'Pengguna berhasil diedit >.<');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user')->with('toast_success', 'Pengguna berhasil dihapus ^_^');
    }
}
