<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account as account;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = account::all();
        $data = $data->toArray();
        return $data;
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'department' => 'required',
            'phone' => 'required',
        ]);
        $acc = new Account;
        $acc->name = $request->name;
        $acc->department = $request->department;
        $acc->phone = $request->phone;
        $acc->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $data = account::find($id);
        $data = $data->toArray();
        return $data;
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
        $data = account::find($id);
        $request->validate([
            'name' => 'required',
            'department' => 'required',
            'phone' => 'required',
        ]);
        $data->name = $request->name;
        $data->department = $request->department;
        $data->phone = $request->phone;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = account::findOrFail($id);
        $data->delete();
        return $this->index();
    }
}
