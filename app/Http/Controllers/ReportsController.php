<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Drawer;
use App\Camera;
use App\Novelty;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $reports = DB::table('reports')->get();

       return view('reports.index',compact('reports'));
    }
    public function ajax(Request $request)
    {
       
        if($request->ajax()){
            return $request->id;
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $drawers = Drawer::all();
        $cameras = Camera::all();

        return view('reports.create', compact('drawers','cameras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input('tipo') == 1){
            
            $novelty = Novelty::first();
            $novelty->reports()->create([
                'review' => $request->input('review')
            ]);
            return 'listo';
        }
        if($request->input('tipo') == 2){
            $id = $request->input('cameras');

            $camera = Camera::find($id);
            $camera->reports()->create([
                'user_id' => Auth::id(), 
                'review' => $request->input('review')
            ]);
            return 'listo';
        }
        if($request->input('tipo') == 3){
            $id = $request->input('drawers');

            $camera = Drawer::find($id);
            $camera->reports()->create([
                'review' => $request->input('review')
            ]);
            return 'listo cajas';
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
