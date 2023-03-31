<?php

namespace App\Http\Controllers;

use App\Http\Requests\LibraryRequest;
use App\Models\Library;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    public function create()
    {
        return view('library.create');
    }

    public function store(LibraryRequest $request) 
    {
        Library::create([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages,
            'status' => $request->status
        ]);
    
        return redirect('/library');
    }

    public function edit($id)
    {
        $library = Library::find($id);
        return view('library.edit', compact(['library']));
    }

    public function update(LibraryRequest $request, $id){
        $library = Library::find($id);
        $library->update([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages,
            'status' => $request->status
        ]);
        return redirect('/library');
    }

    public function delete ($id) {
        $library = Library::find($id)->delete();
        return redirect('/library');
    }

    public function __construct()
    {
        $this -> middleware('auth');
        // $this -> middleware('verified');
        // $this -> middleware('is_admin');
    }

    public function index(Request $request) {
        if ($request -> search) {
            $library = Library::where('library', 'LIKE', "%$request->search%")
            ->get();

            return $library;
        }
        $library = Library::paginate(5);
        return view('library.index', [
            'data' => $library
        ]);
        
    }
}
