<?php

namespace App\Http\Controllers;

use App\Models\Postgraduate;
use Illuminate\Http\Request;

class PostgraduateController extends Controller
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
    public function create()
    {
        //
    }

    public function export()
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacultyAdmissionStaff  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Postgraduate $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postgraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Postgraduate $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postgraduate $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postgraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postgraduate $application)
    {
        //
    }
}
