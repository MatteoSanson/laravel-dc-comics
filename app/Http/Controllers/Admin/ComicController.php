<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:60',
            'series' => 'required|max:100',
            'type' => 'required|max:40',
            'price' => 'required|numeric|min:0|regex:/^\d{1,8}(\.\d{2})?$/',
            // 'sale_date' => 'nullable|date_format:Y-m-d',
            'sale_date' => 'date_format:Y-m-d',
            // 'description' => 'nullable',
            'artists' => 'required|max:300',
            'writers' => 'required|max:300',
            // 'thumb_img' => 'nullable|url|ends_with:.jpeg,.png,.svg,.webp,.bmp|max:400',
            'thumb_img' => 'url|ends_with:.jpeg,.png,.svg,.webp,.bmp|max:400',
        ]);

        $data = $request->all();
        
        $comic = new Comic();
        // $comic->title = $data['title'];
        // $comic->series = $data['series'];
        // $comic->type = $data['type'];
        // $comic->price = $data['price'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->description = $data['description'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];
        // $comic->thumb_img = $data['thumb_img'];

        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);
        // dd($comic);
        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
