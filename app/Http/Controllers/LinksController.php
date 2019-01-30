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
                'url'           => 'required|url'
            ]
        );

        //New Link Object
        $link = new Link();

        $link->fill([
            'title'         => $validateData['title'],
            'description'   => $validateData['description'],
            'url'           => $validateData['url']

        ]);

        // Echt opslaan
        $link->save();

        // Terug naar overzichtpagina met de foto erin
        return redirect()->route('linkies.laralinks');
    }
}
