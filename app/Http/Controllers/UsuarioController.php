<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Usuario::all();

        foreach ($users as $user) {
            $user->link = route('payment.showByUsuario', $user->_id);
        }
        return view('users/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $this->validate($request, [
            'phone' => 'required|unique:users,phone',
            'password' => 'required',
            'site' => 'required'
        ]);

        $users = Usuario::where('username', trim($request->phone))->get();

        if($users->count() > 0) {
            return response()->json([
                'status' => 'failed',
                'status_code' => 302,
                'massage' => 'Usuario existente',
            ], 302);
        }

        $usuario = new Usuario;
        $usuario->username = trim($request->phone);
        $usuario->password = trim($request->password);
        $usuario->site = trim($request->site);

        $usuario->save();

        return $usuario;
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
    public function destroy(Usuario $usuario)
    {
        $usuario->Payments()->delete();

        $usuario->delete();

        $users = Usuario::all();

        return $users;
    }

    public function getAllUser()
    {
        $users = Usuario::all();

        foreach ($users as $user) {
            $user->link = route('payment.showByUsuario', $user->_id);
        }

        return $users;
    }
}
