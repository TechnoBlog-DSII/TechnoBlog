<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $personal = $request->personal ?? false;

        $forums = Forum::latest()->paginate(10);

        if ($personal == true) {
            $forums = Forum::where('user_id', auth()->user()->id)->latest()->paginate(10);
        }

        return view('forum.index', compact('forums', 'personal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('forum.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('forum.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        return view('forum.view', compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        return view('forum.edit', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        return view('forum.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        return view('forum.delete');
    }
}
