<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edu;

class EduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edus = Edu::latest()->get();
        return view('pages.educations.index', compact('edus'));
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
        $edus = new Edu();
        $edus->name = $request->name;
        $edus->description = $request->description;
        $edus->since = $request->since;
        $edus->save();

        return redirect()->back()->with('success', 'Data added successfully');
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
        $edus = Edu::findOrFail($id);
        $edus->name = $request->name;
        $edus->description = $request->description;
        $edus->since = $request->since;
        $edus->save();

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edus = Education::findOrFail($id);
        $edus->delete();

        return redirect()->back()->with('success', 'Data deleted successfully');
    }
}
