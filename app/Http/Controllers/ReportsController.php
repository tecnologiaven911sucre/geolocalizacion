<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Drawer;
use App\Camera;
use App\Novelty;
use App\Report;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $reports = Report::with('user')->get();

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

        return view('reports.create',['reports' => new Report], compact('drawers','cameras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userAuth = Auth::id();

        if($request->input('tipo') == 1){
            $novelty = Novelty::first();
            $novelty->reports()->create([
                'user_id' => $userAuth,
                'review' => $request->input('review')
                ]);
            }
            if($request->input('tipo') == 2){
                $id = $request->input('cameras');
                
                $camera = Camera::find($id);
                $camera->reports()->create([
                    'user_id' => $userAuth,
                    'review' => $request->input('review')
                    ]);
            
        }
        if($request->input('tipo') == 3){
            $id = $request->input('drawers');
            
            $drawer = Drawer::find($id);
            $drawer->reports()->create([
                'user_id' => $userAuth,
                'review' => $request->input('review')
            ]);
        }
        return redirect()->route('reportes.index')->with('info','Se ha creado un reporte');
        
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
        $reports = Report::findOrFail($id);
        if($reports->reportable_type == "App\Novelty"){
            return view('reports.edit', compact('reports'));
        }
        if($reports->reportable_type == "App\Camera"){
            $cameras = Camera::all();
            return view('reports.edit', compact('reports','cameras'));
        }
        if($reports->reportable_type == "App\Drawer"){
            $drawers = Drawer::all();
            return view('reports.edit', compact('reports','drawers'));
        }

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
        $reports = Report::findOrFail($id);
        $userAuth = Auth::id();

        if($reports->reportable_type == "App\Novelty"){
            $novelty = Novelty::find($id);
            $novelty->reports()->save([
                'user_id' => $userAuth,
                'review' => $request->input('review')
                ]);
        }
        if($reports->reportable_type == "App\Camera"){
            $camera = Camera::find($id);
            $camera->reports()->save([
                'user_id' => $userAuth,
                'review' => $request->input('review')
                ]);
        }
        if($reports->reportable_type == "App\Drawer"){
            $drawer = Drawer::find($id);
            $drawer->reports()->save([
                'user_id' => $userAuth,
                'review' => $request->input('review')
                ]);
        }

        return redirect()->route('reportes.index')->with('info','Se actualizo el reporte');

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
