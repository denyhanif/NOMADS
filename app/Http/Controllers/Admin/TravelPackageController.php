<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\TravelPackageRequest;// req form isinya attribut
use App\Http\Controllers\Controller;
use App\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;//fung lib laravel


class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items= TravelPackage::all();// ambil semua data dari tb travel
        return view('pages.admin.travel-package.index',[
            'items'=>$items//parameter untuk memanggil travel package
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
         $data= $request->all();//ambil semua isi form
         $data['slug'] = Str::slug($request->title);
         //create
         TravelPackage::create($data);
         return redirect()->route('travel-package.index');
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
        $item = TravelPackage::findOrFails($id);// jika data di ada maka di munculkan jika tidak eror 404
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
    public function destroy($id)
    {
        //
    }
}
