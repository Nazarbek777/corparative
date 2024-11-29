<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('faqs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question_uz' => 'required|string|max:255',
            'question_ru' => 'required|string|max:255',
            'question_en' => 'required|string|max:255',
            'answer_uz' => 'required|string',
            'answer_ru' => 'required|string',
            'answer_en' => 'required|string',
        ]);

        Faq::create($validated);

        return redirect()->route('faqs.index')->with('success', 'FAQ muvaffaqiyatli yaratildi');
    }


    public function show($id)
    {
        $faq = Faq::findOrFail($id);
        return view('faqs.show', compact('faq'));
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('faqs.edit', compact('faq'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'question_uz' => 'required|string|max:255',
            'question_ru' => 'required|string|max:255',
            'question_en' => 'required|string|max:255',
            'answer_uz' => 'required|string',
            'answer_ru' => 'required|string',
            'answer_en' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($validated);

        return redirect()->route('faqs.index')->with('success', 'FAQ muvaffaqiyatli yangilandi');
    }


    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ muvaffaqiyatli o\'chirildi');
    }
}
