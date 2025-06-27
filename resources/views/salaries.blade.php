@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Salaries</h1>
    <table class="min-w-full bg-white rounded-xl shadow-card">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left">Functie</th>
                <th class="px-4 py-2 text-left">Salaris</th>
            </tr>
        </thead>
        <tbody>
            @foreach($positions as $position)
                <tr>
                    <td class="px-4 py-2">{{ $position->title }}</td>
                    <td class="px-4 py-2">€{{ number_format($position->salary, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
