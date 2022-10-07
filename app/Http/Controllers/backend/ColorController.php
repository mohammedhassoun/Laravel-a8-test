<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\Color;
use Illuminate\Http\Request;

class ColorController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Color = Color::latest()->paginate(5);

        return view('backend.Color.index',compact('Color'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_Color()
    {
        $Colors = Color::orderBy('id', 'DESC')->paginate();
        return view('backend.Colors.index', compact('Colors'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);


        Color::create($request->all());

        return redirect()->route('Color.index')->with('success','Color created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $Color)
    {
        return view('backend.Color.show',compact('Color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $Color)
    {
        return view('backend.Color.edit',compact('Color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $Color)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $Color->update($request->all());

        return redirect()->route('backend.Colors.index')->with('success','Color updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $Color)
    {
        $Color->delete();


        return redirect()->route('Colors.index')->with('success','Color deleted successfully');
    }
}
