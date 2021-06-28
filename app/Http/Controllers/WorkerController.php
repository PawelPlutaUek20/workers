<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use Illuminate\Support\Facades\DB;

class WorkerController extends Controller
{
    /**
     * return list of workers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Worker::all();
    }

    /**
     * create new worker from data in body.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'zip' => 'required|string|size:6',
            'salary' => 'required|between:0,9999999.99',
            'type' => 'required|in:CEO,FOUNDER,MANAGER,REGULAR'
        ]);

        return Worker::create($request->all());
    }

    /**
     * return worker by given UUID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        return Worker::find($uuid);
    }


    /**
     * delete worker by given UUID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        return Worker::destroy($uuid);
    }

    /**
     * return JSON with average salary general and average salary for each worker type.
     *
     * @return \Illuminate\Http\Response
     */
    public function salary(){

        return response()
                    ->json([
                        'average_salary_general' => Worker::avg('salary'),
                        'average_salary_by_type' => Worker::select('type', DB::raw('avg(salary) as average_salary'))->groupBy('type')->get()
                    ]);
     }
}