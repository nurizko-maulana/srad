<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
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
    public function store(Student $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SRADStaff  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Student $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SRADStaff  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $application)
    {
        //
    }
}
