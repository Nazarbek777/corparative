<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }
    public function create()
    {
        return view('admin.testimonials.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_uz' => 'nullable|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'position_uz' => 'nullable|string|max:255',
            'position_ru' => 'nullable|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'testimonial_uz' => 'nullable|string',
            'testimonial_ru' => 'nullable|string',
            'testimonial_en' => 'nullable|string',
        ]);

        Testimonial::create($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial muvaffaqiyatli yaratildi');
    }
    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.show', compact('testimonial'));
    }
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_uz' => 'nullable|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'position_uz' => 'nullable|string|max:255',
            'position_ru' => 'nullable|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'testimonial_uz' => 'nullable|string',
            'testimonial_ru' => 'nullable|string',
            'testimonial_en' => 'nullable|string',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial muvaffaqiyatli yangilandi');
    }
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial muvaffaqiyatli o\'chirildi');
    }
}
