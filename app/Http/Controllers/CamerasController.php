<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCameraRequest;
use DB;
use Carbon\Carbon;

class CamerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cameras = DB::table('cameras')->get();

        return view('camerasRep.index',compact('cameras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('camerasRep.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCameraRequest $request)
    {   
       
           DB::table('cameras')->insert([
            "ip_cameras" => $request->input('ip'),
            "code" => $request->input('codigo'),
            "serial" => $request->input('serial'),
            "status" => $request->input('estado'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
           ]);

           
        return redirect()->route('camaras.index'); 
        // back()->with('info','Se envio correctamente');
 
        // redirect()->route('camaras.create')
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
       $cameras = DB::table('cameras')->where('id',$id)->first();
        return view('camerasRep.show', compact('cameras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $cameras = DB::table('cameras')->where('id',$id)->first();

        return view('camerasRep.edit', compact('cameras'));
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
        DB::table('cameras')->where('id',$id)->update([
            "ip_cameras" => $request->input('ip'),
            "code" => $request->input('codigo'),
            "serial" => $request->input('serial'),
            "status" => $request->input('estado'),
            "updated_at" => Carbon::now()
        ]);
        return redirect()->route('camaras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cameras')->where('id',$id)->delete();

        return redirect()->route('camaras.index');
    }
}
