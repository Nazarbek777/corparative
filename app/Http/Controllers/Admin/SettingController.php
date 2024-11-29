<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.index', compact('settings'));
    }


    public function create()
    {
        return view('admin.settings.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|string|max:255|unique:settings',
            'value_uz' => 'nullable|string',
            'value_ru' => 'nullable|string',
            'value_en' => 'nullable|string',
        ]);

        Setting::create($validated);

        return redirect()->route('settings.index')->with('success', 'Setting muvaffaqiyatli yaratildi');
    }


    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.show', compact('setting'));
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.edit', compact('setting'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'key' => 'required|string|max:255|unique:settings,key,' . $id,
            'value_uz' => 'nullable|string',
            'value_ru' => 'nullable|string',
            'value_en' => 'nullable|string',
        ]);

        $setting = Setting::findOrFail($id);
        $setting->update($validated);

        return redirect()->route('admin.settings.index')->with('success', 'Setting muvaffaqiyatli yangilandi');
    }


    public function destroy($id)
    {
        $setting = Setting::findOrFail($id);
        $setting->delete();

        return redirect()->route('settings.index')->with('success', 'Setting muvaffaqiyatli o\'chirildi');
    }
}
