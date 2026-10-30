@extends('layouts.app')

@section('title', $title)

@section('content')
<h1 class="mb-6 text-2xl font-bold">{{ $title }}</h1>

<x-panel title="All Schedules">
    <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm">
            <thead class="bg-slate-100 text-slate-600">
                <tr>
                    <th class="px-3 py-2">#</th>
                    <th class="px-3 py-2">Patient</th>
                    <th class="hidden px-3 py-2 sm:table-cell">Purok</th>
                    <th class="px-3 py-2">Vaccine</th>
                    <th class="hidden px-3 py-2 md:table-cell">Dose</th>
                    <th class="px-3 py-2">Date</th>
                    <th class="px-3 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($schedules as $schedule)
                    <tr class="border-t {{ $loop->odd ? 'bg-white' : 'bg-slate-50' }}">
                        <td class="px-3 py-2">{{ $loop->iteration }}</td>
                        <td class="px-3 py-2">{{ $schedule->patient_name }}</td>
                        <td class="hidden px-3 py-2 sm:table-cell">{{ $schedule->purok }}</td>
                        <td class="px-3 py-2">{{ $schedule->vaccine }}</td>
                        <td class="hidden px-3 py-2 md:table-cell">{{ $schedule->dose }}</td>
                        <td class="px-3 py-2">{{ $schedule->scheduled_at->format('M j, Y') }}</td>
                        <td class="px-3 py-2">
                            {{ $schedule->status }}
                            @unless ($schedule->status !== 'Overdue')
                                <span class="ml-1 rounded-full bg-red-100 px-2 py-0.5 text-xs font-semibold text-red-700">Overdue</span>
                            @endunless
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-3 py-4 text-center text-slate-500">No schedules yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-panel>
@endsection
