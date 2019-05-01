<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\DocumentStoreRequest;
use App\Http\Requests\DocumentUpdateRequest;
use App\Http\Controllers\Controller;
use App\Document;
use App\Area;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{

    public function __construct()
    {    
        $this->middleware('auth');
    }

     public function buscar(Request $request){
        $name = $request->get('name');
        $area = $request->get('area');

         $documents = Document::orderBy('id', 'DESC')
            ->name($name)
            ->area($area)
            ->paginate(5);

         return view('admin.document.index', compact('documents'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::orderBy('id', 'ASC')->paginate();

        return view('admin.document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::orderBy('name', 'ASC')->pluck('name');
        return view('admin.document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentStoreRequest $request)
    {
        
        // $document = Document::create($request->all());
        $document = $request->all();
        $image = $request->file('image');

        Document::create([
            'name' => $document['name'], 
            'image' => $image->store('imagenes/', 'public'),
            'entry_date' => $document['entry_date'], 
            'area' => $document['area'], 
            'category' => $document['category'], 
            'subcategory' => $document['subcategory'],
            'comment' => $document['comment']]);

        //Image
        // if($request->file('image')){
            
        //     $path = Storage::disk('public')->put('img', $request->file('image'));
        //     $document->fill(['image' => asset($path)])->save();
        // }

        return redirect()->route('documents.index')
            ->with('info', 'Documento creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = Document::find($id);

        return view('admin.document.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = Document::find($id);

        return view('admin.document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentUpdateRequest $request, $id)
    {
        $document = Document::find($id);

        $document->fill($request->all())->save();

        //Image
        if($request->file('image')){
            
            $path = Storage::disk('public')->put('img', $request->file('image'));
            $document->fill(['image' => asset($path)])->save();
        }

        return redirect()->route('documents.index', $document->id)
            ->with('info', 'Documento actualiazado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
