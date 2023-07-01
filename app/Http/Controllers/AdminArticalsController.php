<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;

class AdminArticalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Artical::where('artical_type','Post')->get();
        $quotes = Artical::where('artical_type','Quote')->get();

        return view('admin.articals.index', compact('posts', 'quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Artical::create($request->all());
        return redirect('admin/articals');
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
        $artical = Artical::findOrFail($id);
        return view('admin.articals.edit', compact('artical'));
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
        $artical = Artical::findOrFail($id);
        $artical->update($request->all());
        return redirect('admin/articals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artical::findOrFail($id)->delete();
        return redirect()->back();
    }
}
