<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
    public function store(User $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Undergraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function show(User $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Undergraduate  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(User $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $application)
    {
        //
    }
}
