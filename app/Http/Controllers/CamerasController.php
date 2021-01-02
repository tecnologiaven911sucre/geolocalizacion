<?php

 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCameraRequest;
use DB;
use Carbon\Carbon;
use App\Camera;
use App\Operability;
use App\Drawer;

class CamerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cameras =\App\Camera::all();

        return view('camerasRep.index',compact('cameras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $status = Operability::all();
        $drawers = Drawer::all();
        return view('camerasRep.create',compact('status','drawers'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCameraRequest $request)
    {   
        // dd($request->all());
        $img = '';
        if($request->hasFile('photo')){

            $img = $request->file('photo')->store('uploads','public');

        }

        DB::table('cameras')->insert([
            "ip_camera" => $request->input('ip_camera'),
            "photo" => $img,
            "operability_id" => $request->input('status'),
            "drawer_id" => $request->input('cajas'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
            ]);
            
            
            return redirect()->route('camaras.index')->with('info','Se ha registrado una camara'); 
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
            $cameras = Camera::findOrFail($id);
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
            
            $status = Operability::all();
            $drawers = Drawer::all();
            $cameras = Camera::findOrFail($id);
            return view('camerasRep.edit', compact('cameras','status','drawers'));
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
        $img = '';
        if($request->hasFile('photo')){
            $drawers = Drawer::findOrFail($id);
            
            Storage::delete('public/'.$drawers->photo);
            
            $img = $request->file('photo')->store('uploads','public');
            
        }
        
        DB::table('cameras')->where('id',$id)->update([
            "ip_camera" => $request->input('ip_camera'),
            "photo" => $img,
            "operability_id" => $request->input('status'),
            "drawer_id" => $request->input('cajas'),
            "updated_at" => Carbon::now()
            ]);
            return redirect()->route('camaras.index')->with('info','Se actualizo la informacion de la camara');
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
