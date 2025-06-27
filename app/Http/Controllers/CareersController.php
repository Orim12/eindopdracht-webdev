<?php
namespace App\Http\Controllers;

use App\Models\Position;

class CareersController extends Controller
{
    public function index()
    {
        $positions = Position::with(['employer', 'tags'])->inRandomOrder()->take(10)->get();
        return view('careers', compact('positions'));
    }
}
