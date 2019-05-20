<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Usuario;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $payments = Payment::all();
        $usuario = Usuario::find($id);

        return view('payments.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $usuario = Usuario::find($id);

        return view('payments.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['phone' => 'required', 'amount' => 'required']);

        $payment = new Payment;

        $payment->amount = trim($request->amount);
        $payment->phone = trim($request->phone);
        $payment->save();

        return $payment;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    public function showByUsuario($id)
    {
        $usuario = Usuario::find($id);

        return view('payments.index')->with('usuario', $usuario);
    }

    public function showByUsuarioApi($id)
    {
        $usuario = Usuario::find($id);

        return $usuario->Payments;
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
    public function destroy(Payment $payment)
    {
        $phone = $payment->phone;
        $payment->delete();

        $payments = Payment::where('phone', $phone)->get();

        return $payments;
    }
}
