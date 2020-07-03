<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pertanyaan;
use App\jawaban;
use Illuminate\Support\Facades\DB;

class jawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'isi' => 'required',
        ]);
        $input = $request->all();   
        $input['userid'] = 1; //di hardcode coyyy 1 yahhhh
        jawaban::create($input);
        return redirect('/pertanyaan');
        
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
        $data = jawaban::where('pertanyaan_id', $id)->get();
        // dd($data);
         $task = pertanyaan::findOrFail($id);
         return view('jawaban',['data' => $data])->withTask($task);
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
        $jawab = jawaban::find($id);
        $jawab->delete();
        return redirect('/pertanyaan');
    }
}
