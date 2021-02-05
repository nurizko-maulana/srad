<?php

namespace App\Http\Controllers;

use App\Models\ApplicationPostgraduate;
use Illuminate\Http\Request;

class ApplicationPostgraduateController extends Controller
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
     * @param  \App\Models\ApplicationPostgraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationPostgraduate $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicationPostgraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationPostgraduate $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicationPostgraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationPostgraduate $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicationPostgraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationPostgraduate $application)
    {
        //
    }

    public function sradAccept(){
        
    }

    public function facultyAccept(){

    }

    public function sradReject(){
        
    }

    public function facultyReject(){
        
    }
}
