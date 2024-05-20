<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helper;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
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

        // validazione dei dati
        $request->validate(
            [
                'title' => 'required|min:3|max:255',
                'thumb' => 'required|min:20|max:65353',
                'price' => 'required|min:2|max:10',
                'series' => 'required|min:5|max:50',
                'sale_date' => 'required',
                'type' => 'required|min:4|max:30',
                'artists' => 'required|min:2',
                'writers' => 'required|min:2 ',
            ],
            [
                'title.required' => 'Il titolo è un campo obbligatorio',
                'title.min' => 'Il titolo deve contenere almeno :min caratteri',
                'title.max' => 'Il titolo non può contenere più di :max caratteri',
                'thumb.required' => 'La thumb è un campo obbligatorio',
                'thumb.min' => 'La thumb deve contenere almeno :min caratteri',
                'thumb.max' => 'La thumb non può contenere più di :max caratteri',
                'price.required' => 'Il prezzo è un campo obbligatorio',
                'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
                'price.max' => 'Il prezzo non può contenere più di :max caratteri',
                'series.required' => 'La serie è un campo obbligatorio',
                'series.min' => 'La serie deve contenere almeno :min caratteri',
                'series.max' => 'La serie non può contenere più di :max caratteri',
                'sale_date.required' => 'Il giorno di vendita è un campo obbligatorio',
                'type.required' => 'Il tipo è un campo obbligatorio',
                'type.min' => 'Il tipo deve contenere almeno :min caratteri',
                'type.max' => 'Il tipo non può contenere più di :max caratteri',
                'artists.required' => 'Artisti è un campo obbligatorio',
                'artists.min' => 'Artisti deve contenere almeno :min caratteri',
                'writers.required' => 'Scrittori è un campo obbligatorio',
                'writers.min' => 'Scrittori deve contenere almeno :min caratteri',

            ]
        );



        //ricevo da create i datri del nuovo fumetto, li salva nel database e reindirizzo alla show con l'id del nuovo fumetto
        // prendo tutti i dati provenienti dal form e li salvo in un array associativo
        $form_data = $request->all();

        $new_comic = new Comic();

        // form_data non contiene lo slug, quindi lo aggiungo
        $form_data['slug'] = Helper::generateSlug($form_data['title'], new Comic);

        $new_comic->fill($form_data);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);
        // dump($comic);
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
        $form_data = $request->all();
        if ($form_data['title'] === $comic->title) {
            $form_data['slug'] = $comic->slug;
        } else {
            $form_data['slug'] =  Helper::generateSlug($form_data['title'], new Comic);
        }

        // effettuo il fill dei dati e li salva aggiornando il database
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', 'Il fumetto ' . $comic->title . ' è stato eliminato correttamente');
    }
}
