<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\AssociatedStoreRequest;
use App\Http\Requests\AssociatedUpdateRequest;
use App\Http\Controllers\Controller;
use App\Associated;

class AssociatedController extends Controller
{

    public function __construct()
    {    
        $this->middleware('auth');
    }

    public function buscar(Request $request){
            $name = $request->get('name');
            $identification = $request->get('identification');
    
            $associateds = Associated::orderBy('id', 'ASC')
                ->name($name)
                ->identification($identification)
                 ->paginate(5);
    
             return view('admin.associated.index', compact('associateds'));
        }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associateds = Associated::orderBy('id', 'ASC')->paginate(7);

        return view('admin.associated.index', compact('associateds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.associated.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssociatedStoreRequest $request)
    {
        $associated = Associated::create($request->all());

        return redirect()->route('associateds.index', $associated->id)
            ->with('info', 'Asociado creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $associated = Associated::find($id);

        return view('admin.associated.show', compact('associated'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $associated = Associated::find($id);

        return view('admin.associated.edit', compact('associated'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssociatedUpdateRequest $request, $id)
    {
        $associated = Associated::find($id);

        $associated->fill($request->all())->save();

        return redirect()->route('associateds.index', $associated->id)
            ->with('info', 'Asociado actualiazado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $associated = Associated::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
