<?php

namespace App\Http\Controllers;
use App\Songs;
use Illuminate\Http\Request;


class SongsController extends Controller
{

    
    public function __construct() { 
    }

    public function getSongs() {
        $songList = \App\Songs::all();

        return view('songs', ['songs' => $songList]);
    }

    public function addSong() {
        

        return view('add_song', ['status' => 'none']);
    }

    public function saveSong(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'lyrics' => 'required'
        ]);

        $songs = new \App\Songs();
        $songs->title = $request->input('title');
        $songs->artist = $request->input('artist');
        $songs->lyrics = $request->input('lyrics');
        $songs->save();
        // var_dump($data); 

        return view('add_song', ['status' => 'success', 'msg' => 'Song added!']);
    }

    public function editSong($id) {
        $songs = \App\Songs::find($id);
        // var_dump($songs);
        return view('edit_song', ['status' => 'none', 'songs' => $songs]);
    }

    public function saveEditSong(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'lyrics' => 'required'
        ]);

        $songs = \App\Songs::find($id);
        $songs->title = $request->input('title');
        $songs->artist = $request->input('artist');
        $songs->lyrics = $request->input('lyrics');
        $songs->save();
        // $songs = \App\Songs::find($id);
        // var_dump($data); 

        return view('edit_song', ['status' => 'success', 'msg' => 'Song updated!', 'songs' => $songs]);
    }
    public function deleteSong($id) {
        $songs = \App\Songs::destroy($id);
        $songList = \App\Songs::all();
        return view('songs', ['songs' => $songList]);
    }
}
