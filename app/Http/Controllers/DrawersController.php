<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Operability;
use App\Command;
use App\Drawer;
use App\Http\Requests\CreateDrawersRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class DrawersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $drawers = \App\Drawer::all();

       return view('drawers.index',compact('drawers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Operability::all();
        $command = Command::all();
        
        return view('drawers.create',compact('status','command'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDrawersRequest $request)
    {
        $img = '';
        if($request->hasFile('photo')){

            $img = $request->file('photo')->store('uploads','public');

        }
        
        DB::table('drawers')->insert([
            "code" => $request->input('code'),
            "serial_t_lindus" => $request->input('serial_t_lindus'),
            "ip_t_lindus" => $request->input('ip_t_lindus'),
            "order" => $request->input('order'),
            "circuit" => $request->input('circuit'),
            "location" => $request->input('location'),
            "vlan" => $request->input('vlan'),
            "photo" => $img,
            "latitude" => $request->input('latitude'),
            "length" => $request->input('length'),
            "command_id" => $request->input('command_center'),
            "operability_id" => $request->input('status'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
            ]);
            
            return redirect()->route('cajas.index')->with('info','Se agregaron los datos correctamente');
        }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drawers = Drawer::findOrFail($id);
        return view('drawers.show', compact('drawers'));
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
        $command = Command::all();
        $drawers = Drawer::findOrFail($id);
        return view('drawers.edit', compact('drawers','status','command'));
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
        DB::table('drawers')->where('id',$id)->update([
            "code" => $request->input('code'),
            "serial_t_lindus" => $request->input('serial_t_lindus'),
            "ip_t_lindus" => $request->input('ip_t_lindus'),
            "order" => $request->input('order'),
            "circuit" => $request->input('circuit'),
            "location" => $request->input('location'),
            "vlan" => $request->input('vlan'),
            "photo" => $img,
            "latitude" => $request->input('latitude'),
            "length" => $request->input('length'),
            "command_id" => $request->input('command_center'),
            "operability_id" => $request->input('status'),
            "updated_at" => Carbon::now()
            ]);
        
            return redirect()->route('cajas.index')->with('info','Se actualizaron los datos de la caja');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Drawer::destroy($id);

        return redirect()->route('cajas.index')->with('info','Se elimino correctamente la caja');

    }
}
