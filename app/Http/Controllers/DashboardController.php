<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Bakuna Tracker – Purok Ancog';
        $schedules = Vaccination::orderBy('scheduled_at')->get();
        $stats = [
            ['label' => 'Total', 'value' => $schedules->count()],
            ['label' => 'Done', 'value' => $schedules->where('status', 'Done')->count()],
            ['label' => 'Scheduled', 'value' => $schedules->where('status', 'Scheduled')->count()],
            ['label' => 'Overdue', 'value' => $schedules->where('status', 'Overdue')->count()],
        ];
        $alerts = $schedules->where('status', 'Overdue');

        // vaccines the health center ran out of (no stock table yet)
        $outOfStock = ['MMR'];

        $upcoming = $schedules->where('status', 'Scheduled');

        return view('dashboard.index', compact('title', 'stats', 'schedules', 'alerts', 'outOfStock', 'upcoming'));
    }

    public function schedule()
    {
        $title = 'Vaccination Schedule';
        $schedules = Vaccination::orderBy('scheduled_at')->get();

        return view('dashboard.schedule', compact('title', 'schedules'));
    }
}
