<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

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
        $validated = $request->validate([
            'name_uz' => 'nullable|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'position_uz' => 'nullable|string|max:255',
            'position_ru' => 'nullable|string|max:255',
            'position_en' => 'nullable|string|max:255',
        ]);

        Team::create($validated);

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
        return view('teams.edit', compact('team'));
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
        ]);

        $team = Team::findOrFail($id);
        $team->update($validated);

        return redirect()->route('admin.teams.index')->with('success', 'Team muvaffaqiyatli yangilandi');
    }


    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team muvaffaqiyatli o\'chirildi');
    }
}
