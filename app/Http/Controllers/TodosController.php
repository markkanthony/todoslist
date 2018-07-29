<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;
use Session;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $todos = Todo::all();
        return view('todos')->with('todos',$todos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        
        // $todos = Todo::all();
        // return view('todos')->with('todos',$todos);

        // dd($request->all());

        $todos = new Todo;

        $todos->todo  = $request->todo;
        $todos->save();
        Session::flash('success','Your todo list is created!');
        return redirect()->back();
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
        $todo = Todo::find($id);

        return view('edit')->with('todo',$todo);
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

        // dd($request->all());

        $todo = Todo::find($id);

        $todo->todo = $request->todo;

        $todo->save();

        Session::flash('success','Your todo list is updated!');
        return redirect()->route('todos');

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
        // dd($id); 
        $todo = Todo::find($id);
        $todo->delete();
        Session::flash('success','Your todo list is deleted!');
        return redirect()->back();
    }

    public function complete($id){
    
        $todo = Todo::find($id);
        $todo->completed = 1;

        $todo->save();
        
        Session::flash('success','Your todo list is completed!');
        return redirect()->back();
    }
}
