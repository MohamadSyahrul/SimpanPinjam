<?php

namespace App\Http\Controllers\Admin;

use App\Data;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\DataRequest;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Data::all();
        return view('pages.admin.data.index',[
            'items'=>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_anggota);
        Data::create($data);
        return redirect()->route('data-anggota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Data::findOrFail($id);
        return view('pages.admin.data.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(DataRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_anggota);
        $item = Data::findOrFail($id);
        $item->update($data);
        return redirect()->route('data-anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Data::findOrFail($id);
        $item->delete();
        return redirect()->route('data-anggota.index');
    }
}
