<?php
namespace App\Http\Controllers;

use App\Models\Position;

class SalariesController extends Controller
{
    public function index()
    {
        $positions = Position::select('title', 'salary')->orderByDesc('salary')->take(10)->get();
        return view('salaries', compact('positions'));
    }
}
