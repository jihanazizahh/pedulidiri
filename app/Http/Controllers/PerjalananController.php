<?php

namespace App\Http\Controllers;

use App\perjalanan;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjalanan = perjalanan::all();
        return view('perjalanan.index', compact('perjalanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perjalanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perjalanan = [
            'id_user'=>$request->id_user,
            'tgl_perjalanan'=>$request->tgl_perjalanan,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu_tubuh'=>$request->suhu_tubuh,
        ];
        perjalanan::create($perjalanan);
        return redirect('/perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(perjalanan $perjalanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit(perjalanan $perjalanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perjalanan $perjalanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        perjalanan::find($id)->delete();
        return redirect('/perjalanan');
    }
}
