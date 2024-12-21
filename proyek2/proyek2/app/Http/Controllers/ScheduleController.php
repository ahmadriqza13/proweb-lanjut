<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::where('user_id', auth()->id())->get();
        return view('schedules.index', compact('schedules'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'time' => 'required|date_format:H:i',
            'feed_quantity' => 'required|integer|min:10|max:500',
        ]);

        Schedule::create([
            'user_id' => auth()->id(),
            'time' => $validated['time'],
            'feed_quantity' => $validated['feed_quantity'],
            'is_active' => true,
        ]);

        return redirect()->back()->with('success', 'Jadwal berhasil ditambahkan!');
    }

    public function update(Request $request, Schedule $schedule)
    {
        $validated = $request->validate([
            'time' => 'required|date_format:H:i',
            'feed_quantity' => 'required|integer|min:10|max:500',
            'is_active' => 'required|boolean',
        ]);

        $schedule->update($validated);
        return redirect()->back()->with('success', 'Jadwal berhasil diperbarui!');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->back()->with('success', 'Jadwal berhasil dihapus!');
    }
}
