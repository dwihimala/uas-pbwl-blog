<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Post::all();
        return view('post.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'date' => 'bail|required|unique:tb_post',
                'slug' => 'required'
            ],
            [
                'date.required' => 'Tanggal wajib diisi',
                'date.unique' => 'Tanggal sudah ada',
                'slug.required' => 'Slug wajib diisi'
            ]
            );
    
    Post::create([
        'date' => $request->date,
        'slug' => $request->slug,
        'title' => $request->title,
        'text' => $request->text,
        'id_cat' => $request->id_cat
    ]);

    return redirect('/post');
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
        $row = Post::findOrFail($id); 
        return view('post.edit', compact('row'));
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
        $request->validate(
            [
                'date' => 'bail|required',
                'slug' => 'required'
            ],
            [
                'date.required' => 'Tanggal wajib diisi',
                'slug.required' => 'Slug wajib diisi'
            ]
            );

            $row = Post::findOrFail($id);
            $row->update([
                'date' => $request->date,
                'slug' => $request->slug,
                'title' => $request->title,
                'text' => $request->text,
                'id_cat' => $request->id_cat

            ]);

            return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Post::findOrFail($id);
        $row->delete();

        return redirect('/post');
    }
}
