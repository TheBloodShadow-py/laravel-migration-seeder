@extends('layouts.default')

@section('content')
    <main class="mt-12 p-2">
        <div class="container my-0 mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-5">
                @forelse ($trains as $train)
                    <div class="p-5 rounded drop-shadow-lg bg-emerald-300 text-slate-800">
                        <div class="flex flex-col gap-2">
                            <h2><b class="text-slate-900 font-bold">Train Code:</b> {{ $train->train_code }}</h2>
                            <span><b class="text-slate-900 font-bold">Business:</b> {{ $train->business }}</span>
                            <span><b class="text-slate-900 font-bold">Departure Station:</b>
                                {{ $train->departure_station }}</span>
                            <span><b class="text-slate-900 font-bold">Departure Time:</b> {{ $train->departure_time }}</span>
                            <span><b class="text-slate-900 font-bold">Arrival Station:</b>
                                {{ $train->arrival_station }}</span>
                            <span><b class="text-slate-900 font-bold">Arrival Time:</b> {{ $train->arrival_time }}</span>
                            <span><b class="text-slate-900 font-bold">Is In Time?:</b>
                                {{ $train->is_in_time == 0 ? 'No' : 'Yes' }}</span>
                        </div>
                    </div>
                @empty
                    <span class="text-red-500">No Train founded</span>
                @endforelse
            </div>
        </div>
    </main>
@endsection
