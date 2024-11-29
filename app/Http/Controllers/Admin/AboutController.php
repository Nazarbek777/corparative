<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.abouts.index', compact('abouts'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.abouts.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'content_uz' => 'nullable|string',
            'content_ru' => 'nullable|string',
            'content_en' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $about = About::findOrFail($id);

        $image = $about->image;
        if ($request->hasFile('image')) {
            if ($image) {

                Storage::delete('public/' . $image);
            }
            $image = $request->file('image')->store('images', 'public');
        }

        $about->update([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'content_uz' => $request->content_uz,
            'content_ru' => $request->content_ru,
            'content_en' => $request->content_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'image' => $image,
        ]);

        return redirect()->route('abouts.index')->with('success', 'Ma\'lumot muvaffaqiyatli yangilandi.');
    }
}
