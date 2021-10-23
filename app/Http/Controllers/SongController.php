<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songs;

class SongController extends Controller
{

    public function index(Request $request){

        
        $name = $request->all()['name'];
        $genre = $request->all()['genre'];
 
        $songs = Songs::orderBy('id','DESC')->name($name)->genre($genre)->get();

        return view('search.index',compact('songs'));
    }

    public function create()
    {
        return view('addsong.index');
    }

    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'image' => 'required',
        ]);
        
        $song = new Songs();
        $song->name = $request->all()['name'];
        $song->description = $request->all()['description'];
        $song->genre = $request->all()['genre'];
        $song->image = $request->all()['image'];
        $song->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $song = Songs::findOrFail($id);
        
        return view('editsong.index',[
            'song' => $song
        ]);
    }

    public function update(Request $request, $id)
    {   

        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'image' => 'required',
        ]);

        $song = Songs::findOrFail($id);

        $song->name = $request->all()['name'];
        $song->description = $request->all()['description'];
        $song->genre = $request->all()['genre'];
        $song->image = $request->all()['image'];
        $song->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $song = Songs::findOrFail($id);

        $song->delete();

        return redirect('/');
    }

    public function confirmDelete($id)
    {
        $song = Songs::findOrFail($id);
        
        return view('deletesong.index',[
            'song' => $song
        ]);
    }
}
