@extends('layouts.app')

@section('title', $title)

@section('content')
<h1 class="mb-6 text-2xl font-bold">{{ $title }}</h1>

<div class="mb-6 grid gap-4 md:grid-cols-4">
    @foreach ($stats as $stat)
        <x-stat-card :title="$stat['label']" :value="$stat['value']" />
    @endforeach
</div>

@if ($alerts->count() > 0)
    <div class="mb-6 rounded-lg border border-red-300 bg-red-50 p-4 text-red-700">
        <strong>{{ $alerts->count() }}</strong> overdue vaccination(s) need follow-up.
    </div>
@elseif (count($outOfStock) > 0)
    <div class="mb-6 rounded-lg border border-amber-300 bg-amber-50 p-4 text-amber-700">
        Out of stock: {{ implode(', ', $outOfStock) }}. Please reschedule affected residents.
    </div>
@else
    <div class="mb-6 rounded-lg border border-emerald-300 bg-emerald-50 p-4 text-emerald-700">
        All clear! No overdue vaccinations.
    </div>
@endif

<div class="grid gap-6 lg:grid-cols-2">
    <x-panel title="Overdue">
        <ul class="space-y-2 text-sm">
            @forelse ($alerts as $alert)
                <li>
                    <span class="font-medium">{{ $alert->patient_name }}</span>
                    ({{ $alert->purok }}) – {{ $alert->vaccine }}, due {{ $alert->scheduled_at->format('M j, Y') }}
                </li>
            @empty
                <li class="text-slate-500">Nothing overdue.</li>
            @endforelse
        </ul>
    </x-panel>

    <x-panel title="Upcoming">
        <ul class="space-y-2 text-sm">
            @forelse ($upcoming as $item)
                <li>
                    <span class="font-medium">{{ $item->patient_name }}</span>
                    ({{ $item->purok }}) – {{ $item->vaccine }} on {{ $item->scheduled_at->format('M j, Y') }}
                </li>
            @empty
                <li class="text-slate-500">No upcoming schedules.</li>
            @endforelse
        </ul>
    </x-panel>
</div>
@endsection
