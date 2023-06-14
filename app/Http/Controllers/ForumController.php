<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;

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
        $categories = Category::all();

        return view('forum.edit', compact('forum', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'title' => 'required|min:3|max:255|unique:forums,title,' . $forum->id . ',id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|min:3|max:255',
            'content' => 'required|min:3|max:255',
        ]);

        $newSlug = Str::slug($request->title);

        if ($newSlug !== $forum->slug) {
            $slugExists = Forum::where('slug', $newSlug)->exists();
            if ($slugExists) {
                return redirect()->back()->withErrors(['title' => 'Este títutlo ya existe, porfavor escoge otro título.']);
            }
        }

        $forum->slug = $newSlug;
        $forum->update($request->all());

        return view('forum.view', compact('forum'))->with('success', 'Foro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        $img = $forum->image;
        $forum->delete();
        Storage::delete($img);
        return redirect()->route('forum.index', ['personal' => true])->with('success', 'Foro borrado correctamente');
    }
}
