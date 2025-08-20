<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //$posts = Post::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { // add art_description, tags, visibility to db later

        $data = $request->validate([ // Validation Rules
            'title' => 'required',
            'year' => 'required',
            'type' => 'required',
            'medium'=> 'required',
            'art_description' => 'required',
            'image' => ['required', 'image'],

        ]);
        
        auth()->user()->posts()->create($data); // Laravel adds the ID automatically due to the many-to-many rs of user and posts

        dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
