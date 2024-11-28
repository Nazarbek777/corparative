<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_uz' => 'required|string',
            'content_ru' => 'required|string',
            'content_en' => 'required|string',
            'status' => 'in:active,inactive',
        ]);

        Blog::create($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog muvaffaqiyatli yaratildi');
    }


    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.show', compact('blog'));
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_uz' => 'required|string',
            'content_ru' => 'required|string',
            'content_en' => 'required|string',
            'status' => 'in:active,inactive',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog muvaffaqiyatli yangilandi');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog muvaffaqiyatli o\'chirildi');
    }
}
