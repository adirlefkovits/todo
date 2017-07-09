<?php

class taskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return ['tasks' => []];
		//return Task::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Task::create([
            "name"        => Input::get("name"),
            "status" => false,
            // "started_at"  => Input::get("started_at"),
            // "ended_at"    => Input::get("ended_at")
    ]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($task)
	{
		return $task;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($task)
	{
		$task->name        = Input::get("name");
    $task->description = Input::get("status");
    // $task->started_at  = Input::get("started_at");
    // $task->ended_at    = Input::get("ended_at");
    $task->save();
    return $task;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 public function destroy($task)
     {
         $task->delete();
         return Response::json(true);
     }


}
