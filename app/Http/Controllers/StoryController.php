<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stories.index',['stories' => Story::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,story $error)
    {
        $errorTitle = false; $errorContent = false;
        if(empty($request->input('title')) && !empty($request->input('content'))) {
            $errorTitle = true ;
            return view('stories.create',compact('errorTitle'));
        }
        if(empty($request->input('content')) && !empty($request->input('title'))) {
            $errorContent = true ;
            return view('stories.create',compact('errorContent'));
        }
        if(empty($request->input('title')) && empty($request->input('content'))) {
            $errorAll = true ;
            return view('stories.create',compact('errorAll'));
        }
        else {
            $story = Story::create($request->all());
            $error = false;
            return redirect(route('stories.index',$error));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(story $story)
    {
        return view('stories.show',compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(story $story)
    {
        return view('stories.edit',compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,story $story)
    {
        $story->update($request->all());
        return redirect(route('stories.show',$story));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(story $story)
    {
        $story->delete();
        return redirect(route('stories.index'));
    }
}
