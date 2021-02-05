<?php

namespace App\Http\Controllers;

use App\Models\ApplicationUndergraduate;
use Illuminate\Http\Request;

class ApplicationUndergraduateController extends Controller
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
     * @param  \App\Models\ApplicationUndergraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationUndergraduate $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicationUndergraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationUndergraduate $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicationUndergraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationUndergraduate $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicationUndergraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationUndergraduate $application)
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
