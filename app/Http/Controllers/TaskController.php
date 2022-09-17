<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = new Task();
       /*  $tasks = $task->get(); */
        $tasks = $task->paginate(5);
        
        return view('tasks.index', compact('tasks'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tasks = new Task();
        $tasks->title = $request->title;
        $tasks->des = $request->des;
        $tasks->save();

        notify()->success('Successfully task added to Db.');
        
        return redirect('task');
        
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
        $task = new Task();
        $task = $task->WHERE('id', $id)->first();
        
        return view('tasks.edit', compact('task'));
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
        $task = new Task();
        $task = $task->WHERE('id', $id)->first();
        $task->title = $request->title;
        $task->des = $request->des;
        $task->update();
        return redirect('task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = new Task();
        $task = $task->WHERE('id', $id)->first();
        $task->delete();
        notify()->success('Successfully task deleted from Db. 👍');
        return redirect('task');
        
    }
    /* 
    * Create pdf function
    *
     */
    public function createpdf() {
        
        $task = new Task();
        $task = $task->all();
        $pdf = PDF::loadView('tasks.generatepdf',['task' => $task]); 
        
    
        return $pdf->download('tasks.pdf');
    }
}