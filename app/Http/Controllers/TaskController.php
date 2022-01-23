<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Beadas;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beadasok = Beadas::orderBy('class')->get();
        return view('beadasok.index', ['beadasok' =>$beadasok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beadasok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $adatok = $request->only(['class', 'name', 'url', 'points', 'message']);
        $beadas = new Beadas();
        $beadas->fill($adatok);
        $beadas->save();
        return redirect()->route('beadasok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beadas  $beadas
     * @return \Illuminate\Http\Response
     */
    public function show(Beadas $beadas)
    {
        return view('beadasok.show', ['beadas'=>$beadas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beadas  $beadas
     * @return \Illuminate\Http\Response
     */
    public function edit(Beadas $beadas)
    {
        return view('beadasok.edit', ['beadas' => $beadas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beadas  $beadas
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, Beadas $beadas)
    {
        $adatok= $request->only(['class', 'name', 'url', 'points', 'message']);
        $beadas->fill($adatok);
        $beadas->save();
        return redirect()->route('beadasok.show', $beadas->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beadas  $beadas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beadas $beadas)
    {
        $beadas->delete();
        return redirect()->route('beadasok.index');
    }
}
