<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        ]);
        User::create($data);
        return redirect('/user')->with('toast_success', 'User Berhasil Ditambah >.<');
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
        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'stock' => 'required|integer',
            'cap_price' => 'required|integer',
            'sell_price' => 'required|integer',
            'photo' => 'mimes:jpeg,jpg,png,gif',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $user = User::find($id);
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('user-photo', 'public');
            File::delete('storage/' .  $user->photo);
            $validatedData['photo'] = $photo;
        }
        $user->update($validatedData);

        return redirect('/user')->with('toast_success', 'Produk berhasil diedit >.<');
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
        File::delete('storage/' .  $user->photo);
        $user->delete();
        return redirect('/user')->with('toast_success', 'Produk berhasil dihapus ^_^');
    }
}
