<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Drawer;
use App\Status;
use App\Command;
use Carbon\Carbon;

class DrawersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $drawers =DB::table('drawers')->get();

       return view('drawers.index',compact('drawers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        $command = Command::all();

        return view('drawers.create',compact('status','command'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());


        DB::table('drawers')->insert([
            "code" => $request->input('code'),
            "serial_t_lindus" => $request->input('serial_t_lindus'),
            "ip_t_lindus" => $request->input('ip_t_lindus'),
            "command_center_id" => $request->input('command_center'),
            "order" => $request->input('order'),
            "circuit" => $request->input('circuit'),
            "location" => $request->input('location'),
            "vlan" => $request->input('status'),
            "status_id" => $request->input('ip_t_lindus'),
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
