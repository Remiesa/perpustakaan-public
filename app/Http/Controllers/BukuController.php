<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Http\Requests\StorebukuRequest;
use App\Http\Requests\UpdatebukuRequest;
use App\Models\genre;
use Illuminate\Support\Facades\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function showAll(){
        return view('layouts.buku', [
            "data" => buku::all()
        ]);
     }

     public function showSingle(buku $buku){
        return view('layouts.buku_single', [
            "data" => $buku
        ]);
     }

     public function showGenre($id){
        return view('layouts.genre',[
            "data" => buku::Where('genre_id', $id)->get(),
            "data2" => genre::where('id', $id)->get()
        ]);
     }

     public function showAuthor($author){
        return view('layouts.author',[
            "data" => buku::Where('author', $author)->first(),
            "data2" => buku::Where('author', $author)->get()
        ]);
     }

    public function index()
    {
        $query = request()->query('search');
        if($query){
            return view('layouts.search', [
                "data" => buku::Where("name", "LIKE", "%{$query}%")->get(),
                "data2" => $query
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebukuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebukuRequest $request, buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        //
    }
}
