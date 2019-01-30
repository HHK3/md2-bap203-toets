<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
{
    public function index() {
        $links = Link::all();
        return view('linkies.laralinks',compact('links'));
    }

    public function showLinksForm() {
        return view('linkies.linkie-add');
    }

    public function handleLinksForm(Request $request) {
        $validateData = $request->validate(
            [
                'title'         => 'required|min:8',
                'description'   => 'required',
                'url'           => 'required|url',
                'photo'         => 'required|image|max:3000'
            ]
        );

        $targetFolder = public_path('uploadphotos');
        $filename = str_random(16) . '.' . $validateData['photo']->getClientOriginalExtension();

        // Folder & Bestandsnaam aan elkaar toevoegen
        $validateData['photo']->move($targetFolder, $filename);

        //New Link Object
        $link = new Link();

        $link->fill([
            'title'         => $validateData['title'],
            'description'   => $validateData['description'],
            'url'           => $validateData['url'],
            'photo'         => $filename

        ]);

        // Echt opslaan
        $link->save();

        // Terug naar overzichtpagina met de foto erin
        return redirect()->route('linkies.laralinks');
    }
}
