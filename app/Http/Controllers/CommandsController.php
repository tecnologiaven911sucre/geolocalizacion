<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cc = DB::table('commands')->get();

        return view('cc.index',compact('cc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('commands')->insert([
            "state" => $request->input('cc'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()  
            ]);
            
            return redirect()->route('centrodecomando.index')->with('info','Se ha ingresado el centro de comando correctamente');
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
        $cc = DB::table('commands')->where('id',$id)->first();
        
        return view('cc.edit', compact('cc'));
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
        DB::table('commands')->where('id',$id)->update([
            "state" => $request->input('cc'),
            "updated_at" => Carbon::now()  
        ]);

        return redirect()->route('centrodecomando.index')->with('info','Se actualizaron los datos en correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('commands')->where('id',$id)->delete();

        return redirect()->route('centrodecomando.index')->with('Se eliminaron los datos correctamente');
    }
}
