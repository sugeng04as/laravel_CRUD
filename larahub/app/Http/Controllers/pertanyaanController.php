<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pertanyaan;

class pertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = pertanyaan::all();
        return view('pertanyaan',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_tanya');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);   

        $input = $request->all();   
        $input['userid'] = 1; //di hardcode coyyy 1 yahhhh

        pertanyaan::create($input);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $tanya = pertanyaan::findOrFail($id);
        // return view('edit_tanya')->withTask($tanya);

        $task = pertanyaan::findOrFail($id);
        return view('edit_tanya')->withTask($task);
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
       
         $input = $request->all();   
         $input['userid'] = 1; //di hardcode coyyy 1 yahhhh
         pertanyaan::find($id) -> update($input);

        //  dd($input);
        //  $task->update($input);
          return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tanya = pertanyaan::find($id);
         $tanya->delete();
         return redirect('/pertanyaan');
    }
}
