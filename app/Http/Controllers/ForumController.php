<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

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

        $request->validate([
            'title' => 'required|min:3|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|min:3|max:255',
            'content' => 'required|min:3|max:255',
        ]);

        $forum = Forum::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'content' => $request->content,
            'image' => $request->image ?? 'https://www.eltiempo.com/files/image_1200_680/uploads/2019/12/07/5dec47012d257.jpeg',
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
        ]);


        return view('forum.view', compact('forum'));
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
