<?php

namespace App\Http\Controllers;

use App\Penduduk;
use App\User;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $penduduk = new Penduduk();
        $penduduk = $penduduk->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
        return view('admin.penduduk.index', ['penduduk' => $penduduk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!empty($request->file)) {
            $image = $request->file->store('foto');
        } else {
            $image = ' ';
        }
        Penduduk::create(array_merge($request->all(), [
            'image' => $image
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        return view('admin.penduduk.edit', ['penduduk' => $penduduk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $image = null;
        if (!empty($request->file)) {
            $image = $request->file->store('foto');
        }
        $data = $request->except(['_token', '_method']);
        Penduduk::where('id', $penduduk->id)->update(array_merge($data, [
            'image' => $image ?? ' '
        ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        //
    }
}
