<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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
    public function store(StoreComicRequest $request)
    {
        // $request->validate([
        //     'title' => 'required|max:60',
        //     'series' => 'required|max:100',
        //     'type' => 'required|max:40',
        //     'price' => 'required|numeric|min:0|regex:/^\d{1,8}(\.\d{2})?$/',
        //     // 'sale_date' => 'nullable|date_format:Y-m-d',
        //     'sale_date' => 'date_format:Y-m-d',
        //     // 'description' => 'nullable',
        //     'artists' => 'required|max:300',
        //     'writers' => 'required|max:300',
        //     // 'thumb_img' => 'nullable|url|ends_with:.jpeg,.png,.svg,.webp,.bmp|max:400',
        //     'thumb_img' => 'url|ends_with:.jpeg,.png,.svg,.webp,.bmp|max:400',
        // ]);

        // $data = $request->all();

        // $data = $this->validation($request->all());
        
        $data = $request->validated();
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
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        // $data = $request->all();
        // $data = $this->validation($request->all());
        //
        $data = $request->validated();
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


    //  /**
    //  * funzione validation.
    //  */
    // public function validation($data)
    // {
    //     $validator = Validator::make($data, [
            
    //         'title' => 'required|min:2|max:60',
    //         'series' => 'required|min:5|max:100',
    //         'type' => 'required|min:5|max:40',
    //         'price' => 'required|numeric|min:0|regex:/^\d{1,8}(\.\d{2})?$/',
    //         'sale_date' => 'nullable|date_format:Y-m-d',
    //         'description' => 'nullable',
    //         'artists' => 'required|min:5|max:300',
    //         'writers' => 'required|min:5|max:300',
    //         'thumb_img' => 'nullable|url|ends_with:.jpeg,.jpg,.png,.svg,.webp,.bmp|max:400',
    //     ],[
    //         'title.min' => 'Il campo "title" deve essere lungo almeno :min caratteri.',
    //         'title.max' => 'Il campo "title" non può superare i :max caratteri.',
    //         'type.min' => 'Il campo "type" deve essere lungo almeno :min caratteri.',
    //         'type.max' => 'Il campo "type" non può superare i :max caratteri.',
    //         'series.min' => 'Il campo "series" deve essere lungo almeno :min caratteri.',
    //         'series.max' => 'Il campo "series" non può superare i :max caratteri.',
    //         'sale_date.date_format' => 'Il campo "date" deve essere in formato YYYY-MM--DD.',
    //         'artists.min' => 'Il campo "artists" deve essere lungo almeno :min caratteri.',
    //         'artists.max' => 'Il campo "artists" non può superare i :max caratteri.',
    //         'writers.min' => 'Il campo "writers" deve essere lungo almeno :min caratteri.',
    //         'writers.max' => 'Il campo "writers" non può superare i :max caratteri.',
    //         'thumb_img.url' => 'Il campo "image" deve contenere una url.',
    //         'thumb_img.ends_with' => 'Il campo "image" deve terminare con .jpeg,.jpg,.png,.svg,.webp,.bmp.',
    //         'price.numeric' => 'Il campo "price" deve essere un numero',
    //         'price.regex' => 'Il campo "price" deve essere in un formato valido, i numeri interi separati da "." e 2 cifre come decimali ',
    //     ])->validate();

    //     return $validator;
    // }
}
