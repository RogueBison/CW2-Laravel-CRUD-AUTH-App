<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fish;
use Illuminate\Support\Facades\Storage;

class CourseworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $records = Fish::all();
        /* return view('crud.items', ['records' => $records]); */
        return view('crud.items')->with('records', $records);
    }

    public function singleRecord(Fish $record)
    {
        return view('crud.item')->with('record', $record);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new Fish;
        /* $record->user_id = Auth::user()->id; */
        $record->title = $request->title;
        $record->slug = $request->slug;
        $record->excerpt = $request->excerpt;
        $record->body = $request->body;
        $record->mimeType = $request->file('upload')->getMimeType();
        $record->originalName = $request->file('upload')->getClientOriginalName();
        $record->path = $request->file('upload')->store('uploads', 'public');
        $record->save();

        $records = Fish::all();
        return view('crud.items')->with('records', $records);
    }
    
    public function uploads (Request $request){
        sleep(15);
        dd($request->record);
        $record = $request->record;
        $mime = $record->getMimeType();
        $originalName = $record->getClientOriginalName();
        $path = $record->store('uploads', 'public');
        return view('crud.items',
        ['path'=>$path,'originalName'=> $originalName,'mime'=>$mime]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fish $record)
    {
        $record = Fish::findOrFail($record->id);
        $record->title = $request->title;
        $record->slug = $request->slug;
        $record->excerpt = $request->excerpt;
        $record->body = $request->body;
        if ($request->hasFile('upload')) {
            Storage::delete($record->path);
            $record->originalName = request()->file('upload')->getClientOriginalName();
            $record->path = request()->file('upload')->store('uploads');
            $record->mimeType = $request->file('upload')->getClientMimeType();
        }
		$record->save();

        $records = Fish::all();
        return view('crud.items')->with('records', $records);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fish $record)
    {
        return view('crud.edit',
        [
            'id'=>$record->id,
            'title'=>$record->title,
            'slug'=>$record->slug,
            'excerpt'=>$record->excerpt,
            'body'=>$record->body,
            'path'=>$record->path,
            'originalName'=>$record->originalName,
            'mimeType'=>$record->mimeType
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fish $record)
    {
        $record = Fish::findOrFail($record->id);
        Storage::delete($record->path);
        $record->delete();
        return back()->with(['operation'=>'deleted', 'id'=>$record->id]);
    }
}
