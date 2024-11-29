<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }
    public function create()
    {
        return view('admin.teams.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name_uz' => 'nullable|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'position_uz' => 'nullable|string|max:255',
            'position_ru' => 'nullable|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('teams', $filename, 'public');
            $data['image'] = $path;
        }
        Team::create($data);

        return redirect()->route('teams.index')->with('success', 'Team muvaffaqiyatli yaratildi');
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.teams.show', compact('team'));
    }


    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.teams.edit', compact('team'));
    }


    public function update(Request $request, Team $team)
    {
        $validate = $request->validate([
            'name_uz' => 'nullable|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'position_uz' => 'nullable|string|max:255',
            'position_ru' => 'nullable|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('teams', $filename, 'public');
            $validate['image'] = $path;
        }
        $team->update($validate);

        return redirect()->route('teams.index')->with('success', 'Team muvaffaqiyatli yangilandi');
    }


    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team muvaffaqiyatli o\'chirildi');
    }
}
